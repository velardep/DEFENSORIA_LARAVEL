@extends('layouts.app')

@section('template_title')
    Tipo Violencia
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Tipo de Violencia') }}
                        </span>

                        <div class="float-right">
                            <button onclick="cargarFormularioCrearTipoViolencia()" class="btn btn-primary btn-sm float-right">
                                {{ __('Crear Nuevo') }}
                            </button>

                        </div>
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipoViolencias as $tipo)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $tipo->nombre }}</td>
                                        <td>
                                            <form id="form-eliminar-tipo-violencia-{{ $tipo->id }}" data-id="{{ $tipo->id }}" class="d-inline">
                                                <button type="button" class="btn btn-sm btn-primary" onclick="mostrarDetalleTipoViolencia({{ $tipo->id }})">
                                                    <i class="fa fa-fw fa-eye"></i> Ver Detalles
                                                </button>
                                                <button type="button" class="btn btn-sm btn-success" onclick="cargarFormularioEditarTipoViolencia({{ $tipo->id }})">
                                                    <i class="fa fa-fw fa-edit"></i> Editar
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="eliminarTipoViolencia({{ $tipo->id }})">
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

                {{-- Paginación --}}
                <div class="card-footer">
                    {!! $tipoViolencias->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
