<?php

namespace App\Http\Controllers;

use App\Models\DenunciasTipologia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DenunciasTipologiaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DenunciasTipologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $denunciasTipologias = DenunciasTipologia::paginate();

        return view('denuncias-tipologia.index', compact('denunciasTipologias'))
            ->with('i', ($request->input('page', 1) - 1) * $denunciasTipologias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $denunciasTipologia = new DenunciasTipologia();

        return view('denuncias-tipologia.create', compact('denunciasTipologia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DenunciasTipologiaRequest $request): RedirectResponse
    {
        DenunciasTipologia::create($request->validated());

        return Redirect::route('denuncias-tipologias.index')
            ->with('success', 'DenunciasTipologia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $denunciasTipologia = DenunciasTipologia::find($id);

        return view('denuncias-tipologia.show', compact('denunciasTipologia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $denunciasTipologia = DenunciasTipologia::find($id);

        return view('denuncias-tipologia.edit', compact('denunciasTipologia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DenunciasTipologiaRequest $request, DenunciasTipologia $denunciasTipologia): RedirectResponse
    {
        $denunciasTipologia->update($request->validated());

        return Redirect::route('denuncias-tipologias.index')
            ->with('success', 'DenunciasTipologia updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DenunciasTipologia::find($id)->delete();

        return Redirect::route('denuncias-tipologias.index')
            ->with('success', 'DenunciasTipologia deleted successfully');
    }
}
