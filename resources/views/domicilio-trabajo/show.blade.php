@extends('layouts.app')

@section('template_title')
    {{ $domicilioTrabajo->name ?? __('Show') . " " . __('Domicilio Trabajo') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Domicilio Trabajo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('domicilio-trabajos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Empresa:</strong>
                                    {{ $domicilioTrabajo->nombre_empresa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Zona Barrio:</strong>
                                    {{ $domicilioTrabajo->zona_barrio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Avenida Calle:</strong>
                                    {{ $domicilioTrabajo->avenida_calle }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono Trabajo:</strong>
                                    {{ $domicilioTrabajo->telefono_trabajo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Edificio:</strong>
                                    {{ $domicilioTrabajo->num_edificio }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
