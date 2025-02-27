<?php

namespace App\Http\Controllers;

use App\Models\DenunciasPersona;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DenunciasPersonaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DenunciasPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $denunciasPersonas = DenunciasPersona::paginate();

        return view('denuncias-persona.index', compact('denunciasPersonas'))
            ->with('i', ($request->input('page', 1) - 1) * $denunciasPersonas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $denunciasPersona = new DenunciasPersona();

        return view('denuncias-persona.create', compact('denunciasPersona'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DenunciasPersonaRequest $request): RedirectResponse
    {
        DenunciasPersona::create($request->validated());

        return Redirect::route('denuncias-personas.index')
            ->with('success', 'DenunciasPersona created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $denunciasPersona = DenunciasPersona::find($id);

        return view('denuncias-persona.show', compact('denunciasPersona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $denunciasPersona = DenunciasPersona::find($id);

        return view('denuncias-persona.edit', compact('denunciasPersona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DenunciasPersonaRequest $request, DenunciasPersona $denunciasPersona): RedirectResponse
    {
        $denunciasPersona->update($request->validated());

        return Redirect::route('denuncias-personas.index')
            ->with('success', 'DenunciasPersona updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DenunciasPersona::find($id)->delete();

        return Redirect::route('denuncias-personas.index')
            ->with('success', 'DenunciasPersona deleted successfully');
    }
}
