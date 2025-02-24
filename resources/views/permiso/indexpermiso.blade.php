<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de permisos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Style css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    
</head>

<body class="bg-dark text-white">
    

<div class="container mt-5">
    <h2 class="text-black">Listado de Permisos</h2>

    <!-- BOTÓN PARA AGREGAR permiso -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#formAgregarpermiso">
            <i class="fa fa-plus"></i> Agregar Permiso
        </button>
    </div>

    <!-- FORMULARIO PARA AGREGAR permiso -->
<div class="collapse" id="formAgregarpermiso">
    <div class="card card-body shadow-lg p-4 bg-light rounded">
        <h4 class="text-danger fw-bold text-center">Agregar permiso</h4>
        <form id="formAgregar">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label fw-bold">Nombre</label>
                    <input type="text" class="form-control input-custom" name="nombrepermiso" required>
                </div>
               
            <div class="row mt-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Condición</label>
                    <input type="text" class="form-control input-custom" name="condicionpermiso" required>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <button type="button" class="btn btn-secondary me-2" onclick="cerrarFormulario()">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>

<!-- FORMULARIO PARA EDITAR permiso -->
<div class="collapse mt-3" id="formEditarpermiso">
    <div class="card card-body shadow-lg p-4 bg-light rounded">
        <h4 class="text-danger fw-bold text-center">Editar Permiso</h4>
        <form id="editForm">
            @csrf
            @method('PUT')
            <input type="hidden" name="idpermiso" id="edit_idpermiso">
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label fw-bold">Nombre</label>
                    <input type="text" class="form-control input-custom" name="nombrepermiso" id="edit_nombrepermiso" required>
                </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Condición</label>
                    <input type="text" class="form-control input-custom" name="condicionpermiso" id="edit_condicionpermiso" required>
                </div>
            <div class="d-flex justify-content-end mt-4">
                <button type="button" class="btn btn-secondary me-2" onclick="cerrarFormularioEditar()">Cancelar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>
</div>





   <!-- TABLA DE permisoS -->
<div class="card mt-3 p-3 shadow-lg rounded bg-white" style="width: 100%; margin: auto;">
    <div class="card-body">
        <h4 class="text-center text-dark fw-bold">Listado de permisos</h4>
        <div class="table-responsive" style="max-height: 70vh; overflow-y: auto;">
            <table class="table table-hover table-bordered rounded text-dark" id="tablapermisos">
                <thead class="bg-danger text-white text-center">
                    <tr>
                        <th class="p-3">Opciones</th>
                        <th class="p-3">ID</th>
                        <th class="p-3">Nombre</th>
                        <th class="p-3">Condición</th>
                    </tr>
                </thead>
                <tbody id="tbodypermisos">
                    @foreach($permisos as $o)
                        <tr id="fila-{{ $o->idpermiso }}">
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary me-1" 
                                    onclick="mostrarFormularioEditar(
                                        {{ $o->idpermiso }}, 
                                        '{{ $o->nombrepermiso }}', 
                                        '{{ $o->condicionpermiso }}'                                    )">
                                    <i class="fa fa-pencil"></i> Editar
                                </button>
                                <button class="btn btn-sm btn-outline-danger" onclick="eliminarpermiso({{ $o->idpermiso }})">
                                    <i class="fa fa-trash"></i> Eliminar
                                </button>
                            </td>
                            <td class="text-center fw-bold">{{ $o->idpermiso }}</td>
                            <td class="text-dark">{{ $o->nombrepermiso }}</td>
                            <td class="text-center text-dark">{{ $o->condicionpermiso }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



</div>

<!-- SCRIPT AJAX PARA GUARDAR Y RECARGAR LA TABLA -->
<script>
$(document).ready(function() {
    // AGREGAR permiso
    $("#formAgregar").submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this); // Evitar que los datos se pasen en la URL

        $.ajax({
            url: "{{ url('/permiso') }}",
            type: "POST",
            data: formData,
            processData: false, // No procesar los datos en la URL
            contentType: false, // Usar el tipo de contenido correcto
            success: function(response) {
                location.reload(); // Recarga la página para mostrar la tabla actualizada
            },
            error: function(error) {
                console.log("Error al guardar permiso", error);
            }
        });
    });

    // EDITAR permiso
    $("#editForm").submit(function(e) {
        e.preventDefault();
        let id = $("#editForm").attr("data-id");
        let formData = new FormData(this); // Evitar que los datos se pasen en la URL

        $.ajax({
            url: `/permiso/${id}`,
            type: "POST",
            data: formData,
            processData: false, // No procesar los datos en la URL
            contentType: false, // Usar el tipo de contenido correcto
            success: function(response) {
                location.reload(); // Recargar la tabla sin salir de la página
            },
            error: function(error) {
                console.log("Error al actualizar permiso", error);
            }
        });
    });
});

function mostrarFormularioEditar(id, nombre, condicion) {
    // Rellenar los campos del formulario de edición
    $("#edit_idpermiso").val(id);
    $("#edit_nombrepermiso").val(nombre);
    $("#edit_condicionpermiso").val(condicion);

    // Actualizar la acción del formulario
    $("#editForm").attr("data-id", id);

    // Mostrar el formulario de edición
    $("#formEditarpermiso").collapse('show');
}


// ELIMINAR permiso SIN RECARGAR
function eliminarpermiso(id) {
    if (!confirm("¿Estás seguro de eliminar esta permiso?")) return;

    $.ajax({
        url: `/permiso/${id}`,
        type: "POST",
        data: {
            _method: "DELETE",
            _token: "{{ csrf_token() }}"
        },
        success: function(response) {
            $("#fila-" + id).remove(); // Elimina la fila de la tabla sin recargar
        },
        error: function(error) {
            console.log("Error al eliminar", error);
        }
    });
}
function cerrarFormulario() {
    $('#formAgregarpermiso').collapse('hide'); // Cierra correctamente el formulario
}
function cerrarFormularioEditar() {
    $('#formEditarpermiso').collapse('hide'); // Cierra el formulario de edición

    // Opcional: Limpiar los campos del formulario para que no queden valores cargados
    $('#edit_idpermiso').val('');
    $('#edit_nombrepermiso').val('');
    $('#edit_condicionpermiso').val('');
}


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
