<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Role;   
use App\Models\Oficina; 
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

// Gestion de Usuario
class UserController extends Controller
{
    // Muestra lista de usuarios
    public function index(Request $request): View
    {
        $users = User::paginate();

        return view('user.index', compact('users'))
            ->with('i', ($request->input('page', 1) - 1) * $users->perPage());
    }

    // Muestra formulario de registro de usuario
    public function create(): View
    {
        $user = new User();

        return view('user.create', compact('user'));
    }

    // Registra nuevo usuario en la base de datos
    public function store(UserRequest $request): RedirectResponse
    {
        $data = $request->all();

        User::create($data); 

        return Redirect::route('users.index')
            ->with('success', 'User created successfully.');
    }

    // Ver detalles de un usuario específico
    public function show($id): View
    {
        $user = User::find($id);

        return view('user.show', compact('user'));
    }

    // Muestra formulario de edición de usuario
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        $oficinas = Oficina::all();

        return view('user.edit', compact('user', 'roles', 'oficinas'));
    }

    // Actualiza información del usuario
    public function update(UserRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();

        // Solo si se envió un nuevo password, lo encriptamos
        if (!empty($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        } else {
            // Si no se cambió, lo quitamos para no sobreescribirlo
            unset($data['password']);
        }

        $user->update($data);

        return Redirect::route('users.index')
            ->with('success', 'User updated successfully');
    }

    // Eliminar usuario del sistema
    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return response()->json([
                'success' => true,
                'message' => 'Usuario eliminado correctamente'
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => 'No se puede eliminar porque está asociado a otros datos'
            ], 400);
        }
    }

}
