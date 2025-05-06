<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Oficina;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // ✅ Ya no usamos RegistersUsers para evitar login automático
    // use RegistersUsers;

    // Muestra el formulario de registro
    public function showRegistrationForm()
    {
        $roles = Role::all();
        $oficinas = Oficina::all();
        return view('auth.register', compact('roles', 'oficinas'));
    }

    // Procesa el formulario enviado (POST)
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $this->create($request->all());

        return redirect()->route('users.index')->with('success', 'Usuario registrado correctamente');
    }

    // Validaciones
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
            'rol_id' => ['required', 'integer'],
            'oficina_id' => ['required', 'integer'],
        ]);
    }

    // Crea el nuevo usuario
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rol_id' => $data['rol_id'],
            'oficina_id' => $data['oficina_id'],
        ]);
    }
}
