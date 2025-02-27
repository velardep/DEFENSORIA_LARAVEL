<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Models\Permiso;

class PermisoController extends Controller
{
    // 📌 Mostrar todas las permisos
    public function index()
    {
        $permisos = Permiso::all();
        return view('permiso.indexpermiso', compact('permisos'));
    }

    // 📌 Mostrar formulario de creación
    public function create()
    {
        return view('permiso.createpermiso'); // Vista de agregar permiso
    }

    // 📌 Guardar nueva permiso
    public function store(Request $request)
    {
        $request->validate([
            'nombrepermiso' => 'required|string|max:255',
            'condicionpermiso' => 'required|string',
        ]);

        Permiso::create($request->all());

        return redirect('/permiso')->with('success', 'Permiso agregada correctamente.');
    }

    // 📌 Mostrar formulario de edición
    public function edit($idpermiso)
    {
        $permiso = Permiso::findOrFail($idpermiso);
        return view('permiso.editpermiso', compact('permiso'));
    }

    // 📌 Actualizar datos de permiso
    public function update(Request $request, $idpermiso)
    {
        $request->validate([
            'nombrepermiso' => 'required|string|max:255',
            'condicionpermiso' => 'required|string',
        ]);

        $permiso = Permiso::findOrFail($idpermiso);
        $permiso->update($request->all());

        return redirect('/permiso')->with('success', 'Permiso actualizada correctamente.');
    }

    // 📌 Eliminar permiso
    public function destroy($idpermiso)
    {
        $permiso = Permiso::findOrFail($idpermiso);
        $permiso->delete();

        return redirect('/permiso')->with('success', 'Permiso eliminada correctamente.');
=======
use App\Http\Requests\PermisoRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $permisos = Permiso::paginate();

        return view('permiso.index', compact('permisos'))
            ->with('i', ($request->input('page', 1) - 1) * $permisos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $permiso = new Permiso();

        return view('permiso.create', compact('permiso'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermisoRequest $request): RedirectResponse
    {
        Permiso::create($request->validated());

        return Redirect::route('permisos.index')
            ->with('success', 'Permiso created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $permiso = Permiso::find($id);

        return view('permiso.show', compact('permiso'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $permiso = Permiso::find($id);

        return view('permiso.edit', compact('permiso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermisoRequest $request, Permiso $permiso): RedirectResponse
    {
        $permiso->update($request->validated());

        return Redirect::route('permisos.index')
            ->with('success', 'Permiso updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Permiso::find($id)->delete();

        return Redirect::route('permisos.index')
            ->with('success', 'Permiso deleted successfully');
>>>>>>> 561cfc5d (CRUDS)
    }
}
