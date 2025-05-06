@extends('layouts.app')

@section('template_title')
    {{ $intervencion->nombre_usuaria ?? __('Mostrar') . " Intervención" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar Intervención') }}</span>
                        </div>
                        <div class="text-end mt-4">
                            <button id="btn-volver-intervenciones" class="btn btn-primary">
                                ← Volver a Intervenciones
                            </button>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="form-group mb-2 mb20">
                            <strong>Num Ficha:</strong>
                            {{ $intervencion->num_ficha }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Num Equipo:</strong>
                            {{ $intervencion->num_equipo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Num TAR:</strong>
                            {{ $intervencion->num_tar }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre de la Usuaria:</strong>
                            {{ $intervencion->nombre_usuaria }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
