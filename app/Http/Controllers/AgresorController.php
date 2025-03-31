<?php

namespace App\Http\Controllers;

use App\Models\Agresor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AgresorRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AgresorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $agresores = Agresor::paginate(10);

        return view('agresor.index', compact('agresores'))
        ->with('i', ($request->input('page', 1) - 1) * $agresores->perPage());
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $agresor = new Agresor();

        return view('agresor.create', compact('agresor'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $agresor = Agresor::create($request->all());
 
         return response()->json($agresor);
     }


    /*public function store(AgresorRequest $request): RedirectResponse
    {
        Agresor::create($request->validated());

        return Redirect::route('agresor.index')
            ->with('success', 'Agresor created successfully.');
    }*/

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $agresor = Agresor::find($id);

        return view('agresor.show', compact('agresor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $agresor = Agresor::find($id);

        return view('agresor.edit', compact('agresor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AgresorRequest $request, Agresor $agresor): RedirectResponse
    {
        $agresor->update($request->validated());

        return Redirect::route('agresor.index')
            ->with('success', 'Agresor updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Agresor::find($id)->delete();

        return Redirect::route('agresor.index')
            ->with('success', 'Agresor deleted successfully');
    }
}
