@extends('layouts.app')

@section('template_title')
    {{ $denunciasDenuncia->name ?? __('Show') . " " . __('Denuncias Denuncia') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Denuncias Denuncia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('denuncias-denuncias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>F Denuncia:</strong>
                                    {{ $denunciasDenuncia->f_denuncia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nro Atencion:</strong>
                                    {{ $denunciasDenuncia->nro_atencion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Persons Id:</strong>
                                    {{ $denunciasDenuncia->persons_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Inhabilitado:</strong>
                                    {{ $denunciasDenuncia->inhabilitado }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ingreso:</strong>
                                    {{ $denunciasDenuncia->ingreso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Especifica Ingreso:</strong>
                                    {{ $denunciasDenuncia->especifica_ingreso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Descripcion:</strong>
                                    {{ $denunciasDenuncia->descripcion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Opinion:</strong>
                                    {{ $denunciasDenuncia->opinion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Historia:</strong>
                                    {{ $denunciasDenuncia->historia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Completa:</strong>
                                    {{ $denunciasDenuncia->completa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Archivada:</strong>
                                    {{ $denunciasDenuncia->archivada }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Procedencia:</strong>
                                    {{ $denunciasDenuncia->procedencia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Municipio:</strong>
                                    {{ $denunciasDenuncia->municipio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Otra Inst:</strong>
                                    {{ $denunciasDenuncia->otra_inst }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Servicio:</strong>
                                    {{ $denunciasDenuncia->nombre_servicio }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Orientacion:</strong>
                                    {{ $denunciasDenuncia->orientacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Atencion:</strong>
                                    {{ $denunciasDenuncia->tipo_atencion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Defensoria Id:</strong>
                                    {{ $denunciasDenuncia->defensoria_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipologia Id:</strong>
                                    {{ $denunciasDenuncia->tipologia_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Denuncia:</strong>
                                    {{ $denunciasDenuncia->tipo_denuncia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Orientaciones:</strong>
                                    {{ $denunciasDenuncia->estado_orientaciones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Actual:</strong>
                                    {{ $denunciasDenuncia->estado_actual }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Color:</strong>
                                    {{ $denunciasDenuncia->color }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
