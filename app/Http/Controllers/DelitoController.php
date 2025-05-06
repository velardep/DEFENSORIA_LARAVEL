<?php

namespace App\Http\Controllers;

use App\Models\Delito;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DelitoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

// Gestion de delito
class DelitoController extends Controller
{

    // Muestra un listado de delitos registrados
    public function index(Request $request): View
    {
        $delitos = Delito::paginate();

        return view('delitos.index', compact('delitos'))
            ->with('i', ($request->input('page', 1) - 1) * $delitos->perPage());
    }

    // Muestra el formulario de creación de un nuevo delito.
    public function create(): View
    {
        $delito = new Delito();

        return view('delitos.create', compact('delito'));
    }

    // Procesa el envío del formulario de registro de un nuevo delito.
    public function store(DelitoRequest $request): RedirectResponse
    {
        Delito::create($request->validated());
        return redirect()->route('delitos.index')->with('success', 'Acción registrada con éxito');
    }

    // Muestra los detalles de un delito específico según su ID
    public function show($id): View
    {
        $delito = Delito::find($id);

        return view('delitos.show', compact('delito'));
    }

    // Muestra el formulario de edición para un delito existente
    public function edit($id): View
    {
        $delito = Delito::find($id);

        return view('delitos.edit', compact('delito'));
    }

    // Actualiza los datos de un delito existente
    public function update(DelitoRequest $request, Delito $delito): RedirectResponse
    {
        $delito->update($request->validated());

        return Redirect::route('delitos.index')
            ->with('success', 'Delito updated successfully');
    }

    // Elimina un delito según su ID. Si el delito está asociado a otros registros por ejemplo, denuncias, lanza una excepción
    public function destroy($id)
    {
        try {
            $delito = Delito::findOrFail($id);
            $delito->delete();

            return response()->json([
                'success' => true,
                'message' => 'delito eliminada correctamente'
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json([
                'success' => false,
                'message' => 'No se puede eliminar porque está asociada a otros datos'
            ], 400);
        }
    }
}
