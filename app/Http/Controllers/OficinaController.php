<?php

namespace App\Http\Controllers;

use App\Models\Oficina;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OficinaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

// Gestion de Oficina
class OficinaController extends Controller
{
    // Muestra la lista paginada de oficinas registradas
    public function index(Request $request): View
    {
        $oficinas = Oficina::paginate();

        return view('oficina.index', compact('oficinas'))
            ->with('i', ($request->input('page', 1) - 1) * $oficinas->perPage());
    }

    // Muestra el formulario para registrar una nueva oficina
    public function create(): View
    {
        $oficina = new Oficina();

        return view('oficina.create', compact('oficina'));
    }

    // Registra una nueva oficina en la base de datos
    public function store(OficinaRequest $request)
    {
        $oficina = Oficina::create($request->validated());

        /* Si la solicitud es AJAX, devuelve una respuesta JSON con el mensaje de éxito y los datos creados. 
        Si es una solicitud tradicional, redirige al índice con un mensaje de éxito.*/
        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Oficina creada correctamente',
                'data' => $oficina
            ]);
        }

        return Redirect::route('oficinas.index')
            ->with('success', 'Oficina created successfully.');
    }

    // Muestra los detalles de una oficina específica
    public function show($id): View
    {
        $oficina = Oficina::find($id);

        return view('oficina.show', compact('oficina'));
    }

    // Muestra el formulario de edición de una oficina
    public function edit($id): View
    {
        $oficina = Oficina::find($id);

        return view('oficina.edit', compact('oficina'));
    }

    // Actualiza la información de una oficina existente
    public function update(OficinaRequest $request, Oficina $oficina): RedirectResponse
    {
        $oficina->update($request->validated());

        return Redirect::route('oficinas.index')
            ->with('success', 'Oficina updated successfully');
    }

    // Elimina una oficina de la base de datos
    public function destroy($id)
    {
        try {
            $oficina = Oficina::findOrFail($id);
            $oficina->delete();
    
            return response()->json([
                'success' => true,
                'message' => 'Oficina eliminada correctamente'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'No se pudo eliminar la oficina'
            ], 500);
        }
    }
    

}
