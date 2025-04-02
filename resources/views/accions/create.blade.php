@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Accion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('accions.store') }}"  role="form" enctype="multipart/form-data">
                    @csrf

                    @include('accions.form')

                </form>   
            </div>
        </div>
    </section>
@endsection
