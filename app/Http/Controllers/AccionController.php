<?php

namespace App\Http\Controllers;

use App\Models\Accion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AccionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $accions = Accion::paginate();

        return view('accions.index', compact('accions'))
            ->with('i', ($request->input('page', 1) - 1) * $accions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $accion = new Accion();

        return view('accions.create', compact('accion'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AccionRequest $request): RedirectResponse
    {
        Accion::create($request->validated());

        return Redirect::route('accions.index')
            ->with('success', 'Accion created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $accion = Accion::find($id);

        return view('accions.show', compact('accion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $accion = Accion::find($id);

        return view('accions.edit', compact('accion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AccionRequest $request, Accion $accion): RedirectResponse
    {
        $accion->update($request->validated());

        return Redirect::route('accions.index')
            ->with('success', 'Accion updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Accion::find($id)->delete();

        return Redirect::route('accions.index')
            ->with('success', 'Accion deleted successfully');
    }


    public function porDenuncia($id)
{
    $acciones = Accion::where('denuncia_id', $id)
        ->orderBy('fecha', 'asc')
        ->get();

    return view('accions.lista', compact('acciones', 'id'));
}

}
