@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? __('Show') . " " . __('Usuario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('usuarios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Ultimo Acceso:</strong>
                                    {{ $usuario->ultimo_acceso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Super Usuario:</strong>
                                    {{ $usuario->super_usuario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre Usuario:</strong>
                                    {{ $usuario->nombre_usuario }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $usuario->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Apellidos:</strong>
                                    {{ $usuario->apellidos }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Correo:</strong>
                                    {{ $usuario->correo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Is Staff:</strong>
                                    {{ $usuario->is_staff }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Activo:</strong>
                                    {{ $usuario->activo }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Date Joined:</strong>
                                    {{ $usuario->date_joined }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Acceso:</strong>
                                    {{ $usuario->acceso }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Id Oficinas:</strong>
                                    {{ $usuario->id_oficinas }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Jerarquia:</strong>
                                    {{ $usuario->jerarquia }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
