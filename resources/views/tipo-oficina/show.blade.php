@extends('layouts.app')

@section('template_title')
    {{ $tipoOficina->name ?? __('Show') . " " . __('Tipo Oficina') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo Oficina</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('tipo-oficinas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Tipo:</strong>
                                    {{ $tipoOficina->nombre_tipo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Condicion:</strong>
                                    {{ $tipoOficina->condicion }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
