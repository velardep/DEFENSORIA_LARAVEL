@extends('layouts.app')

@section('template_title')
    {{ $violencia->nombre ?? __('Show') . ' Violencia' }}
@endsection

@section('content')
<div id="contenedor-show-violencia">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Violencia</span>
                        </div>
                        <div class="float-right">
                            <a href="javascript:void(0);" id="btn-volver-violencia" class="btn btn-primary btn-sm">Volver</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $violencia->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Tipo de Violencia:</strong>
                            {{ $violencia->tipoViolencia->nombre ?? 'No asignado' }}
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
