@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Victima
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Victima</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('victimas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('victima.form')
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
