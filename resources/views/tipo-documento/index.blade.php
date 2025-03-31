@extends('layouts.app')

@section('template_title')
    Tipo Documento
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <span id="card_title">
                        {{ __('Tipo Documento') }}
                    </span>
                    <div class="float-right">
                        <a href="{{ route('tipo-documento.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                            {{ __('Crear Nuevo') }}
                        </a>
                    </div>
                </div>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-4">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nombre</th>
                                <th>Condicion</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tipoDocumentos as $tipoDocumento)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $tipoDocumento->nombre }}</td>
                                    <td>{{ $tipoDocumento->condicion }}</td>
                                    <td>
                                        <form action="{{ route('tipo-documento.destroy', $tipoDocumento->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary" href="{{ route('tipo-documento.show', $tipoDocumento->id) }}">
                                                <i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}
                                            </a>
                                            <a class="btn btn-sm btn-success" href="{{ route('tipo-documento.edit', $tipoDocumento->id) }}">
                                                <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Seguro que deseas eliminar?') ? this.closest('form').submit() : false;">
                                                <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="card-footer">
                        {!! $tipoDocumentos->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
