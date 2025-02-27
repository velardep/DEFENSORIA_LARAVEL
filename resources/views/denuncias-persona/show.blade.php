@extends('layouts.app')

@section('template_title')
    {{ $denunciasPersona->name ?? __('Show') . " " . __('Denuncias Persona') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Denuncias Persona</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('denuncias-personas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombres:</strong>
                                    {{ $denunciasPersona->nombres }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellidos:</strong>
                                    {{ $denunciasPersona->apellidos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Actividad:</strong>
                                    {{ $denunciasPersona->actividad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Anonimo:</strong>
                                    {{ $denunciasPersona->anonimo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>C Nac:</strong>
                                    {{ $denunciasPersona->c_nac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estado Civil:</strong>
                                    {{ $denunciasPersona->estado_civil }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Estudia:</strong>
                                    {{ $denunciasPersona->estudia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Doc Expedido:</strong>
                                    {{ $denunciasPersona->doc_expedido }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Edad:</strong>
                                    {{ $denunciasPersona->edad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>F Nac:</strong>
                                    {{ $denunciasPersona->f_nac }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>G Instruccion:</strong>
                                    {{ $denunciasPersona->g_instruccion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Gestante:</strong>
                                    {{ $denunciasPersona->gestante }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Hijos:</strong>
                                    {{ $denunciasPersona->hijos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idioma:</strong>
                                    {{ $denunciasPersona->idioma }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ingr Eco:</strong>
                                    {{ $denunciasPersona->ingr_eco }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lgro Educa:</strong>
                                    {{ $denunciasPersona->lgro_educa }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lug Nacimiento:</strong>
                                    {{ $denunciasPersona->lug_nacimiento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lug Residencia:</strong>
                                    {{ $denunciasPersona->lug_residencia }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Lugar Trabajo:</strong>
                                    {{ $denunciasPersona->lugar_trabajo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Monto:</strong>
                                    {{ $denunciasPersona->monto }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nro Documento:</strong>
                                    {{ $denunciasPersona->nro_documento }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sexo:</strong>
                                    {{ $denunciasPersona->sexo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Tipo Doc:</strong>
                                    {{ $denunciasPersona->tipo_doc }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
