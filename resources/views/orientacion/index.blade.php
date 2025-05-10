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
    Orientación
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Orientaciones') }}
                            </span>

                            <!-- Botón de Crear nuevo (si quieres dejarlo visible más adelante) -->
                            <!--
                            <div class="float-right">
                                <a href="{{ route('orientacion.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                            </div>
                            -->
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">

                    <form id="form-buscar-orientacion" onsubmit="return false;" method="GET" action="{{ route('orientacion.buscar') }}">
                        <div class="row g-2 align-items-end">
                            <div class="col-md-3">
                                <label for="num_caso" class="form-label">Número de Caso</label>
                                <input type="text" class="form-control" name="num_caso" placeholder="Ej: 12345">
                            </div>
                            <div class="col-md-3">
                                <label for="fecha_ingreso" class="form-label">Fecha de Ingreso</label>
                                <input type="date" class="form-control" name="fecha_ingreso">
                            </div>
                            <div class="col-md-4">
                                <label for="nombre_persona" class="form-label">Nombre de Persona</label>
                                <input type="text" class="form-control" name="nombre_persona" placeholder="Ej: Juan Pérez">
                            </div>
                            <div class="col-md-2 d-grid">
                                <button type="button" class="btn btn-danger" onclick="buscarOrientaciones()">🔍 Buscar</button>
                            </div>
                        </div>
                    </form>



                        <div id="contenedor-tabla" class="tabla-container">
                            <h4 class="ms-2 mb-3 fs-4">📋 Lista de Orientaciones Registradas</h4>

                            <table id="miTablaOrientaciones" class="table table-striped table-hover tabla-denuncias">
                                <thead class="thead">
                                <tr>
                                    <!--<th>No</th>-->
                                    <th >Num Caso</th>
									<!--<th >Equipo</th>-->
									<!--<th >Profesional Asignado</th>-->
									<th >Fecha Ingreso</th>
									<th >Orientacion</th>
									
									<th >Nombre Persona</th>
									<th >Edad</th>
									<!--<th >Telefono</th>-->
									<!--<th >Barrio</th>-->
									<!--<th >Motivo</th>-->
									<th >Resutado Entrevista</th>
									

                                        <th>Acciones</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($orientaciones as $orientacion)
                                    <tr>
                                            <!--<td>{{ ++$i }}</td>-->
                                            <td >{{ $orientacion->num_caso }}</td>
 
										<!--<td >{{ $orientacion->equipo }}</td>-->
										<!--<td >{{ $orientacion->profesional_asignado }}</td>-->
										<td >{{ $orientacion->fecha_ingreso }}</td>
										<td >{{ $orientacion->orientacion }}</td>
										
										<td >{{ $orientacion->nombre_persona }}</td>
										<td >{{ $orientacion->edad }}</td>
										<!--<td >{{ $orientacion->telefono }}</td>
										<td >{{ $orientacion->barrio }}</td>
										<td >{{ $orientacion->motivo }}</td>-->
										<td >{{ $orientacion->resutado_entrevista }}</td>

                                            <td>
                                                <form action="{{ route('orientacion.destroy', $orientacion->id) }}" method="POST">
                                                <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-ver-orientacion" data-id="{{ $orientacion->id }}">
                                                    <i class="fa fa-fw fa-eye"></i> Ver Detalles
                                                </a>

                                                    <!--<a class="btn btn-sm btn-success" href="{{ route('orientacion.edit', $orientacion->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>-->
                                                    @csrf
                                                    @method('DELETE')
                                                    <!--<button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>-->
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                {!! $orientaciones->withQueryString()->links() !!}
            </div>
        </div>
    </div>








@endsection
