@extends('layouts.app')

@section('template_title')
    Delitos
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">{{ __('Delitos') }}</span>
                        <div class="float-right">
                            <button onclick="cargarFormularioCrearDelito()" class="btn btn-primary btn-sm">
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
                                    <th>Nombre Delito</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($delitos as $delito)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $delito->nombre_delito }}</td>
                                        <td>
                                            <form id="form-eliminar-delito-{{ $delito->id }}" class="d-inline">
                                                <button type="button" class="btn btn-sm btn-primary" onclick="mostrarDetalleDelito({{ $delito->id }})">
                                                    <i class="fa fa-fw fa-eye"></i> Ver Detalles
                                                </button>
                                                <button type="button" class="btn btn-sm btn-success" onclick="cargarFormularioEditarDelito({{ $delito->id }})">
                                                    <i class="fa fa-fw fa-edit"></i> Editar
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="eliminarDelito({{ $delito->id }})">
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
                    {!! $delitos->withQueryString()->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
