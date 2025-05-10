<style>
    .tabla-container {
        width: 100%;
        overflow-x: auto;
    }

    .tabla-denuncias {
        width: 100%;
        min-width: 1200px;
        white-space: nowrap;
    }

    .tabla-denuncias th,
    .tabla-denuncias td {
        white-space: nowrap;
        padding: 8px 12px;
        text-align: left;
    }
</style>

@extends('layouts.app')

@section('template_title')
    Intervenciones
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Intervenciones') }}
                            </span>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">

                        {{-- ✅ Buscador de intervenciones --}}
                    <form id="form-buscar-intervencion" method="GET" action="{{ route('intervencion.buscar') }}">
                        <div class="row g-2 align-items-end mb-4">
                            <div class="col-md-3">
                                <label for="num_ficha" class="form-label">Número de Ficha</label>
                                <input type="text" class="form-control" name="num_ficha" placeholder="--/----">
                            </div>
                            <div class="col-md-3">
                                <label for="num_equipo" class="form-label">Equipo</label>
                                <input type="text" class="form-control" name="num_equipo" placeholder="">
                            </div>
                            <div class="col-md-4">
                                <label for="nombre_usuaria" class="form-label">Nombre de Usuaria</label>
                                <input type="text" class="form-control" name="nombre_usuaria" placeholder="Ej: MARIA PEREZ">
                            </div>
                            <div class="col-md-2 d-grid mt-2">
                                <button type="button" class="btn btn-danger" onclick="buscarIntervenciones()">🔍 Buscar</button>
                            </div>
                        </div>
                    </form>


                        <div id="contenedor-tabla" class="tabla-container">
                            <h4 class="ms-2 mb-3 fs-4">📋 Lista de Intervenciones Registradas</h4>

                            <table id="miTablaIntervenciones" class="table table-striped table-hover tabla-denuncias">
                                <thead class="thead">
                                    <tr>
                                        <th>Num Ficha</th>
                                        <th>Equipo</th>
                                        <th>Num TAR</th>
                                        <th>Nombre Usuaria</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($intervenciones as $intervencion)
                                        <tr>
                                            <td>{{ $intervencion->num_ficha }}</td>
                                            <td>{{ $intervencion->num_equipo }}</td>
                                            <td>{{ $intervencion->num_tar }}</td>
                                            <td>{{ $intervencion->nombre_usuaria }}</td>
                                            <td>
                                                <form action="{{ route('intervencion.destroy', $intervencion->id) }}" method="POST">
                                                    <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-ver-intervencion" data-id="{{ $intervencion->id }}">
                                                        <i class="fa fa-fw fa-eye"></i> Ver
                                                    </a>
                                                    {{-- <a class="btn btn-sm btn-success" href="{{ route('intervencion.edit', $intervencion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a> --}}
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Seguro de eliminar?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> Eliminar</button> --}}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                {!! $intervenciones->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
