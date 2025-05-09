@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Oficina
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Oficina</span>
                    </div>
                    <div class="card-body bg-white">
                        <form id="form-crear-oficina" method="POST" action="{{ route('oficinas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('oficina.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
