@extends('layouts.app')

@section('template_title')
    Violencia
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span id="card_title">
                        {{ __('Violencia') }}
                    </span>
                    <div class="float-right">
                        <button onclick="cargarFormularioCrearViolencia()" class="btn btn-primary btn-sm">
                            Crear Nueva
                        </button>

                    </div>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-4">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>
                                    <th>Nombre</th>
                                    <th>Id Tipo Violencia</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($violencias as $violencia)
                                    <tr>
                                        <td>{{ ++$i  }}</td>
                                        <td>{{ $violencia->nombre }}</td>
                                        <td>{{ $violencia->tipoViolencia->nombre ?? 'Sin tipo' }}</td>
                                        <td>
                                            <form id="form-eliminar-violencia-{{ $violencia->id }}" data-id="{{ $violencia->id }}" class="d-inline">
                                                <button type="button" class="btn btn-sm btn-primary" onclick="mostrarDetalleViolencia({{ $violencia->id }})">
                                                    <i class="fa fa-fw fa-eye"></i> Ver Detalles
                                                </button>
                                                <button type="button" class="btn btn-sm btn-success" onclick="cargarFormularioEditarViolencia({{ $violencia->id }})">
                                                    <i class="fa fa-fw fa-edit"></i> Editar
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="eliminarViolencia({{ $violencia->id }})">
                                                    <i class="fa fa-fw fa-trash"></i> Eliminar
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer">
                    {!! $violencias->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
