@extends('layouts.app')

@section('template_title')
    {{ $domicilio->name ?? __('Show') . " " . __('Domicilio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Domicilio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('domicilio.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Zona Barrio:</strong>
                                    {{ $domicilio->zona_barrio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Avenida Calle:</strong>
                                    {{ $domicilio->avenida_calle }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom Edificio:</strong>
                                    {{ $domicilio->nom_edificio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono Domicilio:</strong>
                                    {{ $domicilio->telefono_domicilio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Distrito:</strong>
                                    {{ $domicilio->num_distrito }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Vivienda:</strong>
                                    {{ $domicilio->num_vivienda }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Piso Departamento:</strong>
                                    {{ $domicilio->num_piso_departamento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Celular:</strong>
                                    {{ $domicilio->num_celular }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lugar Domicilio:</strong>
                                    {{ $domicilio->lugar_domicilio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Especifique:</strong>
                                    {{ $domicilio->especifique }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
