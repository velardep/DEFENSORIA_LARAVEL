<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     // Redirecciona al usuario según su rol

    public function index()
    {
        $rol = auth()->user()->rol_id;

        return match ($rol) {
            3 => redirect()->route('admin.dashboard'), // Admin
            2 => redirect('/abogado'),                  // Abogado

            default => redirect('/login'),              // Otros
        };
    }

}
