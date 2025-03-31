@extends('layouts.app')

@section('template_title')
    {{ $agresor->name ?? __('Show') . " " . __('Agresor') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Agresor</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('agresor.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $agresor->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ap Paterno:</strong>
                                    {{ $agresor->ap_paterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ap Materno:</strong>
                                    {{ $agresor->ap_materno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Documento:</strong>
                                    {{ $agresor->id_documento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sexo:</strong>
                                    {{ $agresor->sexo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lugr Nacimiento:</strong>
                                    {{ $agresor->lugr_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nacimiento:</strong>
                                    {{ $agresor->fecha_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Edad:</strong>
                                    {{ $agresor->edad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Recidencia Habitual:</strong>
                                    {{ $agresor->recidencia_habitual }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Civil:</strong>
                                    {{ $agresor->estado_civil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Logro Educativo:</strong>
                                    {{ $agresor->logro_educativo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ultimo Curso:</strong>
                                    {{ $agresor->ultimo_curso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Actividad:</strong>
                                    {{ $agresor->actividad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Especifique:</strong>
                                    {{ $agresor->especifique }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ingreso:</strong>
                                    {{ $agresor->ingreso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Monto:</strong>
                                    {{ $agresor->monto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idioma:</strong>
                                    {{ $agresor->idioma }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Especifique Idioma:</strong>
                                    {{ $agresor->especifique_idioma }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Domicilio:</strong>
                                    {{ $agresor->id_domicilio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Domicilio Trabajo:</strong>
                                    {{ $agresor->id_domicilio_trabajo }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
