<?php

namespace App\Http\Controllers;

use App\Models\Orientacion;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OrientacionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

// Gestion de Orientacion
class OrientacionController extends Controller
{
    // Muestra la lista de orientaciones registradas por el usuario autenticado
    public function index(Request $request): View
    {
        $orientaciones = Orientacion::where('user_id', auth()->id())->paginate();
    
        return view('orientacion.index', compact('orientaciones'))
            ->with('i', ($request->input('page', 1) - 1) * $orientaciones->perPage());
    }
    
    // Carga el formulario de registro de una nueva orientación
    public function create(): View
    {
        $orientacion = new Orientacion();

        return view('orientacion.create', compact('orientacion'));
    }

    // Guarda una nueva orientación en la base de datos
    public function store(Request $request)
    {
        $data = $request->all();

        // Asignar automáticamente el usuario y la oficina desde la sesión
        $data['user_id'] = auth()->id();
        $data['oficina_id'] = auth()->user()->oficina_id;

        $orientacion = Orientacion::create($data);

        return response()->json($orientacion);
    }

    // Muestra el detalle de una orientación específica
    public function show($id): View
    {
        $orientacion = Orientacion::find($id);

        return view('orientacion.show', compact('orientacion'));
    }

    // Carga el formulario de edición para una orientación existente
    public function edit($id): View
    {
        $orientacion = Orientacion::find($id);

        return view('orientacion.edit', compact('orientacion'));
    }

    // Actualiza una orientación existente con nuevos datos
    public function update(OrientacionRequest $request, Orientacion $orientacion): RedirectResponse
    {
        $orientacion->update($request->validated());

        return Redirect::route('orientacion.index')
            ->with('success', 'Orientacion updated successfully');
    }

    // Elimina una orientación de forma permanente
    public function destroy($id): RedirectResponse
    {
        Orientacion::find($id)->delete();

        return Redirect::route('orientacion.index')
            ->with('success', 'Orientacion deleted successfully');
    }

    // Filtra orientaciones según número de caso, fecha o nombre de persona    
    public function buscar(Request $request)
    {
        $query = Orientacion::query();

        if ($request->filled('num_caso')) {
            $query->where('num_caso', $request->num_caso);
        }

        if ($request->filled('fecha_ingreso')) {
            $query->whereDate('fecha_ingreso', $request->fecha_ingreso);
        }

        if ($request->filled('nombre_persona')) {
            $query->where('nombre_persona', 'like', '%' . $request->nombre_persona . '%');
        }

        $orientaciones = $query->paginate();

        // Retornamos solo el fragmento de tabla
        return view('orientacion.tabla', compact('orientaciones'))->render();
    }
}
