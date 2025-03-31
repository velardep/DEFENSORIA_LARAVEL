@extends('layouts.app')

@section('template_title')
    {{ $denuncia->name ?? __('Show') . " " . __('Denuncia') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Denuncia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('denuncia.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha:</strong>
                                    {{ $denuncia->fecha }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Departamento:</strong>
                                    {{ $denuncia->departamento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Servicio:</strong>
                                    {{ $denuncia->nombre_servicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Municipio:</strong>
                                    {{ $denuncia->municipio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Caso:</strong>
                                    {{ $denuncia->num_caso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cod Slim:</strong>
                                    {{ $denuncia->cod_slim }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Agresor:</strong>
                                    {{ $denuncia->id_agresor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Violencia:</strong>
                                    {{ $denuncia->id_violencia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Victima:</strong>
                                    {{ $denuncia->id_victima }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Condicion:</strong>
                                    {{ $denuncia->condicion }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
