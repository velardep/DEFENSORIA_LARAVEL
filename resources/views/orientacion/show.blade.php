@extends('layouts.app')

@section('template_title')
    {{ $orientacion->name ?? __('Show') . " " . __('Orientacion') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Orientacion</span>
                        </div>
                        <div class="text-end mt-4">
    <button id="btn-volver-orientaciones" class="btn btn-primary">
        ← Volver a Orientaciones
    </button>
</div>

                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Equipo:</strong>
                                    {{ $orientacion->equipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Profesional Asignado:</strong>
                                    {{ $orientacion->profesional_asignado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Ingreso:</strong>
                                    {{ $orientacion->fecha_ingreso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Orientacion Psicologica:</strong>
                                    {{ $orientacion->orientacion_psicologica }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Orientacion Social:</strong>
                                    {{ $orientacion->orientacion_social }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Orientacion Legal:</strong>
                                    {{ $orientacion->orientacion_legal }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Persona:</strong>
                                    {{ $orientacion->nombre_persona }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Edad:</strong>
                                    {{ $orientacion->edad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono:</strong>
                                    {{ $orientacion->telefono }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Barrio:</strong>
                                    {{ $orientacion->barrio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Motivo:</strong>
                                    {{ $orientacion->motivo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Resutado Entrevista:</strong>
                                    {{ $orientacion->resutado_entrevista }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Num Caso:</strong>
                                    {{ $orientacion->num_caso }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
