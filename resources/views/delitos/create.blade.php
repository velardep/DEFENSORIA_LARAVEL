@extends('layouts.app')

@section('template_title')
    {{ __('Crear') }} Delito
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Delito</span>
                    </div>
                    <div class="card-body bg-white">
                        <form id="form-crear-delito" method="POST" action="{{ route('delitos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('delitos.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
