<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AccionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

// Gestion de acciones asociadas a una denuncia
class AccionController extends Controller
{
    // Muestra el listado de lostas las acciones registradas
    public function index(Request $request): View
    {
        $accions = Accion::where('user_id', auth()->id())->paginate();

        //$accions = Accion::paginate();

        return view('accions.index', compact('accions'))
            ->with('i', ($request->input('page', 1) - 1) * $accions->perPage());
    }

    // Muestra el formulario para crear una nueva accion
    public function create(): View
    {
        $accion = new Accion();

        return view('accions.create', compact('accion'));
    }

    // Guarda una nueva accion en la base de datos
    /*public function store(AccionRequest $request): RedirectResponse
    {
        Accion::create($request->validated());

        return Redirect::route('accions.index')
            ->with('success', 'Accion created successfully.');
    }*/
    public function store(AccionRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id(); // ✅ Asignar el usuario que crea la acción
        $data['oficina_id'] = auth()->user()->oficina_id;


        Accion::create($data);

        return Redirect::route('accions.index')
            ->with('success', 'Acción creada exitosamente.');
    }

    // Muestra el detalle de una acción específica
    public function show($id): View
    {
        $accion = Accion::find($id);

        return view('accions.show', compact('accion'));
    }

    // Muestra el formulario de edición para una acción específica.
    public function edit($id): View
    {
        $accion = Accion::find($id);

        return view('accions.edit', compact('accion'));
    }

    // Actualiza una acción existente
    public function update(AccionRequest $request, Accion $accion): RedirectResponse
    {
        $accion->update($request->validated());

        return Redirect::route('accions.index')
            ->with('success', 'Accion updated successfully');
    }

    // Elimina una acción de la base de datos según su ID
    public function destroy($id): RedirectResponse
    {
        Accion::find($id)->delete();

        return Redirect::route('accions.index')
            ->with('success', 'Accion deleted successfully');
    }

    // Muestra todas las acciones asociadas a una denuncia específica.
    /* Filtra por el campo denuncia_id, ordena las acciones por fecha 
    ascendente, y carga la vista accions.lista,*/
    public function porDenuncia($id)
    {
        $acciones = Accion::where('denuncia_id', $id)
        ->where('user_id', auth()->id()) // ✅ Solo acciones del usuario actual

            ->orderBy('fecha', 'asc')
            ->get();

        return view('accions.lista', compact('acciones', 'id'));
    }

}
