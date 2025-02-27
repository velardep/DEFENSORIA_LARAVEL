@extends('layouts.app')

@section('template_title')
    {{ $rolPermiso->name ?? __('Show') . " " . __('Rol Permiso') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Rol Permiso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('rol-permisos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Rol:</strong>
                                    {{ $rolPermiso->id_rol }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Permiso:</strong>
                                    {{ $rolPermiso->id_permiso }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
