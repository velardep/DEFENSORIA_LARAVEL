@extends('layouts.app')

@section('template_title')
    {{ $accion->name ?? __('Show') . " " . __('Accion') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Accion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('accions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Acciones:</strong>
                            {{ $accion->acciones }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Hora:</strong>
                            {{ $accion->fecha_hora }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tecnico:</strong>
                            {{ $accion->tecnico }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Denuncia Id:</strong>
                            {{ $accion->denuncia_id }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
