<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        // MIDDLEWEAR es un filtro que se ejecuta antes o después de una petición HTTP al sistema. 
        // Sirve para controlar el acceso, validar datos o modificar la solicitud o respuesta.
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    // Redirección post-login según rol
    protected function redirectTo()
    {
        $rol = auth()->user()->rol_id;

        return match ($rol) {
            3 => route('admin.dashboard'),  // Admin
            2 => route('vista.abogado'),    // Abogado
            4 => route('vista.social'),      // Trabajo social
            1 => route('vista.psicologico'),      // Trabajo social

            default => '/login',            // Otros
        };
    }

    // Cierre de sesión
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
