<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domicilio; // Asegúrate de tener el modelo

class FormularioController extends Controller
{
    public function actualizarDomicilio(Request $request)
    {
        // Validar los datos
        $data = $request->validate([
            'zona_barrio' => 'required|string',
            'avenida_calle' => 'nullable|string',
            'telefono_domicilio' => 'nullable|string',
            'id_victima' => 'nullable|exists:victimas,id',
            'id_agresor' => 'nullable|exists:agresores,id',
        ]);

        // Crear el nuevo domicilio
        $domicilio = Domicilio::create($data);

        return response()->json($domicilio);
    }
}
