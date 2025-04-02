@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? __('Show') . " " . __('User') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Usuario</span>
                        </div>
                        <div class="float-right">
                        <a href="javascript:void(0);" id="btn-volver-user" class="btn btn-primary btn-sm">Volver</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $user->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $user->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Rol Id:</strong>
                                    {{ $user->rol_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Rol Nombre:</strong>
                                    {{ $user->role->nombre ?? '-' }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Oficina Id:</strong>
                                    {{ $user->oficina_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Oficina Nombre:</strong>
                                    {{ $user->oficina->nombre ?? '-' }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
