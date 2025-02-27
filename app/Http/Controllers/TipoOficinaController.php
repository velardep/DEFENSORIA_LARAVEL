<?php

namespace App\Http\Controllers;

use App\Models\TipoOficina;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipoOficinaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TipoOficinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tipoOficinas = TipoOficina::paginate();

        return view('tipo-oficina.index', compact('tipoOficinas'))
            ->with('i', ($request->input('page', 1) - 1) * $tipoOficinas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tipoOficina = new TipoOficina();

        return view('tipo-oficina.create', compact('tipoOficina'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipoOficinaRequest $request): RedirectResponse
    {
        TipoOficina::create($request->validated());

        return Redirect::route('tipo-oficinas.index')
            ->with('success', 'TipoOficina created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tipoOficina = TipoOficina::find($id);

        return view('tipo-oficina.show', compact('tipoOficina'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tipoOficina = TipoOficina::find($id);

        return view('tipo-oficina.edit', compact('tipoOficina'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipoOficinaRequest $request, TipoOficina $tipoOficina): RedirectResponse
    {
        $tipoOficina->update($request->validated());

        return Redirect::route('tipo-oficinas.index')
            ->with('success', 'TipoOficina updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        TipoOficina::find($id)->delete();

        return Redirect::route('tipo-oficinas.index')
            ->with('success', 'TipoOficina deleted successfully');
    }
}
