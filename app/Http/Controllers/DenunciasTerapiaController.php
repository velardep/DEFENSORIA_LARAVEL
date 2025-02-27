<?php

namespace App\Http\Controllers;

use App\Models\DenunciasTerapia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DenunciasTerapiaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DenunciasTerapiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $denunciasTerapias = DenunciasTerapia::paginate();

        return view('denuncias-terapia.index', compact('denunciasTerapias'))
            ->with('i', ($request->input('page', 1) - 1) * $denunciasTerapias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $denunciasTerapia = new DenunciasTerapia();

        return view('denuncias-terapia.create', compact('denunciasTerapia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DenunciasTerapiaRequest $request): RedirectResponse
    {
        DenunciasTerapia::create($request->validated());

        return Redirect::route('denuncias-terapias.index')
            ->with('success', 'DenunciasTerapia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $denunciasTerapia = DenunciasTerapia::find($id);

        return view('denuncias-terapia.show', compact('denunciasTerapia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $denunciasTerapia = DenunciasTerapia::find($id);

        return view('denuncias-terapia.edit', compact('denunciasTerapia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DenunciasTerapiaRequest $request, DenunciasTerapia $denunciasTerapia): RedirectResponse
    {
        $denunciasTerapia->update($request->validated());

        return Redirect::route('denuncias-terapias.index')
            ->with('success', 'DenunciasTerapia updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DenunciasTerapia::find($id)->delete();

        return Redirect::route('denuncias-terapias.index')
            ->with('success', 'DenunciasTerapia deleted successfully');
    }
}
