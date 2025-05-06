<?php

namespace App\Http\Controllers;

use App\Models\TipoViolencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipoViolenciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

// Gestion de Tipos de Violencias
class TipoViolenciaController extends Controller
{
    // Muestra el listado de tipos de violencia
    public function index(Request $request): View
    {
        $tipoViolencias = TipoViolencia::paginate(50)->withQueryString();

        return view('tipo-violencia.index', ['tipoViolencias' => $tipoViolencias])
            ->with('i', ($request->input('page', 1) - 1) * $tipoViolencias->perPage());

    }

    // Muestra el formulario para crear un nuevo tipo de violencia
    public function create(): View
    {
        $tipoViolencia = new TipoViolencia();

        return view('tipo-violencia.create', compact('tipoViolencia'));
    }

    // Guarda el nuevo tipo de violencia
    public function store(TipoViolenciaRequest $request): RedirectResponse
    {
        TipoViolencia::create($request->validated());

        return Redirect::route('tipo-violencia.index')
            ->with('success', 'Tipo de Violencia creado correctamente.');
    }

    // Muestra detalles de un tipo de violencia
    public function show($id): View
    {
        $tipoViolencia = TipoViolencia::findOrFail($id);

        return view('tipo-violencia.show', compact('tipoViolencia'));
    }

    // Muestra el formulario de edición de tipo de violencia
    public function edit($id): View
    {
        $tipoViolencia = TipoViolencia::findOrFail($id);

        return view('tipo-violencia.edit', compact('tipoViolencia'));
    }

    // Actualiza tipo de violencia
    public function update(TipoViolenciaRequest $request, $id): RedirectResponse
    {
        $tipoViolencia = TipoViolencia::findOrFail($id);
        $tipoViolencia->update($request->validated());

        return Redirect::route('tipo-violencia.index')
            ->with('success', 'Tipo de Violencia actualizado correctamente.');
    }

    // Elimina el tipo de violencia
    public function destroy($id)
    {
        try {
            $tipoViolencia = TipoViolencia::findOrFail($id);
            $tipoViolencia->delete();
    
            return response()->json([
                'success' => true,
                'message' => 'TipoViolencia eliminada correctamente'
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => 'No se puede eliminar porque está asociada a otros datos'
            ], 400);
        }
    }
}
