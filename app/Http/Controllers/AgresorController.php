<?php

namespace App\Http\Controllers;

use App\Models\Agresor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AgresorRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

// Gestion de Agresor
class AgresorController extends Controller
{
    // Muestra un listado de agresores registrados
    public function index(Request $request): View
    {
        $agresores = Agresor::paginate(10);

        return view('agresor.index', compact('agresores'))
        ->with('i', ($request->input('page', 1) - 1) * $agresores->perPage());
    
    }

    // Muestra el formulario de creación de un nuevo agresor
    public function create(): View
    {
        $agresor = new Agresor();

        return view('agresor.create', compact('agresor'));
    }


    // Verifica si la tabla de Agresor contiene solo campos vacíos o nulos, excluyendo id, provisional y user_io
    private function tieneSoloCamposVacios($modelo, $excepciones = [])
    {
        foreach ($modelo->getAttributes() as $campo => $valor) {
            if (in_array($campo, array_merge(['id', 'provisional', 'user_id'], $excepciones))) {
                continue;
            }
            if (!is_null($valor) && trim($valor) !== '') {
                return false;
            }
        }
        return true;
    }

    // Guarda un nuevo agresor en la base de datos como provisional
    /* Se usa cuando se empieza a llenar el form de agresor, pero aun no se llena el form de denuncia
    primero se llenan los datos del agresor con en campo procisional=true y su user_id asociado.
    Una vez creado el agresor, invoca al metodo tieneSoloCamposVacios() para verificar si el agresor
    no contiene datos vacios o nulos y si es asi entonces lo elimina totalmente */
     public function store(Request $request)
    {
        $data = $request->all();
        $data['provisional'] = true; // Añadimos provisional antes de crear
        $data['user_id'] = auth()->id(); // Asociar al usuario actual


        $agresor = Agresor::create($data);
        if ($this->tieneSoloCamposVacios($agresor)) {
            $agresor->delete();
        }

        return response()->json($agresor);
    }
    
    // Muestra el detalle de un agresor específico
    public function show($id): View
    {
        $agresor = Agresor::find($id);

        return view('agresor.show', compact('agresor'));
    }

    // Muestra el formulario de edición de un agresor
    public function edit($id): View
    {
        $agresor = Agresor::find($id);

        return view('agresor.edit', compact('agresor'));
    }

    // Actualiza los datos de un agresor existente y redirige a la vista de resumen de la denuncia
    public function update(AgresorRequest $request, Agresor $agresor): RedirectResponse
    {
        $agresor->update($request->all());
        return redirect()->route('denuncia.resumen', ['id' => $agresor->denuncia_id]);
    }

    // Elimina un agresor por su ID
    public function destroy($id): RedirectResponse
    {
        Agresor::find($id)->delete();

        return Redirect::route('agresor.index')
            ->with('success', 'Agresor deleted successfully');
    }

    // Muestra un formulario de edición rápido del agresor desde la vista resumen
    /* Este método es clave en la interfaz dinámica del sistema, ya que permite 
    al usuario modificar los datos del agresor sin salir de la vista resumen de la denuncia.*/
    public function editarDesdeResumen($id)
    {
        $agresor = Agresor::findOrFail($id);
        return view('agresor.formulario_edicion', compact('agresor'));
    }
    
    // Guarda los cambios realizados en el agresor desde la vista resumen
    /* Se utiliza con AJAX para actualizar el agresor directamente sin 
    recargar la página completa. Devuelve una respuesta JSON que indica éxito.*/
    public function actualizarDesdeResumen(Request $request, $id)
    {
        $agresor = Agresor::findOrFail($id);
        $agresor->update($request->all());
    
        return response()->json(['success' => true]);
    }
    

}




