<?php

namespace App\Http\Controllers;

use App\Models\Denuncia;
use App\Models\Asignacion;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\DenunciaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Delito;
use App\Models\Oficina; 

use  \App\Models\Victima;

use Carbon\Carbon;


// Gestion de Denuncia
class DenunciaController extends Controller
{
    
    // Listado de denuncias visibles según rol
    public function index(Request $request): View
    {
        $user = auth()->user();

        if ($user->rol_id == 1) {
            // Admin: ve todo
            $denuncias = Denuncia::with(['agresor', 'victima', 'tipoviolencias', 'violencia'])
                ->paginate(50);
        } elseif ($user->rol_id == 2) {
            // Abogado: ve lo que crea y lo que se le asigna
            $denuncias = Denuncia::with(['agresor', 'victima', 'tipoviolencias', 'violencia'])
                ->where('user_id', $user->id)
                ->orWhereIn('id', function($query) use ($user) {
                    $query->select('denuncia_id')
                        ->from('asignaciones')
                        ->where('user_id', $user->id);
                })
                ->paginate(50);
            } else {
                // Psicólogos, Trabajadores Sociales, etc.: solo lo asignado Y que coincida oficina actual de denuncia
                $denuncias = Denuncia::with(['agresor', 'victima', 'tipoviolencias', 'violencia'])
                    ->whereHas('asignaciones', function ($query) use ($user) {
                        $query->where('user_id', $user->id);
                    })
                    ->where('oficina_id', $user->oficina_id)
                    ->paginate(50);
            }

        return view('denuncia.index', compact('denuncias'))
            ->with('i', ($request->input('page', 1) - 1) * $denuncias->perPage());
    }


    // Vista para crear una nueva denuncia
    public function create(): View
    {
        /* Prepara y envía a la vista de creación todos los datos necesarios: víctimas, agresores, 
        tipos y subtipos de violencia, y delitos. Esta vista es el punto inicial del formulario de denuncia, 
        que se llena tras registrar a la víctima y al agresor.*/

        $agresores = \App\Models\Agresor::all();
        $victimas = \App\Models\Victima::all();
        $tiposViolencia = \App\Models\TipoViolencia::all();
        $violencia = \App\Models\Violencia::all()->groupBy('id_tipo_violencia');        
        $delitos = Delito::all();
        $denuncia = new Denuncia();

        return view('denuncia.create', compact('denuncia', 'agresores', 
        'victimas', 'tiposViolencia', 'violencia', 'delitos'));
    }

    // Guarda una nueva denuncia completa
     public function store(Request $request)
    {
        $data = $request->all();

        /* Este método toma todos los datos del formulario, codifica arrays (como tipos de violencia o delitos penales), 
        agrega metadatos como el usuario y oficina actual, y guarda la denuncia. 
        Posteriormente, actualiza la víctima relacionada para asociarle el denuncia_id, permitiendo identificar si ya tiene 
        una denuncia vinculada.*/

        $data['delitos_penales'] = json_encode($request->input('delitos_penales', []));
        $data['violencia_fisica'] = json_encode($request->input('violencia_fisica', []));
        $data['violencia_psicologica'] = json_encode($request->input('violencia_psicologica', []));
        $data['violencia_sexual'] = json_encode($request->input('violencia_sexual', []));
        $data['violencia_economica'] = json_encode($request->input('violencia_economica', []));
        $data['violencia_feminicida'] = json_encode($request->input('violencia_feminicida', []));

        $data['emblematico'] = $request->input('emblematico', 'NO'); // default: NO

        $data['provisional'] = false; // También aquí marcamos provisional

        $data['user_id'] = auth()->id(); // Asociar al usuario actual
        $data['oficina_id'] = auth()->user()->oficina_id; // Asociar la oficina del usuario actual (esto te faltaba)


        // 🚀 Concatenar las iniciales al código SLIM
        $oficina = auth()->user()->oficina;
        $codigoBase = $request->input('cod_slim'); // Por ejemplo: 25/2024
        $data['cod_slim'] = $oficina->codigo_slim . '-' . $codigoBase;
        // Resultado: "SLIM Central - S1/25/2024"
        


        $denuncia = Denuncia::create($data);

        Victima::where('id', $denuncia->id_victima) // Aquí se actualiza la víctima relacionada
        ->update(['denuncia_id' => $denuncia->id]);
        
        return response()->json($denuncia);
    }

    // Filtra denuncias marcadas como emblemáticas 
    public function emblematicos()
    {
        $query = Denuncia::where('emblematico', 'SI')
            ->with(['victima', 'agresor']);
     
        if (auth()->user()->rol_id != 1) { // Si NO es admin 
            $query->where('user_id', auth()->id());
        }
     
        $denuncias = $query->get();
     
        return view('denuncia.tabla', compact('denuncias'));
    }
     
    // Muestra denuncias archivadas 
    // También respeta el rol del usuario para mostrar solo las suyas si no es administrador.
     public function archivados()
     {
        $query = Denuncia::where('estado', 'Archivado')
            ->with(['victima', 'agresor']);
     
        if (auth()->user()->rol_id != 1) { // Si NO es admin
            $query->where('user_id', auth()->id());
        }
     
        $denuncias = $query->get();
     
        return view('denuncia.tabla_archivados', compact('denuncias'));
     }

    // Muestra denuncias no marcadas como completas 
    /*Filtra denuncias con provisional = false, es decir, aquellas que aún no han sido marcadas como concluidas.*/ 
    public function incompletos()
    {
        $query = Denuncia::where('provisional', false)
            ->with(['victima', 'agresor']);
     
        if (auth()->user()->rol_id != 1) { // Si NO es admin
            $query->where('user_id', auth()->id());
        }
     
        $denuncias = $query->get();
     
        return view('denuncia.tabla_incompletos', compact('denuncias'));
    }
     
    // Marca una denuncia como finalizada 
    /*Actualiza el campo provisional de la denuncia a true, 
    indicando que ya está completa. Esto se puede hacer de forma manual desde la interfaz.*/
    public function marcarCompleto($id)
    {
        $denuncia = Denuncia::findOrFail($id);
        $denuncia->provisional = true;
        $denuncia->save();
     
        return response('OK', 200);
    }
     
    // Detalle individual de una denuncia
    public function show($id): View
    {
        $denuncia = Denuncia::find($id);

        return view('denuncia.show', compact('denuncia'));
    }

    // Muestra la vista de edición
    public function edit($id): View
    {
        $denuncia = Denuncia::find($id);

        return view('denuncia.edit', compact('denuncia'));
    }

    // Actualiza los datos validados de una denuncia
    /* Modifica una denuncia ya existente con nuevos datos validados. 
    Si la solicitud es AJAX, devuelve JSON; de lo contrario, redirige a la lista de denuncias.*/
    public function update(DenunciaRequest $request, Denuncia $denuncia)
    {
        $denuncia->update($request->validated());
    
        if (request()->ajax()) {
            return response()->json(['message' => 'Actualizado']);
        }
    
        return Redirect::route('denuncia.index')
            ->with('success', 'Denuncia updated successfully');
    }
    
    // Elimina una denuncia
    public function destroy($id)
{
    $denuncia = Denuncia::findOrFail($id);
    $denuncia->delete();

    return response()->json(['mensaje' => 'Denuncia eliminada']);
}


    // Filtra denuncias desde el formulario de búsqueda
    public function buscar(Request $request)
    {
        /* Permite buscar denuncias por número de caso, nombre de la víctima o año de registro. 
        Aplica restricciones según el rol del usuario.*/
        $query = Denuncia::query()->with(['victima', 'agresor']);
        if (auth()->user()->rol_id != 1) { // Si NO es admin
            $query->where(function ($q) {
                $q->where('user_id', auth()->id())
                  ->orWhereIn('id', function ($sub) {
                      $sub->select('denuncia_id')
                          ->from('asignaciones')
                          ->where('user_id', auth()->id());
                  });
            });
        }
        
        if ($request->cod_slim) {
            $query->where('cod_slim', $request->cod_slim);
        }

        if ($request->nombre) {
            $query->whereHas('victima', function ($q) use ($request) {
                $q->where('nombre', 'like', '%' . $request->nombre . '%');
            });
        }
        if ($request->fecha_inicio && $request->fecha_fin) {
            $query->whereBetween('fecha', [$request->fecha_inicio, $request->fecha_fin]);
        } elseif ($request->fecha_inicio) {
            $query->whereDate('fecha', '>=', $request->fecha_inicio);
        } elseif ($request->fecha_fin) {
            $query->whereDate('fecha', '<=', $request->fecha_fin);
        }
        

        $denuncias = $query->get();

        return view('denuncia.tabla', compact('denuncias'));
    }

    // Filtra denuncias por AJAX 
    public function filtrarAjax(Request $request)
    {
        /* Realiza la misma lógica que buscar, pero está diseñada para ser usada con peticiones AJAX, 
        devolviendo solo la vista renderizada para insertar en la interfaz */
        $cod_slim = $request->cod_slim;
        $nombre = $request->nombre;
        $anio = $request->anio;

        $denuncias = Denuncia::with(['victima', 'agresor'])
            ->when(auth()->user()->rol_id != 1, function ($query) {
                $query->where(function ($q) {
                    $q->where('user_id', auth()->id())
                      ->orWhereIn('id', function ($sub) {
                          $sub->select('denuncia_id')
                              ->from('asignaciones')
                              ->where('user_id', auth()->id());
                      });
                });
            })
            
            ->when($cod_slim, function ($query, $cod_slim) {
                $query->where('cod_slim', 'LIKE', "%$cod_slim%");
            })            
            ->when($nombre, function ($query, $nombre) {
                $query->whereHas('victima', function ($q) use ($nombre) {
                    $q->where('nombre', 'LIKE', "%$nombre%");
                });
            })
            ->when($request->fecha_inicio && $request->fecha_fin, function ($query) use ($request) {
                $query->whereBetween('fecha', [$request->fecha_inicio, $request->fecha_fin]);
            })
            ->when($request->fecha_inicio && !$request->fecha_fin, function ($query) use ($request) {
                $query->whereDate('fecha', '>=', $request->fecha_inicio);
            })
            ->when($request->fecha_fin && !$request->fecha_inicio, function ($query) use ($request) {
                $query->whereDate('fecha', '<=', $request->fecha_fin);
            })
            
            ->latest()
            ->get();

        return view('denuncia.tabla', compact('denuncias'))->render();
    }

    // Edita el estado de una denuncia
    public function actualizarEstado(Request $request, $id)
    {
        $denuncia = Denuncia::findOrFail($id);
        $denuncia->estado = $request->input('estado');
        $denuncia->save();

        return response('OK', 200);
    }

    // Modifica el testimonio asociado
    public function actualizarTestimonio(Request $request, $id)
    {
        $denuncia = Denuncia::findOrFail($id);
        $denuncia->testimonio = $request->input('testimonio');
        $denuncia->save();

        return response('ok');
    }

    // Actualiza los delitos penales asociados
    public function actualizarDelitos(Request $request, $id)
    {
        $denuncia = Denuncia::findOrFail($id);
        $denuncia->delitos_penales = json_encode($request->input('delitos_penales', []));
        $denuncia->save();

        return response('ok');
    }

    // Carga la sección de delitos penales
    public function mostrarDelitos($id)
    {
        $denuncia = Denuncia::findOrFail($id);
        return view('denuncia.partials.delitos', compact('denuncia'));
    }

    // Edita los tipos de violencia registrados
    public function actualizarViolencias(Request $request, $id)
    {
        $denuncia = Denuncia::findOrFail($id);

        $denuncia->violencia_economica = json_encode($request->input('violencia_economica', []));
        $denuncia->violencia_psicologica = json_encode($request->input('violencia_psicologica', []));
        $denuncia->violencia_sexual = json_encode($request->input('violencia_sexual', []));
        $denuncia->violencia_fisica = json_encode($request->input('violencia_fisica', []));
        $denuncia->violencia_feminicida = json_encode($request->input('violencia_feminicida', []));

        $denuncia->save();

        return response()->json(['success' => true]);
    }

    // Muestra tabla de denuncias derivables
    public function tablaDerivar()
    {
        $denuncias = Denuncia::with(['victima', 'user.oficina'])
            ->orderBy('id', 'desc')
            ->get();

        return view('denuncia.tabla_derivar', compact('denuncias'));
    }

    // Deriva una denuncia a otra oficina 
    public function derivar(Request $request, $id)
    {
        /* Permite asignar una nueva oficina y abogado a una denuncia. Si aún no ha sido derivada, 
        también modifica su num_caso agregando un sufijo con el nombre de la oficina original. Marca la denuncia como derivada.*/
        $denuncia = Denuncia::findOrFail($id);

        $nuevoOficinaId = $request->input('oficina_id');
        $nuevoAbogadoId = $request->input('abogado_id');

        // Buscar la oficina origen
        $oficinaOrigen = \App\Models\Oficina::find($denuncia->oficina_id);

        if (!$denuncia->es_derivada) {
            $oficinaNombre = str_replace(' ', '', $oficinaOrigen->nombre);
            $denuncia->num_caso = $denuncia->num_caso . '-' . strtoupper($oficinaNombre);
        }

        $denuncia->oficina_id = $nuevoOficinaId;
        $denuncia->user_id = $nuevoAbogadoId;
        $denuncia->es_derivada = true;
        $denuncia->save();

 
        return response()->json(['success' => true]);
    }

    // Muestra la tabla de denuncias con información relacionada para asignación de técnicos.
    public function tablaAsignar() {

        $denuncias = Denuncia::with(['victima', 'user.oficina', 'asignaciones.user'])->get();
        return view('denuncia.tabla_asignar', compact('denuncias'));

    }

    // Asigna múltiples técnicos a una denuncia específica.
    public function asignar(Request $request, $id){
        try {
            
            // Obtiene el array de IDs de técnicos enviados desde el formularios
            $tecnicos = $request->input('user_id', []);
            $denuncia = Denuncia::findOrFail($id);

            // Recorre cada técnico y crea una nueva asignación.
            foreach ($tecnicos as $userId) {
                Asignacion::create([
                    'denuncia_id' => $id,
                    'user_id' => $userId,
                    'fecha' => $request->input('fecha') ?? now(),
                    'oficina_id' => $denuncia->oficina_id 
                ]);
            }

            return response()->json(['success' => true]);

        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage(),
                'line' => $e->getLine()
            ], 500);
        }
    }
}
