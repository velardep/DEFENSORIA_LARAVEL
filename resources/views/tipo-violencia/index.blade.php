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
                            <a href="{{ route('tipo-violencia.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear Nuevo') }}
                            </a>
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
                                    <th>Condición</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipoViolencias as $tipo)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $tipo->nombre }}</td>
                                        <td>{{ $tipo->condicion }}</td>
                                        <td>
                                            <form action="{{ route('tipo-violencia.destroy', $tipo->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('tipo-violencia.show', $tipo->id) }}">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}
                                                </a>
                                                <a class="btn btn-sm btn-success" href="{{ route('tipo-violencia.edit', $tipo->id) }}">
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
