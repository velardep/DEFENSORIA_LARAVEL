<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AuthUser;
use Illuminate\Support\Facades\Hash;

class AuthUserController extends Controller
{
    public function index()
    {
        $users = AuthUser::all(); // Traer todos los usuarios desde la BD
        return view('auth_user.index', compact('users'));
    }

    // CREAR UN NUEVO USUARIO
    public function store(Request $request)
    {
        $user = AuthUser::create([
            'password' => Hash::make($request->password),
            'last_login' => now(),
            'is_superuser' => $request->is_superuser,
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'is_staff' => $request->is_staff,
            'is_active' => $request->is_active,
            'date_joined' => now(),
            'acces' => $request->acces,
            'defensoria_id' => $request->defensoria_id,
            'jerarquia' => $request->jerarquia,
        ]);

        return response()->json($user);
    }

    // OBTENER UN USUARIO POR ID
    public function show($id)
    {
        return response()->json(AuthUser::findOrFail($id));
    }


    // ACTUALIZAR UN USUARIO
    public function update(Request $request, $id)
    {
        $user = AuthUser::findOrFail($id);
        $user->update($request->except(['password']));

        return response()->json($user);
    }

    // ELIMINAR UN USUARIO
    public function destroy($id)
    {
        $user = AuthUser::findOrFail($id);
        $user->delete();

        return response()->json(['message' => 'Usuario eliminado correctamente']);
    }
}

