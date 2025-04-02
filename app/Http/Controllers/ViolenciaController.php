<?php

namespace App\Http\Controllers;

use App\Models\Violencia;
use Illuminate\Http\Request;
use App\Http\Requests\ViolenciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\TipoViolencia;

// Gestion de Violencias
class ViolenciaController extends Controller
{
    // Mostrar listado de violencias
    public function index(Request $request): View
    {
        $violencias = Violencia::paginate(50);
        return view('violencia.index', compact('violencias'))
            ->with('i', ($request->input('page', 1) - 1) * $violencias->perPage());
    }

    // Mostrar formulario de registro
    public function create(): View
    {
        $violencia = new Violencia();
        $tiposViolencia = TipoViolencia::all();

        return view('violencia.create', compact('violencia', 'tiposViolencia'));
    }

    // Guarda una nueva violencia
    public function store(ViolenciaRequest $request)
    {
        $violencia = Violencia::create($request->validated());

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Violencia creada correctamente',
                'data' => $violencia
            ]);
        }

        return Redirect::route('violencia.index')->with('success', 'Violencia creada correctamente.');
    }


    // Mostrar datos de una violencia
    public function show($id): View
    {
        $violencia = Violencia::findOrFail($id);
        return view('violencia.show', compact('violencia'));
    }

    // Muestra formulario de edicion
    public function edit($id): View
    {
        $violencia = Violencia::findOrFail($id);
        $tiposViolencia = TipoViolencia::all();

        return view('violencia.edit', compact('violencia', 'tiposViolencia'));
    }

    // Actualiza la infromacion de una violencia
    public function update(ViolenciaRequest $request, $id)
    {
        $violencia = Violencia::findOrFail($id);
        $violencia->update($request->validated());
    
        if ($request->ajax()) {
            return response()->json(['success' => true, 'message' => 'Violencia actualizada correctamente.']);
        }
    
        return Redirect::route('violencia.index')->with('success', 'Violencia actualizada correctamente.');
    }
    
    // Elimina una violencia
    public function destroy($id)
    {
        try {
            $violencia = Violencia::findOrFail($id);
            $violencia->delete();

            return response()->json([
                'success' => true,
                'message' => 'Violencia eliminada correctamente'
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => 'No se puede eliminar porque está asociada a otros datos'
            ], 400);
        }
    }
}

