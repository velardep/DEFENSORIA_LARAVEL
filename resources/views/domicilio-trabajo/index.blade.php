@extends('layouts.app')

@section('template_title')
    Domicilio Trabajo
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span id="card_title">{{ __('Domicilio Trabajo') }}</span>
                    <a href="{{ route('domicilio-trabajos.create') }}" class="btn btn-primary btn-sm">
                        {{ __('Crear Nuevo') }}
                    </a>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-3">{{ $message }}</div>
                @endif

                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nombre Empresa</th>
                                    <th>Zona Barrio</th>
                                    <th>Avenida Calle</th>
                                    <th>Teléfono Trabajo</th>
                                    <th>N° Edificio</th>
                                    <th>Agresor</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($domicilioTrabajos as $domicilio)
                                    <tr>
                                    <td>{{ ++$i }}</td>
                                        <td>{{ $domicilio->nombre_empresa }}</td>
                                        <td>{{ $domicilio->zona_barrio }}</td>
                                        <td>{{ $domicilio->avenida_calle }}</td>
                                        <td>{{ $domicilio->telefono_trabajo }}</td>
                                        <td>{{ $domicilio->num_edificio }}</td>
                                        <td>{{ $domicilio->agresor->nombre ?? 'Sin asignar' }}</td>

                                        <td>
                                            <form action="{{ route('domicilio-trabajos.destroy', $domicilio->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('domicilio-trabajos.show', $domicilio->id) }}">Ver</a>
                                                <a class="btn btn-sm btn-success" href="{{ route('domicilio-trabajos.edit', $domicilio->id) }}">Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card-footer">
                    {!! $domicilioTrabajos->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
