@extends('layouts.app')

@section('template_title')
    {{ $documento->name ?? __('Show') . " " . __('Documento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Documento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('documento.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $documento->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Condicion:</strong>
                                    {{ $documento->condicion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Tipo Documento:</strong>
                                    {{ $documento->id_tipo_documento }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
