<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficina;

class OficinaController extends Controller
{
    // 📌 Mostrar todas las oficinas
    public function index()
    {
        $oficinas = Oficina::all();
        return view('oficina.indexoficina', compact('oficinas'));
    }

    // 📌 Mostrar formulario de creación
    public function create()
    {
        return view('oficina.createoficina'); // Vista de agregar oficina
    }

    // 📌 Guardar nueva oficina
    public function store(Request $request)
    {
        $request->validate([
            'nombreoficina' => 'required|string|max:255',
            'telefonooficina' => 'required|string|max:20',
            'idtipo_oficina' => 'required|integer',
            'condicionoficina' => 'required|string',
            'direccionoficina' => 'required|string|max:255',
        ]);

        Oficina::create($request->all());

        return redirect('/oficina')->with('success', 'Oficina agregada correctamente.');
    }

    // 📌 Mostrar formulario de edición
    public function edit($idoficina)
    {
        $oficina = Oficina::findOrFail($idoficina);
        return view('oficina.editoficina', compact('oficina'));
    }

    // 📌 Actualizar datos de oficina
    public function update(Request $request, $idoficina)
    {
        $request->validate([
            'nombreoficina' => 'required|string|max:255',
            'telefonooficina' => 'required|string|max:20',
            'idtipo_oficina' => 'required|integer',
            'condicionoficina' => 'required|string',
            'direccionoficina' => 'required|string|max:255',
        ]);

        $oficina = Oficina::findOrFail($idoficina);
        $oficina->update($request->all());

        return redirect('/oficina')->with('success', 'Oficina actualizada correctamente.');
    }

    // 📌 Eliminar oficina
    public function destroy($idoficina)
    {
        $oficina = Oficina::findOrFail($idoficina);
        $oficina->delete();

        return redirect('/oficina')->with('success', 'Oficina eliminada correctamente.');
    }
}
