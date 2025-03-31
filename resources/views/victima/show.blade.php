@extends('layouts.app')

@section('template_title')
    {{ $victima->name ?? __('Show') . " " . __('Victima') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Victima</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('victimas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $victima->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ap Paterno:</strong>
                                    {{ $victima->ap_paterno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ap Materno:</strong>
                                    {{ $victima->ap_materno }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sexo:</strong>
                                    {{ $victima->sexo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lugr Nacimiento:</strong>
                                    {{ $victima->lugr_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Nacimiento:</strong>
                                    {{ $victima->fecha_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Edad:</strong>
                                    {{ $victima->edad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Recidencia Habitual:</strong>
                                    {{ $victima->recidencia_habitual }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Civil:</strong>
                                    {{ $victima->estado_civil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Rel Victima Agresor:</strong>
                                    {{ $victima->rel_victima_agresor }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hijos:</strong>
                                    {{ $victima->hijos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Logro Educativo:</strong>
                                    {{ $victima->logro_educativo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Actividad:</strong>
                                    {{ $victima->actividad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ingreso:</strong>
                                    {{ $victima->ingreso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Monto:</strong>
                                    {{ $victima->monto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idioma:</strong>
                                    {{ $victima->idioma }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Especifique Idioma:</strong>
                                    {{ $victima->especifique_idioma }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Domicilio:</strong>
                                    {{ $victima->id_domicilio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Documento:</strong>
                                    {{ $victima->id_documento }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
