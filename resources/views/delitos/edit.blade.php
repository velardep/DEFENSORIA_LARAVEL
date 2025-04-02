@extends('layouts.app')

@section('template_title')
    {{ __('Editar') }} Delito
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Editar') }} Delito</span>
                    </div>
                    <div class="card-body bg-white">
                        <form id="form-editar-delito" method="POST" action="{{ route('delitos.update', $delito->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('delitos.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
