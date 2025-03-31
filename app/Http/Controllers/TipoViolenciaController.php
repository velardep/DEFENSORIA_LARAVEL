<?php

namespace App\Http\Controllers;

use App\Models\TipoViolencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipoViolenciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TipoViolenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        // Paginación con preservación de parámetros de consulta
        $tipoViolencias = TipoViolencia::paginate(10)->withQueryString();

        return view('tipo-violencia.index', ['tipoViolencias' => $tipoViolencias])
            ->with('i', ($request->input('page', 1) - 1) * $tipoViolencias->perPage());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tipoViolencia = new TipoViolencia();

        return view('tipo-violencia.create', compact('tipoViolencia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoViolenciaRequest $request): RedirectResponse
    {
        TipoViolencia::create($request->validated());

        return Redirect::route('tipo-violencia.index')
            ->with('success', 'Tipo de Violencia creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tipoViolencia = TipoViolencia::findOrFail($id);

        return view('tipo-violencia.show', compact('tipoViolencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tipoViolencia = TipoViolencia::findOrFail($id);

        return view('tipo-violencia.edit', compact('tipoViolencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoViolenciaRequest $request, $id): RedirectResponse
{
    $tipoViolencia = TipoViolencia::findOrFail($id);
    $tipoViolencia->update($request->validated());

    return Redirect::route('tipo-violencia.index')
        ->with('success', 'Tipo de Violencia actualizado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        TipoViolencia::findOrFail($id)->delete();

        return Redirect::route('tipo-violencia.index')
            ->with('success', 'Tipo de Violencia eliminado correctamente.');
    }
}
