<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-dark text-white">

<h2 class="text-black">Usuarios</h2>

<!-- BOTÓN PARA AGREGAR USUARIO -->

<div class="d-flex justify-content-between align-items-center mb-3">
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#formAgregarUser">
        <i class="fa fa-plus"></i> Agregar Usuario
    </button>
</div>

<!-- FORMULARIO PARA AGREGAR USUARIO -->
<div class="collapse" id="formAgregarUser">
    <div class="card card-body text-black">
        <h4>Agregar Usuario</h4>
        <form id="formAgregar" method="POST">
        @csrf
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Correo</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="first_name">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="last_name">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Último Login</label>
                    <input type="datetime-local" class="form-control" name="last_login">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-3">
                    <label class="form-label">Superusuario</label>
                    <select class="form-control" name="is_superuser">
                        <option value="1">Sí</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Staff</label>
                    <select class="form-control" name="is_staff">
                        <option value="1">Sí</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Activo</label>
                    <select class="form-control" name="is_active">
                        <option value="1">Sí</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Fecha de Ingreso</label>
                    <input type="datetime-local" class="form-control" name="date_joined">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <label class="form-label">Acces</label>
                    <input type="number" class="form-control" name="acces">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Defensoría ID</label>
                    <input type="number" class="form-control" name="defensoria_id">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Jerarquía</label>
                    <input type="number" class="form-control" name="jerarquia">
                </div>
            </div>
            <div class="d-flex justify-content-end mt-3">
            <button type="button" class="btn btn-secondary me-2" onclick="cerrarFormularioAgregar()">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>

<!-- FORMULARIO PARA EDITAR USUARIO -->
<div class="collapse" id="formEditarUser">
    <div class="card card-body text-black">
        <h4>Editar Usuario</h4>
        <form id="formEditar">
            @csrf
            @method('PUT')
            <input type="hidden" id="editUserId">
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label">Usuario</label>
                    <input type="text" id="editUsername" class="form-control" name="username" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Correo</label>
                    <input type="email" id="editEmail" class="form-control" name="email" required>
                </div>
                <div class="col-md-4">
                    <label class="form-label">Contraseña</label>
                    <input type="password" id="editPassword" class="form-control" name="password">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <label class="form-label">Nombre</label>
                    <input type="text" id="editFirstName" class="form-control" name="first_name">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Apellido</label>
                    <input type="text" id="editLastName" class="form-control" name="last_name">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Acces</label>
                    <input type="number" id="editAcces" class="form-control" name="acces">
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <label class="form-label">Defensoría ID</label>
                    <input type="number" id="editDefensoriaId" class="form-control" name="defensoria_id">
                </div>
                <div class="col-md-4">
                    <label class="form-label">Jerarquía</label>
                    <input type="number" id="editJerarquia" class="form-control" name="jerarquia">
                </div>
            </div>
            <div class="d-flex justify-content-end mt-3">
                <button type="button" class="btn btn-secondary me-2" onclick="cerrarFormularioEditar()">Cancelar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</div>



    <!-- TABLA DE USUARIOS -->
        <div class="card-body d-flex flex-column h-100">
            <div class="table-responsive flex-grow-1" style="overflow: auto; min-height: 0;">
                <table class="table border-hover tr-rounded card-table cardtbl-link table-striped" id="tablaUsers">
                    <thead class="bg-light text-black">
                        <tr>
                            <th class="font-w600 text-black">Opciones</th>
                            <th class="font-w600 text-black">ID</th>
                            <th class="font-w600 text-black">Password</th>
                            <th class="font-w600 text-black">Ultima Sesion</th>
                            <th class="font-w600 text-black">Super Usuario</th>
                            <th class="font-w600 text-black">Nombre</th>
                            <th class="font-w600 text-black">Primer Apellido</th>
                            <th class="font-w600 text-black">Segundo Apellido</th>
                            <th class="font-w600 text-black">Correo</th>
                            <th class="font-w600 text-black">Staff</th>
                            <th class="font-w600 text-black">Activo</th>
                            <th class="font-w600 text-black">Fecha de Ingreso</th>
                            <th class="font-w600 text-black">Acceso</th>
                            <th class="font-w600 text-black">Defensoris ID</th>
                            <th class="font-w600 text-black">Jerarquia</th>
                        </tr>
                    </thead>
                    <tbody id="tbodyUsers">
                        @foreach($users as $u)
                            <tr id="fila-{{ $u->id }}">
                                <td>
                                    <button class="btn btn-outline-primary btn-sm me-2" 
                                        onclick="mostrarFormularioEditar({{ $u->id }}, '{{ $u->password }}', '{{ $u->last_login }}', '{{ $u->is_superuser }}', '{{ $u->username }}',
                                        '{{ $u->first_name }}', '{{ $u->last_name }}', '{{ $u->email }}', '{{ $u->is_staff }}', '{{ $u->is_active}}', '{{ $u->date_joined}}', '{{ $u->acces}}'
                                        , '{{ $u->defensoria_id}}', '{{ $u->jerarquia}}')">
                                        <i class="fa fa-pencil"></i> Editar
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm" onclick="eliminarUser({{ $u->id }})">
                                        <i class="fa fa-trash"></i> Eliminar
                                    </button>
                                </td>
                                <td>{{ $u->id }}</td>
                                <td>{{ $u->password }}</td>
                                <td>{{ $u->last_login }}</td>
                                <td>{{ $u->is_superuser }}</td>
                                <td>{{ $u->username }}</td>
                                <td>{{ $u->first_name }}</td>
                                <td>{{ $u->last_name }}</td>
                                <td>{{ $u->email }}</td>
                                <td>{{ $u->is_staff }}</td>
                                <td>{{ $u->is_active }}</td>
                                <td>{{ $u->date_joined }}</td>
                                <td>{{ $u->acces }}</td>
                                <td>{{ $u->defensoria_id }}</td>
                                <td>{{ $u->jerarquia }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    
</div>

<!-- SCRIPT AJAX PARA USUARIOS -->
<script>
$(document).ready(function() {
    // Asegura que solo se agregue UN event listener
    $("#formAgregar").submit(function(e) {
        e.preventDefault(); // Evitar que se recargue la página
        let formData = new FormData(this); // Capturar los datos correctamente

        $.ajax({
            url: "/auth_user",
            type: "POST",
            data: formData,
            processData: false, // No procesar los datos automáticamente
            contentType: false, // No establecer tipo de contenido automáticamente
            success: function(response) {
                $("#formAgregarUser").collapse('hide'); // Cerrar formulario
                $("#formAgregar")[0].reset(); // Limpiar formulario
                cargarUsuarios();  // Recargar la tabla sin recargar la página
            },
            error: function(error) {
                console.log("Error al insertar usuario:", error);
            }
        });
    });

    $("#formEditar").off("submit").on("submit", function(e) {
        e.preventDefault();
        let id = $("#editUserId").val();
        let formData = $(this).serialize();

        $.ajax({
            url: `/auth_user/${id}`,
            type: "PUT",
            data: formData,
            success: function(response) {
                $("#formEditarUser").collapse('hide');
                $("#formEditar")[0].reset();
                cargarUsuarios();
            }
        });
    });
});


function mostrarFormularioEditar(id) {
    $.ajax({
        url: `/auth_user/${id}`,
        type: "GET",
        success: function(response) {
            // Asegurar que se obtienen los datos y llenarlos en los campos correspondientes
            $("#editUserId").val(response.id);
            $("#editUsername").val(response.username);
            $("#editEmail").val(response.email);
            $("#editFirstName").val(response.first_name);
            $("#editLastName").val(response.last_name);
            $("#editPassword").val("");  // No se muestra la contraseña por seguridad
            $("#editAcces").val(response.acces);
            $("#editDefensoriaId").val(response.defensoria_id);
            $("#editJerarquia").val(response.jerarquia);
            $("#formEditarUser").collapse('show'); // Muestra el formulario de edición
        },
        error: function(error) {
            console.log("Error al obtener usuario:", error);
        }
    });
}



    // ELIMINAR USUARIO
    function eliminarUser(id) {
        if (!confirm("¿Estás seguro de eliminar este usuario?")) return;

        $.ajax({
            url: `/auth_user/${id}`,
            type: "POST",
            data: {
                _method: "DELETE",
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                $("#fila-" + id).remove();
            },
            error: function(error) {
                console.log("Error al eliminar", error);
            }
        });
    };

    function cerrarFormularioEditar() {
    $("#formEditarUser").collapse('hide');
    $("#formEditar")[0].reset(); // Opcional: limpia los campos después de cerrar
}
function cerrarFormularioAgregar() {
    $("#formAgregarUser").collapse('hide');
    $("#formAgregar")[0].reset();
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
