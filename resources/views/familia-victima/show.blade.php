@extends('layouts.app')

@section('template_title')
    {{ $familiaVictima->name ?? __('Show') . " " . __('Familia Victima') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Familia Victima</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('familia-victima.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $familiaVictima->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellidos:</strong>
                                    {{ $familiaVictima->apellidos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Parentesco:</strong>
                                    {{ $familiaVictima->parentesco }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Sexo:</strong>
                                    {{ $familiaVictima->sexo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Edad:</strong>
                                    {{ $familiaVictima->edad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ocupacion:</strong>
                                    {{ $familiaVictima->ocupacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Observacion:</strong>
                                    {{ $familiaVictima->observacion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Victima Id:</strong>
                                    {{ $familiaVictima->victima_id }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
