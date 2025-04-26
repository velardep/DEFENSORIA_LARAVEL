@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Agresor
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Agresor</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('agresor.update', $agresor->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('agresor.form')

                        </form>
                    </div>
            </div>
        </div>
    </section>
@endsection
