<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grupos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <!-- Cargamos jQuery una sola vez -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-dark text-white">
  <div class="container my-4">
    <h2 class="mb-4">Grupos</h2>
    
    <!-- Botón para mostrar formulario de agregar grupo -->
    <button class="btn btn-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#formAgregarGroup">
      <i class="fa fa-plus"></i> Agregar Grupo
    </button>

    <!-- Contenedor del formulario para agregar grupo -->
    <div class="collapse" id="formAgregarGroup">
      <div class="card">
        <div class="card-body">
          <h4>Agregar Grupo</h4>
          <!-- Formulario con ID distinto -->
          <form id="formAgregarGrupoForm" method="POST" action="javascript:void(0);">
            @csrf
            <div class="mb-3">
              <label for="groupName" class="form-label">Nombre del Grupo</label>
              <input type="text" name="name" id="groupName" class="form-control" required>
            </div>
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-secondary me-2" onclick="cerrarFormularioAgregar()">Cancelar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Formulario para editar grupo -->
    <div class="collapse mt-3" id="formEditarGroup">
      <div class="card">
        <div class="card-body">
          <h4>Editar Grupo</h4>
          <form id="formEditarGrupo" method="POST" action="javascript:void(0);">
            @csrf
            @method('PUT')
            <input type="hidden" id="editGroupId">
            <div class="mb-3">
              <label for="editGroupName" class="form-label">Nombre del Grupo</label>
              <input type="text" name="name" id="editGroupName" class="form-control" required>
            </div>
            <div class="d-flex justify-content-end">
              <button type="button" class="btn btn-secondary me-2" onclick="cerrarFormularioEditar()">Cancelar</button>
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Tabla de grupos -->
    <div class="table-responsive mt-4">
      <table class="table table-striped" id="tablaGrupos">
        <thead class="bg-light text-black">
          <tr>
            <th>Opciones</th>
            <th>ID</th>
            <th>Nombre</th>
          </tr>
        </thead>
        <tbody id="tbodyGrupos">
          @foreach($grupos as $grupo)
            <tr id="fila-{{ $grupo->id }}">
              <td>
                <button class="btn btn-outline-primary btn-sm me-2" onclick="mostrarFormularioEditar({{ $grupo->id }}, '{{ $grupo->name }}')">
                  <i class="fa fa-pencil"></i> Editar
                </button>
                <button class="btn btn-outline-danger btn-sm" onclick="eliminarGrupo({{ $grupo->id }})">
                  <i class="fa fa-trash"></i> Eliminar
                </button>
              </td>
              <td>{{ $grupo->id }}</td>
              <td>{{ $grupo->name }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  <!-- Scripts: Bootstrap y código AJAX -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function(){
      // Evento del formulario para agregar grupo
      $("#formAgregarGrupoForm").off("submit").on("submit", function(e){
        e.preventDefault();
        let formData = new FormData(this);
        $.ajax({
          url: "/auth_group",
          type: "POST",
          data: formData,
          processData: false,
          contentType: false,
          success: function(response){
            $("#formAgregarGroup").collapse('hide');
            $("#formAgregarGrupoForm")[0].reset();
            cargarGrupos();
          },
          error: function(error){
            console.log("Error al agregar grupo:", error);
          }
        });
      });

      // Evento del formulario para editar grupo
      $("#formEditarGrupo").off("submit").on("submit", function(e){
        e.preventDefault();
        let id = $("#editGroupId").val();
        let formData = $(this).serialize();
        $.ajax({
          url: `/auth_group/${id}`,
          type: "PUT",
          data: formData,
          success: function(response){
            $("#formEditarGroup").collapse('hide');
            $("#formEditarGrupo")[0].reset();
            cargarGrupos();
          },
          error: function(error){
            console.log("Error al actualizar grupo:", error);
          }
        });
      });
    });

    // Función para cargar grupos vía AJAX
    function cargarGrupos(){
      $.ajax({
        url: "/auth_group",
        type: "GET",
        cache: false,
        success: function(response){
          // Extraer solo el contenido del <tbody> del response
          var newRows = $(response).find("#tbodyGrupos").html();
          $("#tbodyGrupos").html(newRows);
        },
        error: function(error){
          console.log("Error al cargar grupos:", error);
        }
      });
    }

    // Función para mostrar el formulario de edición
    function mostrarFormularioEditar(id, name){
      $("#editGroupId").val(id);
      $("#editGroupName").val(name);
      $("#formEditarGroup").collapse('show');
    }

    // Función para eliminar grupo
    function eliminarGrupo(id){
      if(!confirm("¿Estás seguro de eliminar este grupo?")) return;
      $.ajax({
        url: `/auth_group/${id}`,
        type: "POST",
        data: {
          _method: "DELETE",
          _token: "{{ csrf_token() }}"
        },
        success: function(response){
          $("#fila-" + id).remove();
        },
        error: function(error){
          console.log("Error al eliminar grupo:", error);
        }
      });
    }

    // Funciones para cerrar formularios
    function cerrarFormularioAgregar(){
      $("#formAgregarGroup").collapse('hide');
      $("#formAgregarGrupoForm")[0].reset();
    }
    function cerrarFormularioEditar(){
      $("#formEditarGroup").collapse('hide');
      $("#formEditarGrupo")[0].reset();
    }
    
    // Cargar grupos al iniciar la página
    $(document).ready(function(){
      cargarGrupos();
    });
  </script>
</body>
</html>
