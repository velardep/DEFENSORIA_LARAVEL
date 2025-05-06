@extends('layouts.app')

@section('template_title')
    {{ __('Crear') }} Role
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Rol</span>
                    </div>
                    <div class="card-body bg-white">
                        <form id="form-crear-rol" method="POST" action="{{ route('roles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('roles.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
