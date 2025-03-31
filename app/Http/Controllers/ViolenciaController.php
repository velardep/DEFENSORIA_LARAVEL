<?php

namespace App\Http\Controllers;

use App\Models\Violencia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ViolenciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ViolenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        // Usamos plural para reflejar que se trata de una colección
        $violencias = Violencia::paginate(10);

        return view('violencia.index', compact('violencias'))
            ->with('i', ($request->input('page', 1) - 1) * $violencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $violencia = new Violencia();

        return view('violencia.create', compact('violencia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ViolenciaRequest $request): RedirectResponse
    {
        Violencia::create($request->validated());

        return Redirect::route('violencia.index')
            ->with('success', 'Violencia creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $violencia = Violencia::findOrFail($id);

        return view('violencia.show', compact('violencia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $violencia = Violencia::findOrFail($id);

        return view('violencia.edit', compact('violencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ViolenciaRequest $request, Violencia $violencia): RedirectResponse
    {
        $violencia->update($request->validated());

        return Redirect::route('violencia.index')
            ->with('success', 'Violencia actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Violencia::findOrFail($id)->delete();

        return Redirect::route('violencia.index')
            ->with('success', 'Violencia eliminada correctamente.');
    }
}
