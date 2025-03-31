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
                        <a href="{{ route('violencia.create') }}" class="btn btn-primary btn-sm" data-placement="left">
                            {{ __('Crear Nuevo') }}
                        </a>
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
                                    <th>Condición</th>
                                    <th>Id Tipo Violencia</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($violencias as $violencia)
                                    <tr>
                                        <td>{{ ++$i  }}</td>
                                        <td>{{ $violencia->nombre }}</td>
                                        <td>{{ $violencia->condicion }}</td>
                                        <td>{{ $violencia->id_tipo_violencia }}</td>
                                        <td>
                                            <form action="{{ route('violencia.destroy', $violencia->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('violencia.show', $violencia->id) }}">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}
                                                </a>
                                                <a class="btn btn-sm btn-success" href="{{ route('violencia.edit', $violencia->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="event.preventDefault(); confirm('¿Seguro que deseas eliminar?') ? this.closest('form').submit() : false;">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
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
