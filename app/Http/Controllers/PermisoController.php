<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    }
}
