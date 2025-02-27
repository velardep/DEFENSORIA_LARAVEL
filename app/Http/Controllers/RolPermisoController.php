<?php

namespace App\Http\Controllers;

use App\Models\RolPermiso;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RolPermisoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class RolPermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $rolPermisos = RolPermiso::paginate();

        return view('rol-permiso.index', compact('rolPermisos'))
            ->with('i', ($request->input('page', 1) - 1) * $rolPermisos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $rolPermiso = new RolPermiso();

        return view('rol-permiso.create', compact('rolPermiso'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RolPermisoRequest $request): RedirectResponse
    {
        RolPermiso::create($request->validated());

        return Redirect::route('rol-permisos.index')
            ->with('success', 'RolPermiso created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $rolPermiso = RolPermiso::find($id);

        return view('rol-permiso.show', compact('rolPermiso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $rolPermiso = RolPermiso::find($id);

        return view('rol-permiso.edit', compact('rolPermiso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RolPermisoRequest $request, RolPermiso $rolPermiso): RedirectResponse
    {
        $rolPermiso->update($request->validated());

        return Redirect::route('rol-permisos.index')
            ->with('success', 'RolPermiso updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        RolPermiso::find($id)->delete();

        return Redirect::route('rol-permisos.index')
            ->with('success', 'RolPermiso deleted successfully');
    }
}
