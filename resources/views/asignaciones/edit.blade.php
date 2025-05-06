@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Asignacione
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Asignacione</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('asignaciones.update', $asignacion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('asignaciones.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
