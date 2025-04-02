@extends('layouts.app')

@section('template_title')
    Roles
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Roles') }}
                            </span>

                             <div class="float-right">
                                <button onclick="cargarFormularioCrearRol()" class="btn btn-primary btn-sm float-right">
                                    {{ __('Crear Rol') }}
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
                                        <th>ID</th>

									    <th >Nombre</th>
									    <th >Acciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td >{{ $role->id }}</td>

                                            <td >{{ $role->nombre }}</td>

                                            <td>
                                                <form id="form-eliminar-rol-{{ $role->id }}" data-id="{{ $role->id }}" class="d-inline">
                                                    <button type="button" class="btn btn-sm btn-primary" onclick="mostrarDetalleRol({{ $role->id }})">
                                                        <i class="fa fa-fw fa-eye"></i> Ver Detalles
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-success" onclick="cargarFormularioEditarRol({{ $role->id }})">
                                                        <i class="fa fa-fw fa-edit"></i> Editar
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="eliminarRol({{ $role->id }})">
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
                {!! $roles->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
