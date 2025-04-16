<?php

namespace App\Http\Controllers;

use App\Models\Denuncia;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DenunciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;


use App\Models\Delito;


use Carbon\Carbon;



class DenunciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $denuncias = Denuncia::with(['agresor', 'victima', 'tipoviolencias', 'violencia'])->paginate(50);

    return view('denuncia.index', compact('denuncias'))
        ->with('i', ($request->input('page', 1) - 1) * $denuncias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $agresores = \App\Models\Agresor::all();
        $victimas = \App\Models\Victima::all();
        $tiposViolencia = \App\Models\TipoViolencia::all();
        //$violencias = \App\Models\Violencia::all();
        $violencia = \App\Models\Violencia::all()->groupBy('id_tipo_violencia');
        

        $delitos = Delito::all();



        $denuncia = new Denuncia();

        return view('denuncia.create', compact('denuncia', 'agresores', 
        'victimas', 'tiposViolencia', 'violencia', 'delitos'));
    }


    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $data = $request->all();
     
         $data['delitos_penales'] = json_encode($request->input('delitos_penales', []));




         $data['violencia_fisica'] = json_encode($request->input('violencia_fisica', []));
         $data['violencia_psicologica'] = json_encode($request->input('violencia_psicologica', []));
         $data['violencia_sexual'] = json_encode($request->input('violencia_sexual', []));
         $data['violencia_economica'] = json_encode($request->input('violencia_economica', []));


         $data['emblematico'] = $request->input('emblematico', 'NO'); // default: NO

     
         $denuncia = Denuncia::create($data);


     
         return response()->json($denuncia);
     }
     

    public function emblematicos()
{
    $denuncias = Denuncia::where('emblematico', 'SI')
        ->with(['victima', 'agresor']) // si usas relaciones
        ->get();

    return view('denuncia.tabla', compact('denuncias'));
}


    /*public function store(Request $request)
    {
        $denuncia = Denuncia::create($request->all());

        return response()->json($denuncia);
    }*/

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $denuncia = Denuncia::find($id);

        return view('denuncia.show', compact('denuncia'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $denuncia = Denuncia::find($id);

        return view('denuncia.edit', compact('denuncia'));
    }

    /**
     * Update the specified resource in storage.
     */
    /*public function update(DenunciaRequest $request, Denuncia $denuncia): RedirectResponse
    {
        $denuncia->update($request->validated());

        return Redirect::route('denuncia.index')
            ->with('success', 'Denuncia updated successfully');
    }*/
    public function update(DenunciaRequest $request, Denuncia $denuncia)
    {
        $denuncia->update($request->validated());
    
        if (request()->ajax()) {
            return response()->json(['message' => 'Actualizado']);
        }
    
        return Redirect::route('denuncia.index')
            ->with('success', 'Denuncia updated successfully');
    }
    

    


    public function destroy($id): RedirectResponse
    {
        Denuncia::find($id)->delete();

        return Redirect::route('denuncia.index')
            ->with('success', 'Denuncia deleted successfully');
    }



    public function buscar(Request $request)
{
    $query = Denuncia::query()->with(['victima', 'agresor']);

    if ($request->nombre) {
        $query->whereHas('victima', function ($q) use ($request) {
            $q->where('nombre', 'like', '%' . $request->nombre . '%');
        });
    }

    if ($request->anio) {
        $query->whereYear('fecha', $request->anio);
    }

    $denuncias = $query->get();

    return view('denuncia.tabla', compact('denuncias'));
}


public function filtrarAjax(Request $request)
{
    $nombre = $request->nombre;
    $anio = $request->anio;

    $denuncias = Denuncia::with(['victima', 'agresor'])
        ->when($nombre, function ($query, $nombre) {
            $query->whereHas('victima', function ($q) use ($nombre) {
                $q->where('nombre', 'LIKE', "%$nombre%");
            });
        })
        ->when($anio, function ($query, $anio) {
            $query->whereYear('fecha', $anio);
        })
        ->latest()
        ->get();

    return view('denuncia.tabla', compact('denuncias'))->render();
}


public function actualizarEstado(Request $request, $id)
{
    $denuncia = Denuncia::findOrFail($id);
    $denuncia->estado = $request->input('estado');
    $denuncia->save();

    return response('OK', 200);
}



    
}
