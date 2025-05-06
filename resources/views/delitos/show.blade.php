@extends('layouts.app')

@section('template_title')
    {{ $delito->name ?? __('Show') . " " . __('Delito') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Detalle') }} Delito</span>
                        </div>
                        <div class="float-right">
                        <a href="javascript:void(0);" id="btn-volver-delito" class="btn btn-primary btn-sm">Volver</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Delito:</strong>
                                    {{ $delito->nombre_delito }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
