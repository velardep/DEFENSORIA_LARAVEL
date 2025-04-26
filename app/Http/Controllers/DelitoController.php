<?php

namespace App\Http\Controllers;

use App\Models\Delito;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DelitoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DelitoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $delitos = Delito::paginate();

        return view('delitos.index', compact('delitos'))
            ->with('i', ($request->input('page', 1) - 1) * $delitos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $delito = new Delito();

        return view('delitos.create', compact('delito'));
    }

    /**
     * Store a newly created resource in storage.
     */
    /*public function store(DelitoRequest $request): RedirectResponse
    {
        Delito::create($request->validated());

        return response()->json(['message' => 'Acción registrada con éxito']);

    }*/
    public function store(DelitoRequest $request): RedirectResponse
{
    Delito::create($request->validated());
    return redirect()->route('delitos.index')->with('success', 'Acción registrada con éxito');
}


    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $delito = Delito::find($id);

        return view('delito.show', compact('delito'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $delito = Delito::find($id);

        return view('delito.edit', compact('delito'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DelitoRequest $request, Delito $delito): RedirectResponse
    {
        $delito->update($request->validated());

        return Redirect::route('delitos.index')
            ->with('success', 'Delito updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Delito::find($id)->delete();

        return Redirect::route('delitos.index')
            ->with('success', 'Delito deleted successfully');
    }
}
