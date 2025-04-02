<?php

namespace App\Http\Controllers;

use App\Models\Asignacion;
use App\Models\Denuncia;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\AsignacionRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AsignacionController extends Controller
{
    // Muestra el listado paginado de todas las asignaciones registradas.
    public function index(Request $request): View
    {
        $asignaciones = Asignacion::paginate();

        return view('asignaciones.index', compact('asignaciones'))
            ->with('i', ($request->input('page', 1) - 1) * $asignaciones->perPage());
    }



    /*
    * Determina qué vista debe mostrarse según el rol del usuario autenticado:
    * - Rol 4 (trabajo social): redirige a vista `registrar_social` con denuncias asignadas.
    * - Rol 5 (psicología): redirige a vista `registrar_psicologia` con denuncias asignadas.
    * - Rol 2 (abogado u otro): redirige a vista `registrar_denuncia`.
    * - Cualquier otro rol (ej: admin): redirige al dashboard del admin.
     */
    public function create()
    {
        $user = auth()->user();

        if (in_array($user->rol_id, [4, 5])) {
            $denunciasAsignadas = Denuncia::whereHas('asignaciones', function ($query) use ($user) {
                $query->where('user_id', $user->id);
            })->get();

            if ($user->rol_id == 4) {
                return view('registrar_social.registrar_social', compact('denunciasAsignadas'));
            }

            if ($user->rol_id == 5) {
                return view('registrar_psicologia.registrar_psicologia', compact('denunciasAsignadas'));
            }
        }

        if ($user->rol_id == 2) {
            return view('registrar_denuncia.registrar_denuncia');
        }

        return redirect()->route('admin.dashboard');
    }


    // Guarda una nueva asignación usando los datos validados del formulario.
    public function store(AsignacionRequest $request): RedirectResponse
    {
        Asignacion::create($request->validated());

        return Redirect::route('asignaciones.index')
            ->with('success', 'Asignaciones created successfully.');
    }

    // Muestra los detalles de una asignación específica.
    public function show($id): View
    {
        $asignacion = Asignacion::find($id);

        return view('asignaciones.show', compact('asignacion'));
    }

    // Muestra el formulario de edición de una asignación específica.
    public function edit($id): View
    {
        $asignacion = Asignacion::find($id);

        return view('asignaciones.edit', compact('asignacion'));
    }

    // Actualiza una asignación existente con los nuevos datos validados.
    public function update(AsignacionRequest $request, Asignacion $asignacion): RedirectResponse
    {
        $asignacion->update($request->validated());

        return Redirect::route('asignaciones.index')
            ->with('success', 'Asignaciones updated successfully');
    }

    // Elimina una asignación específica de la base de datos.
    public function destroy($id): RedirectResponse
    {
        Asignacion::find($id)->delete();

        return Redirect::route('asignaciones.index')
            ->with('success', 'Asignaciones deleted successfully');
    }

    /**
     * Asigna múltiples técnicos (por sus IDs) a una misma denuncia en una sola operación.
     * Recibe una lista de IDs de usuarios, una fecha y el ID de la denuncia.
     * Crea una nueva asignación para cada técnico.
     */
    public function asignarMultiple(Request $request, $denunciaId)
    {
        foreach ($request->user_ids as $userId) {
            \App\Models\Asignacion::create([
                'denuncia_id' => $denunciaId,
                'user_id' => $userId,
                'fecha' => $request->fecha
            ]);
        }

        return response()->json(['success' => true]);
    }

}
