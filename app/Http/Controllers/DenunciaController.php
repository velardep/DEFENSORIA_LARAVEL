<?php

namespace App\Http\Controllers;

use App\Models\Denuncia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DenunciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;




class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $denuncias = Denuncia::with(['agresor', 'victima', 'tipoviolencias', 'violencia'])->paginate(10);

    return view('denuncia.index', compact('denuncias'))
        ->with('i', ($request->input('page', 1) - 1) * $denuncias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
{
    $agresores = \App\Models\Agresor::all();
    $victimas = \App\Models\Victima::all();
    $tiposViolencia = \App\Models\TipoViolencia::all();
    $violencias = \App\Models\Violencia::all();


    $denuncia = new Denuncia();

    return view('denuncia.create', compact('denuncia', 'agresores', 'victimas', 'tiposViolencia', 'violencias'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(DenunciaRequest $request): RedirectResponse
    {
        Denuncia::create($request->validated());

        return Redirect::route('denuncia.index')
            ->with('success', 'Denuncia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $denuncia = Denuncia::find($id);

        return view('denuncia.show', compact('denuncia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $denuncia = Denuncia::find($id);

        return view('denuncia.edit', compact('denuncia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DenunciaRequest $request, Denuncia $denuncia): RedirectResponse
    {
        $denuncia->update($request->validated());

        return Redirect::route('denuncia.index')
            ->with('success', 'Denuncia updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Denuncia::find($id)->delete();

        return Redirect::route('denuncia.index')
            ->with('success', 'Denuncia deleted successfully');
    }
}
