@extends('layouts.app')

@section('template_title')
    {{ $oficina->name ?? __('Show') . " " . __('Oficina') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Oficina</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('oficinas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Oficina:</strong>
                                    {{ $oficina->nombre_oficina }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $oficina->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telefono Oficina:</strong>
                                    {{ $oficina->telefono_oficina }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Idtipo Oficina:</strong>
                                    {{ $oficina->idtipo_oficina }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Condicion:</strong>
                                    {{ $oficina->condicion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Direccion:</strong>
                                    {{ $oficina->direccion }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
