<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

// Gestion de Roles
class RoleController extends Controller
{
    // Muestra una lista paginada de todos los roles registrados.
    public function index(Request $request): View
    {
        $roles = Role::paginate();

        return view('roles.index', compact('roles'))
            ->with('i', ($request->input('page', 1) - 1) * $roles->perPage());
    }

    // Muestra el formulario para registrar un nuevo rol.
    public function create(): View
    {
        $role = new Role();

        return view('roles.create', compact('role'));
    }

    // Guarda nuevo rol en base de datos
    public function store(RoleRequest $request)
    {
        $role = Role::create($request->validated());
    
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Rol creada correctamente',
                'data' => $role
            ]);
        }
    
        return Redirect::route('roles.index')->with('success', 'Rol creada correctamente.');
    }

    // Muestra detalles de un rol
    public function show($id): View
    {
        $role = Role::find($id);

        return view('roles.show', compact('role'));
    }

    // Muestra el formulario de edición de rol
    public function edit($id): View
    {
        $role = Role::find($id);

        return view('roles.edit', compact('role'));
    }

    // Actualiza la información de un rol existente
    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->validated());

        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Rol actualizado correctamente.']);
        }

        return Redirect::route('roles.index')->with('success', 'Rol actualizado correctamente.');
    }

    // Eliminar un rol del sistema
    public function destroy($id)
    {
        try {
            $role = Role::findOrFail($id);
            $role->delete();
    
            return response()->json([
                'success' => true,
                'message' => 'Rol eliminada correctamente'
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => 'No se puede eliminar porque está asociada a otros datos'
            ], 400);
        }
    }

}
