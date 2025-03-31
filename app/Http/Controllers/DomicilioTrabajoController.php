<?php

namespace App\Http\Controllers;

use App\Models\DomicilioTrabajo;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\DomicilioTrabajoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class DomicilioTrabajoController extends Controller
{
    public function index(Request $request): View
    {
        $domicilioTrabajos = DomicilioTrabajo::paginate(10);

        return view('domicilio-trabajo.index', ['domicilioTrabajos' => $domicilioTrabajos,
            'i' => ($request->input('page', 1) - 1) * $domicilioTrabajos->perPage()
        ]);
    }

    public function create(): View
    {
        $domicilioTrabajo = new DomicilioTrabajo(); // ← aquí estaba el error
        $agresores = \App\Models\Agresor::all();
        return view('domicilio-trabajo.create', compact('domicilioTrabajo', 'agresores'));
    }


    public function store(DomicilioTrabajoRequest $request): RedirectResponse
    {
        DomicilioTrabajo::create($request->validated());

        return Redirect::route('domicilio-trabajos.index')
            ->with('success', 'Domicilio de Trabajo creado correctamente.');
    }

    public function show($id): View
    {
        $domicilioTrabajo = DomicilioTrabajo::findOrFail($id);

        return view('domicilio-trabajo.show', compact('domicilioTrabajo'));
    }

    public function edit($id): View
    {
        $domicilioTrabajo = DomicilioTrabajo::findOrFail($id);

        return view('domicilio-trabajo.edit', compact('domicilioTrabajo'));
    }

    public function update(DomicilioTrabajoRequest $request, $id): RedirectResponse
    {
        $domicilioTrabajo = DomicilioTrabajo::findOrFail($id);
        $domicilioTrabajo->update($request->validated());

        return Redirect::route('domicilio-trabajos.index')
            ->with('success', 'Domicilio de Trabajo actualizado correctamente.');
    }

    public function destroy($id): RedirectResponse
    {
        DomicilioTrabajo::findOrFail($id)->delete();

        return Redirect::route('domicilio-trabajos.index')
            ->with('success', 'Domicilio de Trabajo eliminado correctamente.');
    }
}
