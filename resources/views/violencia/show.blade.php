@extends('layouts.app')

@section('template_title')
    {{ $violencia->name ?? __('Show') . " " . __('Violencia') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Violencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('violencia.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $violencia->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Condicion:</strong>
                                    {{ $violencia->condicion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Tipo Violencia:</strong>
                                    {{ $violencia->id_tipo_violencia }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
