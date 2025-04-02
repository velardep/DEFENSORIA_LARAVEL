<?php

namespace App\Http\Controllers;

use App\Models\FamiliaVictima;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\FamiliaVictimaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FamiliaVictimaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $familiaVictimas = FamiliaVictima::paginate();

        return view('familia-victima.index', compact('familiaVictimas'))
            ->with('i', ($request->input('page', 1) - 1) * $familiaVictimas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $familiaVictima = new FamiliaVictima();

        return view('familia-victima.create', compact('familiaVictima'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $familia = new FamiliaVictima();
        $familia->fill($request->all());
        $familia->save();
    
        // TEMPORAL PARA DEPURACIÓN
        return response()->json([
            'ok' => true,
            'mensaje' => 'Se guardó correctamente',
            'redirect' => route('denuncias.resumen', ['id' => $request->input('victima_id')])
        ]);
    }
    
    

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $familiaVictima = FamiliaVictima::find($id);

        return view('familia-victima.show', compact('familiaVictima'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $familiaVictima = FamiliaVictima::find($id);

        return view('familia-victima.edit', compact('familiaVictima'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FamiliaVictimaRequest $request, FamiliaVictima $familiaVictima): RedirectResponse
    {
        $familiaVictima->update($request->validated());

        return Redirect::route('familia-victima.index')
            ->with('success', 'FamiliaVictima updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        FamiliaVictima::find($id)->delete();

        return Redirect::route('familia-victima.index')
            ->with('success', 'FamiliaVictima deleted successfully');
    }

    public function createFromResumen(Request $request): View
{
    $familiaVictima = new FamiliaVictima();
    $victima_id = $request->input('victima_id');

    return view('familia-victima.form', [
        'familiaVictima' => null, // o un modelo vacío si es nuevo
        'victima_id' => $victima_id // si lo estás pasando
    ]);
}

}
