<?php

namespace App\Http\Controllers;

use App\Models\Agresor;
use App\Models\Denuncia;
use App\Models\TipoViolencia;
use App\Models\Victima;
use App\Models\Violencia;
use Illuminate\Http\Request;

// Cargar la vista central del registro de denuncias

/* Este controlador maneja la carga inicial de la vista principal del sistema de 
denuncias a cada usuario, donde se gestionan los formularios 
dinámicos para víctima, agresor y denuncia, permitiendo su interacción sin recargar la página.*/
class RegistrarDenunciaController extends Controller
{
    // Prepara y devuelve todos los datos necesarios para cargar la vista de registro de denuncia
    public function create()
    {
        // Se obtiene el usuario autenticado y su rol
        $usuario = auth()->user();
        $rol = $usuario->rol_id;

        // Se inicializan nuevos objetos vacíos para los formularios
        $victima = new Victima();
        $agresor = new Agresor();
         $denuncia = new Denuncia();

        // Se recuperan listas completas de tipos de violencia y violencias
        $tiposViolencia = TipoViolencia::all();
        $violencias = Violencia::all();
       
        // También se cargan todas las víctimas y agresores registrados (para seleccionar en la denuncia)
        $victimas = Victima::all();
        $agresores = Agresor::all();

        // Se filtran las denuncias donde participa el usuario, ya sea como creador o asignado
        $userId = $usuario->id;
        
        $denuncias = Denuncia::where(function ($query) use ($userId) {
            $query->where('user_id', $userId)
                ->orWhereHas('asignaciones', function ($q) use ($userId) {
                    $q->where('user_id', $userId);
                    });
            })
        ->where('oficina_id', auth()->user()->oficina_id) // ← También filtra por oficina
        ->get();
    
        // Según el rol, se devuelve la vista correspondiente
        return match ($rol) {
            2 => view('registrar_denuncia.registrar_denuncia', compact(
                'victimas', 'agresores', 'tiposViolencia', 'violencias',
                'denuncia', 'victima', 'agresor', 'denuncias'
            )),
            4 => view('registrar_social.registrar_social', compact(
                'victimas', 'agresores', 'tiposViolencia', 'violencias',
                'denuncia', 'victima', 'agresor', 'denuncias'
            )),
            1 => view('registrar_psicologia.registrar_psicologia', compact(
                'victimas', 'agresores', 'tiposViolencia', 'violencias',
                'denuncia', 'victima', 'agresor', 'denuncias'
            )),
            default => abort(403)
        };
    }

}





