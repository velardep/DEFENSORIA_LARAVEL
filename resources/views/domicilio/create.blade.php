@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Domicilio
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Domicilio</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('domicilio.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('domicilio.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
