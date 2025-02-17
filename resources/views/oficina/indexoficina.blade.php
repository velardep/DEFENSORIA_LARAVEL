<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Oficinas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Style css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    
</head>

<body class="bg-dark text-white">
    

<div class="container mt-5">
    <h2 class="text-black">Listado de Oficinas</h2>

    <!-- BOTÓN PARA AGREGAR OFICINA -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#formAgregarOficina">
            <i class="fa fa-plus"></i> Agregar Oficina
        </button>
    </div>

    <!-- FORMULARIO PARA AGREGAR OFICINA -->
    <div class="collapse" id="formAgregarOficina">
        <div class="card card-body text-black">
            <h4>Agregar Oficina</h4>
            <form id="formAgregar">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombreoficina" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name="telefonooficina" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Tipo</label>
                        <input type="number" class="form-control" name="idtipo_oficina" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="form-label">Condición</label>
                        <input type="text" class="form-control" name="condicionoficina" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="direccionoficina" required>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="button" class="btn btn-secondary me-2" onclick="cerrarFormulario()">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>


    <!-- FORMULARIO PARA EDITAR OFICINA -->
    <div class="collapse mt-3" id="formEditarOficina">
        <div class="card card-body text-black">
            <h4>Editar Oficina</h4>
            <form id="editForm">
                @csrf
                @method('PUT')
                <input type="hidden" name="idoficina" id="edit_idoficina">
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombreoficina" id="edit_nombreoficina" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Teléfono</label>
                        <input type="text" class="form-control" name="telefonooficina" id="edit_telefonooficina" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Tipo</label>
                        <input type="number" class="form-control" name="idtipo_oficina" id="edit_idtipo_oficina" required>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="form-label">Condición</label>
                        <input type="text" class="form-control" name="condicionoficina" id="edit_condicionoficina" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Dirección</label>
                        <input type="text" class="form-control" name="direccionoficina" id="edit_direccionoficina" required>
                    </div>
                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="button" class="btn btn-secondary me-2" onclick="cerrarFormularioEditar()">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>




   <!-- TABLA DE OFICINAS -->
<div class="card mt-3 p-3 shadow-lg rounded bg-white" style="width: 95%; margin: auto;">
    <div class="card-body">
        <h4 class="text-center text-dark fw-bold">Listado de Oficinas</h4>
        <div class="table-responsive" style="max-height: 80vh; overflow-y: auto;">
            <table class="table table-hover table-bordered rounded text-dark" id="tablaOficinas">
                <thead class="bg-danger text-white text-center">
                    <tr>
                        <th class="p-3">Opciones</th>
                        <th class="p-3">ID</th>
                        <th class="p-3">Nombre</th>
                        <th class="p-3">Teléfono</th>
                        <th class="p-3">Tipo</th>
                        <th class="p-3">Condición</th>
                        <th class="p-3">Dirección</th>
                    </tr>
                </thead>
                <tbody id="tbodyOficinas">
                    @foreach($oficinas as $o)
                        <tr id="fila-{{ $o->idoficina }}">
                            <td class="text-center">
                                <button class="btn btn-sm btn-outline-primary me-1" 
                                    onclick="mostrarFormularioEditar(
                                        {{ $o->idoficina }}, 
                                        '{{ $o->nombreoficina }}', 
                                        '{{ $o->telefonooficina }}', 
                                        {{ $o->idtipo_oficina }}, 
                                        '{{ $o->condicionoficina }}', 
                                        '{{ $o->direccionoficina }}'
                                    )">
                                    <i class="fa fa-pencil"></i> Editar
                                </button>
                                <button class="btn btn-sm btn-outline-danger" onclick="eliminarOficina({{ $o->idoficina }})">
                                    <i class="fa fa-trash"></i> Eliminar
                                </button>
                            </td>
                            <td class="text-center fw-bold">{{ $o->idoficina }}</td>
                            <td class="text-dark">{{ $o->nombreoficina }}</td>
                            <td class="text-dark">{{ $o->telefonooficina }}</td>
                            <td class="text-center text-dark">{{ $o->idtipo_oficina }}</td>
                            <td class="text-center text-dark">{{ $o->condicionoficina }}</td>
                            <td class="text-dark">{{ $o->direccionoficina }}</td>
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
    // AGREGAR OFICINA
    $("#formAgregar").submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this); // Evitar que los datos se pasen en la URL

        $.ajax({
            url: "{{ url('/oficina') }}",
            type: "POST",
            data: formData,
            processData: false, // No procesar los datos en la URL
            contentType: false, // Usar el tipo de contenido correcto
            success: function(response) {
                location.reload(); // Recarga la página para mostrar la tabla actualizada
            },
            error: function(error) {
                console.log("Error al guardar oficina", error);
            }
        });
    });

    // EDITAR OFICINA
    $("#editForm").submit(function(e) {
        e.preventDefault();
        let id = $("#editForm").attr("data-id");
        let formData = new FormData(this); // Evitar que los datos se pasen en la URL

        $.ajax({
            url: `/oficina/${id}`,
            type: "POST",
            data: formData,
            processData: false, // No procesar los datos en la URL
            contentType: false, // Usar el tipo de contenido correcto
            success: function(response) {
                location.reload(); // Recargar la tabla sin salir de la página
            },
            error: function(error) {
                console.log("Error al actualizar oficina", error);
            }
        });
    });
});

function mostrarFormularioEditar(id, nombre, telefono, tipo, condicion, direccion) {
    // Rellenar los campos del formulario de edición
    $("#edit_idoficina").val(id);
    $("#edit_nombreoficina").val(nombre);
    $("#edit_telefonooficina").val(telefono);
    $("#edit_idtipo_oficina").val(tipo);
    $("#edit_condicionoficina").val(condicion);
    $("#edit_direccionoficina").val(direccion);

    // Actualizar la acción del formulario
    $("#editForm").attr("data-id", id);

    // Mostrar el formulario de edición
    $("#formEditarOficina").collapse('show');
}


// ELIMINAR OFICINA SIN RECARGAR
function eliminarOficina(id) {
    if (!confirm("¿Estás seguro de eliminar esta oficina?")) return;

    $.ajax({
        url: `/oficina/${id}`,
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
    $('#formAgregarOficina').collapse('hide'); // Cierra correctamente el formulario
}
function cerrarFormularioEditar() {
    $('#formEditarOficina').collapse('hide'); // Cierra el formulario de edición

    // Opcional: Limpiar los campos del formulario para que no queden valores cargados
    $('#edit_idoficina').val('');
    $('#edit_nombreoficina').val('');
    $('#edit_telefonooficina').val('');
    $('#edit_idtipo_oficina').val('');
    $('#edit_condicionoficina').val('');
    $('#edit_direccionoficina').val('');
}


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
