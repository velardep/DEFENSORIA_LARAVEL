@extends('layouts.app')

@section('template_title')
    Oficinas
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Oficinas') }}
                            </span>

                             <div class="float-right">
                                <button class="btn btn-primary btn-sm float-right" onclick="cargarFormularioCrearOficina()">
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
									    <th >Nombre</th>
                                        <th >Direccion</th>
                                        <th >Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($oficinas as $oficina)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td >{{ $oficina->nombre }}</td>
                                            <td >{{ $oficina->direccion }}</td>


                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary" onclick="mostrarDetalleOficina({{ $oficina->id }})">
                                                    <i class="fa fa-fw fa-eye"></i> Ver Detalles
                                                </button>
                                                <button type="button" class="btn btn-sm btn-success" onclick="cargarFormularioEditarOficina({{ $oficina->id }})">
                                                    <i class="fa fa-fw fa-edit"></i> Editar
                                                </button>

                                                <form id="form-eliminar-oficina-{{ $oficina->id }}" data-id="{{ $oficina->id }}" class="d-inline">
                                                <button type="button" class="btn btn-danger btn-sm" onclick="eliminarOficina({{ $oficina->id }})">
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
                </div>
                {!! $oficinas->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
