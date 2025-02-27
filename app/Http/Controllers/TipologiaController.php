<?php

namespace App\Http\Controllers;

use App\Models\Tipologia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TipologiaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TipologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $tipologias = Tipologia::paginate();

        return view('tipologia.index', compact('tipologias'))
            ->with('i', ($request->input('page', 1) - 1) * $tipologias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $tipologia = new Tipologia();

        return view('tipologia.create', compact('tipologia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TipologiaRequest $request): RedirectResponse
    {
        Tipologia::create($request->validated());

        return Redirect::route('tipologias.index')
            ->with('success', 'Tipologia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $tipologia = Tipologia::find($id);

        return view('tipologia.show', compact('tipologia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $tipologia = Tipologia::find($id);

        return view('tipologia.edit', compact('tipologia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TipologiaRequest $request, Tipologia $tipologia): RedirectResponse
    {
        $tipologia->update($request->validated());

        return Redirect::route('tipologias.index')
            ->with('success', 'Tipologia updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Tipologia::find($id)->delete();

        return Redirect::route('tipologias.index')
            ->with('success', 'Tipologia deleted successfully');
    }
}
