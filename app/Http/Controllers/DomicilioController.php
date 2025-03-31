<?php

namespace App\Http\Controllers;

use App\Models\Domicilio;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DomicilioRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use App\Models\Victima;
use App\Models\Agresor;

class DomicilioController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $domicilios = Domicilio::paginate(10); // ← importante: variable en plural

        return view('domicilio.index', ['domicilios' => $domicilios,
            'i' => ($request->input('page', 1) - 1) * $domicilios->perPage()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $domicilio = new Domicilio();
        $victimas = Victima::all();
        $agresores = Agresor::all();
        return view('domicilio.create', compact('domicilio', 'victimas', 'agresores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
    
        if ($request->input('persona') === 'victima') {
            $data['id_agresor'] = null;
        } elseif ($request->input('persona') === 'agresor') {
            $data['id_victima'] = null;
        }
    
        $domicilio = Domicilio::create($data);
    
        return response()->json($domicilio);
    }
    

    /*public function store(DomicilioRequest $request): RedirectResponse
    {
        $data = $request->validated();
        if ($request->input('persona') === 'victima') {
            $data['id_agresor'] = null;
        } elseif ($request->input('persona') === 'agresor') {
            $data['id_victima'] = null;
        }
        Domicilio::create($data);


        return Redirect::route('domicilio.index')
            ->with('success', 'Domicilio created successfully.');
    }*/

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $domicilio = Domicilio::find($id);

        return view('domicilio.show', compact('domicilio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $domicilio = Domicilio::find($id);

        return view('domicilio.edit', compact('domicilio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DomicilioRequest $request, Domicilio $domicilio): RedirectResponse
    {
        $domicilio->update($request->validated());

        return Redirect::route('domicilio.index')
            ->with('success', 'Domicilio updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Domicilio::find($id)->delete();

        return Redirect::route('domicilio.index')
            ->with('success', 'Domicilio deleted successfully');
    }
}
