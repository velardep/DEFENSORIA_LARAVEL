<?php

namespace App\Http\Controllers;

use App\Models\Victima;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\VictimaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class VictimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $victimas = Victima::with('documento')->paginate(10);

        return view('victima.index', compact('victimas'))
            ->with('i', ($request->input('page', 1) - 1) * $victimas->perPage());
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $documentos = \App\Models\Documento::all();

        $victima = new Victima();

        return view('victima.create', compact('victima', 'documentos'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
    {
        $victimas = Victima::create($request->all());

        return response()->json($victimas);
    }
    /*public function store(VictimaRequest $request): RedirectResponse
    {
        Victima::create($request->validated());

        return Redirect::route('victimas.index')
            ->with('success', 'Victima created successfully.');
    }*/

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $victima = Victima::find($id);

        return view('victima.show', compact('victima'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $victima = Victima::find($id);

        return view('victima.edit', compact('victima'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VictimaRequest $request, Victima $victima): RedirectResponse
    {
        $victima->update($request->validated());

        return Redirect::route('victimas.index')
            ->with('success', 'Victima updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Victima::find($id)->delete();

        return Redirect::route('victimas.index')
            ->with('success', 'Victima deleted successfully');
    }
}
