@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Usuario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Usuario</span>
                    </div>
                    <div class="card-body bg-white">
                        <form id="createUserForm" method="POST" action="{{ route('usuarios.store') }}" role="form" enctype="multipart/form-data">
                            @csrf

                            @include('usuario.form')

                            <div class="mt-3">
                                <button type="button" id="btn-back-users" class="btn btn-secondary">
                                    <i class="fa fa-arrow-left"></i> Cancelar
                                </button>
                                <button type="button" id="btn-save-user" class="btn btn-primary">
                                    <i class="fa fa-save"></i> Guardar Usuario
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $("#btn-save-user").on("click", function () {
                var form = $("#createUserForm");
                var formData = new FormData(form[0]);

                $.ajax({
                    url: form.attr("action"),
                    type: form.attr("method"),
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        alert("Usuario creado correctamente");

                        // Volver al index principal y recargar la tabla de usuarios
                        $(".content-section").hide();
                        $("#usuarios-content").show();

                        $.ajax({
                            url: "{{ route('usuarios.index') }}",
                            type: "GET",
                            cache: false,
                            success: function (response) {
                                $("#usuarios-content").html(response);
                            },
                            error: function (error) {
                                console.log("Error al cargar usuarios:", error);
                            }
                        });
                    },
                    error: function (error) {
                        alert("Error al crear usuario");
                        console.log("Error:", error);
                    }
                });
            });

            // Botón para volver sin guardar
            $("#btn-back-users").on("click", function () {
                $(".content-section").hide();
                $("#usuarios-content").show();
            });
        });
    </script>
@endsection
