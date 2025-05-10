<?php

namespace App\Http\Controllers;

use App\Models\Victima;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\VictimaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

// Gestion de Victimas
class VictimaController extends Controller
{
    // Muestra lista de victimas
    public function index(Request $request): View
    {
        $victimas = Victima::with('documento')->paginate(50);

        return view('victima.index', compact('victimas'))
            ->with('i', ($request->input('page', 1) - 1) * $victimas->perPage());
    }
    
    // Muestra formulario de registro de víctima
    public function create(): View
    {

        $victima = new Victima();

        return view('victima.create', compact('victima'));
    }

    // Verifica si la tabla de Victima contiene solo campos vacíos o nulos, excluyendo id, provisional y user_id
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

    
    // Guarda una nueva victima en la base de datos como provisional
    /* Se usa cuando se empieza a llenar el form de victima, pero aun no se llena el form de denuncia
    primero se llenan los datos de la victima con en campo procisional=true y su user_id asociado.
    Una vez creada la victima, invoca al metodo tieneSoloCamposVacios() para verificar si la victima
    no contiene datos vacios o nulos y si es asi entonces lo elimina totalmente */
     public function store(Request $request)
    {
        $data = $request->all();
        $data['provisional'] = true; // Añadimos que es provisional al principio
        $data['user_id'] = auth()->id(); // Asociar al usuario actual


        $victimas = Victima::create($data);
        if ($this->tieneSoloCamposVacios($victimas)) {
            $victimas->delete();
        }

        return response()->json($victimas);
    }

    // Muestra el detalle de una víctima
    public function show($id): View
    {
        $victima = Victima::find($id);

        return view('victima.show', compact('victima'));
    }

    // Muestra formulario de edición de víctima
    public function edit($id): View
    {
        $victima = Victima::find($id);

        return view('victima.edit', compact('victima'));
    }

    // Actualiza información de la víctima
    public function update(VictimaRequest $request, Victima $victima): RedirectResponse
    {
        $victima->update($request->validated());

        return Redirect::route('victimas.index')
            ->with('success', 'Victima updated successfully');
    }

    // Elimina una victima
    public function destroy($id): RedirectResponse
    {
        Victima::find($id)->delete();

        return Redirect::route('victimas.index')
            ->with('success', 'Victima deleted successfully');
    }

    // Buscar víctimas por nombre o código SLIM
    public function buscar(Request $request)
    {
        $query = Victima::query();
    
        // Si NO es admin, filtra por el user_id
        if (auth()->user()->rol_id != 1) {
            $query->where('user_id', auth()->id());
        }
    
        if ($request->nombre) {
            $query->where('nombre', 'like', '%' . $request->nombre . '%');
        }

        if ($request->cod_slim) {
            $query->whereHas('denuncia', function ($q) use ($request) {
                $q->where('cod_slim', 'like', '%' . $request->cod_slim . '%');
            });
        }
    
        $victimas = $query->get();
    
        return view('denuncia.tabla_victimas', compact('victimas'));
    }

    // Listar víctimas sin denuncia asociada
    public function sinDenuncia()
    {
        /* Retorna un listado de víctimas cuyo campo denuncia_id es null, lo que indica que no han sido asociadas 
        aún a una denuncia. Este método es clave para implementar el módulo de "víctimas incompletas" y permitir continuar 
        el flujo de registro en denuncias iniciadas de forma parcial.*/
        $query = Victima::query();

        if (auth()->user()->rol_id != 1) {
            $query->where('user_id', auth()->id());
        }

        $query->whereNull('denuncia_id');

        $victimas = $query->get();

        return view('denuncia.tabla_victimas', compact('victimas'));
    }
    
    public function editarDesdeResumen($id)
{
    $victima = Victima::findOrFail($id);
    return view('victima.formulario_edicion', compact('victima'));
}

public function actualizarDesdeResumen(Request $request, $id)
{
    $victima = Victima::findOrFail($id);
    $victima->update($request->all());

    return response()->json(['success' => true]);
}

}
