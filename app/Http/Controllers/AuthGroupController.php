<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthGroup;

class AuthGroupController extends Controller
{
    public function index()
    {
        $grupos = AuthGroup::all(); // Traer todos los grupos desde la BD
        return view('auth_group.index', compact('grupos'));
    }

    // CREAR UN NUEVO GRUPO
    public function store(Request $request)
    {
        $grupo = AuthGroup::create([
            'name' => $request->name,
        ]);

        return response()->json($grupo);
    }

    // OBTENER UN GRUPO POR ID
    public function show($id)
    {
        return response()->json(AuthGroup::findOrFail($id));
    }

    // ACTUALIZAR UN GRUPO
    public function update(Request $request, $id)
    {
        $grupo = AuthGroup::findOrFail($id);

        // Actualizamos el campo 'name' con el valor recibido en la petición
        $grupo->update([
            'name' => $request->name,
        ]);

        return response()->json($grupo);
    }

    // ELIMINAR UN GRUPO
    public function destroy($id)
    {
        $grupo = AuthGroup::findOrFail($id);
        $grupo->delete();

        return response()->json(['message' => 'Grupo eliminado correctamente']);
    }
}
