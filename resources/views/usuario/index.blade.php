@extends('layouts.app') 

@section('template_title')
    Usuarios
@endsection

@section('content')
    <div class="container-fluid">
    <h2 class="text-center text-dark my-4"></i> Lista de Usuarios</h2> 
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                           <!-- <span id="card_title">
                                {{ __('Usuarios') }}
                            </span>-->

                            <div class="d-flex justify-content-end ">
                                <a href="javascript:void(0);" id="btn-create-user" class="btn btn-outline-primary btn-lg px-5 py-2 shadow-lg rounded-pill d-flex align-items-center">
                                    <i class="fas fa-user-plus me-2"></i> <span>{{ __('Crear Usuario') }}</span>
                                </a>
                            </div>


                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                    <th>No</th>
                                    <th >Password</th>
									<th >Ultimo Acceso</th>
									<th >Super Usuario</th>
									<th >Nombre Usuario</th>
									<th >Nombre</th>
									<th >Apellidos</th>
									<th >Correo</th>
									<th >Is Staff</th>
									<th >Activo</th>
									<th >Date Joined</th>
									<th >Acceso</th>
									<th >Id Oficinas</th>
									<th >Jerarquia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                        <td >{{ $usuario->password }}</td>
										<td >{{ $usuario->ultimo_acceso }}</td>
										<td >{{ $usuario->super_usuario }}</td>
										<td >{{ $usuario->nombre_usuario }}</td>
										<td >{{ $usuario->nombre }}</td>
										<td >{{ $usuario->apellidos }}</td>
										<td >{{ $usuario->correo }}</td>
										<td >{{ $usuario->is_staff }}</td>
										<td >{{ $usuario->activo }}</td>
										<td >{{ $usuario->date_joined }}</td>
										<td >{{ $usuario->acceso }}</td>
										<td >{{ $usuario->id_oficinas }}</td>
										<td >{{ $usuario->jerarquia }}</td>

                                            <td>
                                                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST">
                                                <div class="d-flex justify-content-center gap-2">
                                                    <!-- Botón Ver -->
                                                    <a class="btn btn-outline-primary btn-sm d-flex align-items-center shadow-sm rounded-pill px-3" 
                                                    href="{{ route('usuarios.show', $usuario->id) }}">
                                                        <i class="fa fa-eye me-1"></i> {{ __('Ver') }}
                                                    </a>

                                                    <!-- Botón Editar con AJAX -->
                                                    <a href="javascript:void(0);" 
                                                    class="btn btn-outline-success btn-sm d-flex align-items-center shadow-sm rounded-pill px-3 btn-edit-user" 
                                                    data-id="{{ $usuario->id }}">
                                                        <i class="fa fa-edit me-1"></i> {{ __('Editar') }}
                                                    </a>

                                                    <!-- Botón Eliminar con AJAX -->
                                                    <button type="button" 
                                                            class="btn btn-outline-danger btn-sm d-flex align-items-center shadow-sm rounded-pill px-3 btn-delete-user" 
                                                            data-id="{{ $usuario->id }}">
                                                        <i class="fa fa-trash me-1"></i> {{ __('Eliminar') }}
                                                    </button>
                                                </div>

                                                    @csrf
                                                    @method('DELETE')
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usuarios->withQueryString()->links() !!}
            </div>
        </div>
    </div>




    <!-- SCRIPT PARA MANEJAR ELIMINACIÓN CON AJAX -->
    <script>
        $(document).ready(function () {
            $(".btn-delete-user").on("click", function () {
                var userId = $(this).data("id");
                
                if (confirm("¿Estás seguro de eliminar este usuario?")) {
                    $.ajax({
                        url: "/usuarios/" + userId, // URL de eliminación
                        type: "POST",
                        data: {
                            _method: "DELETE",
                            _token: "{{ csrf_token() }}"
                        },
                        success: function (response) {
                            alert("Usuario eliminado correctamente");
                            
                            // Recargar la tabla de usuarios sin refrescar la página
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
                            alert("Error al eliminar usuario");
                            console.log("Error:", error);
                        }
                    });
                }
            });
        });
    </script>
@endsection
