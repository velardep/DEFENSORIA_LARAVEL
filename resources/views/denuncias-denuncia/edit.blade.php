@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Denuncias Denuncia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Denuncias Denuncia</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('denuncias-denuncias.update', $denunciasDenuncia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('denuncias-denuncia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
