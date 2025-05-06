<?php

namespace App\Http\Controllers;

use App\Models\Intervencion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\IntervencionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class IntervencionController extends Controller
{
   // Muestra una lista paginada de intervenciones registradas.
    public function index(Request $request): View
    {
        $intervenciones = Intervencion::where('user_id', auth()->id())->paginate();

        return view('intervencion.index', compact('intervenciones'))
            ->with('i', ($request->input('page', 1) - 1) * $intervenciones->perPage());
    }

    // Muestra el formulario para registrar una nueva intervención.
    public function create(): View
    {
        $intervencion = new Intervencion();

        return view('intervencion.create', compact('intervencion'));
    }

    // Guarda una nueva intervención en la base de datos. Retorna una respuesta JSON (útil para AJAX).
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->all();
        $data['user_id'] = auth()->id();
        $data['oficina_id'] = auth()->user()->oficina_id;

        $intervencion = Intervencion::create($data);

        return response()->json($intervencion);
    }

    // Muestra el detalle de una intervención específica.
    public function show($id): View
    {
        $intervencion = Intervencion::find($id);

        return view('intervencion.show', compact('intervencion'));
    }

    // Muestra el formulario de edición de una intervención existente.
    public function edit($id): View
    {
        $intervencion = Intervencion::find($id);

        return view('intervencion.edit', compact('intervencion'));
    }

    // Actualiza una intervención existente con datos validados.
    public function update(IntervencionRequest $request, Intervencion $intervencion): RedirectResponse
    {
        $intervencion->update($request->validated());

        return Redirect::route('intervencion.index')
            ->with('success', 'Intervencion updated successfully');
    }

    // Elimina una intervención de la base de datos.
    public function destroy($id): RedirectResponse
    {
        Intervencion::find($id)->delete();

        return Redirect::route('intervencion.index')
            ->with('success', 'Intervencion deleted successfully');
    }

    // Busca intervenciones según filtros enviados por el usuario. Retorna solo el HTML de la tabla (útil para AJAX).
    public function buscar(Request $request)
    {
        $query = Intervencion::query();

        if ($request->filled('num_ficha')) {
            $query->where('num_ficha', $request->num_ficha);
        }

        if ($request->filled('num_equipo')) {
            $query->where('num_equipo', $request->num_equipo);
        }

        if ($request->filled('num_tar')) {
            $query->where('num_tar', $request->num_tar);
        }

        if ($request->filled('nombre_usuaria')) {
            $query->where('nombre_usuaria', 'like', '%' . $request->nombre_usuaria . '%');
        }

        $intervenciones = $query->paginate();

        return view('intervencion.tabla', compact('intervenciones'))->render();
    }

}
