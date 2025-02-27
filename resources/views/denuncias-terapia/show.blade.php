@extends('layouts.app')

@section('template_title')
    {{ $denunciasTerapia->name ?? __('Show') . " " . __('Denuncias Terapia') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Denuncias Terapia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('denuncias-terapias.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Otro Tipo:</strong>
                                    {{ $denunciasTerapia->otro_tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Otro Documento:</strong>
                                    {{ $denunciasTerapia->otro_documento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Derivacion:</strong>
                                    {{ $denunciasTerapia->derivacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Denuncia Id:</strong>
                                    {{ $denunciasTerapia->denuncia_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Croquis:</strong>
                                    {{ $denunciasTerapia->croquis }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Documento Otro:</strong>
                                    {{ $denunciasTerapia->documento_otro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Inf Psicologico:</strong>
                                    {{ $denunciasTerapia->inf_psicologico }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Inf Social:</strong>
                                    {{ $denunciasTerapia->inf_social }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Violencia Economica:</strong>
                                    {{ $denunciasTerapia->violencia_economica }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Violencia Fisica:</strong>
                                    {{ $denunciasTerapia->violencia_fisica }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Violencia Otro:</strong>
                                    {{ $denunciasTerapia->violencia_otro }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Violencia Psicologica:</strong>
                                    {{ $denunciasTerapia->violencia_psicologica }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Violencia Sexual:</strong>
                                    {{ $denunciasTerapia->violencia_sexual }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observaciones:</strong>
                                    {{ $denunciasTerapia->observaciones }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
