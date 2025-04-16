@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Denuncia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                
                        <form method="POST" action="{{ route('denuncia.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('denuncia.form', [
                                'denuncia' => $denuncia, 
                                'agresores' => $agresores, 
                                'victimas' => $victimas, 
                                'tiposViolencia' => $tiposViolencia, 
                                'violencias' => $violencias,
                                'delitos' => $delitos
                                ])

                        </form>
                    
            </div>
        </div>
    </section>
@endsection
