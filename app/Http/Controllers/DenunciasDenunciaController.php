<?php

namespace App\Http\Controllers;

use App\Models\DenunciasDenuncia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DenunciasDenunciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DenunciasDenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $denunciasDenuncias = DenunciasDenuncia::paginate();

        return view('denuncias-denuncia.index', compact('denunciasDenuncias'))
            ->with('i', ($request->input('page', 1) - 1) * $denunciasDenuncias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $denunciasDenuncia = new DenunciasDenuncia();

        return view('denuncias-denuncia.create', compact('denunciasDenuncia'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DenunciasDenunciaRequest $request): RedirectResponse
    {
        DenunciasDenuncia::create($request->validated());

        return Redirect::route('denuncias-denuncias.index')
            ->with('success', 'DenunciasDenuncia created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $denunciasDenuncia = DenunciasDenuncia::find($id);

        return view('denuncias-denuncia.show', compact('denunciasDenuncia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $denunciasDenuncia = DenunciasDenuncia::find($id);

        return view('denuncias-denuncia.edit', compact('denunciasDenuncia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DenunciasDenunciaRequest $request, DenunciasDenuncia $denunciasDenuncia): RedirectResponse
    {
        $denunciasDenuncia->update($request->validated());

        return Redirect::route('denuncias-denuncias.index')
            ->with('success', 'DenunciasDenuncia updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        DenunciasDenuncia::find($id)->delete();

        return Redirect::route('denuncias-denuncias.index')
            ->with('success', 'DenunciasDenuncia deleted successfully');
    }
}
