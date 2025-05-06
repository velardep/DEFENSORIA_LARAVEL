<div class="card p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Usuarios</h4>
        <button class="btn btn-primary" onclick="cargarFormularioCrearUser()">Crear Nuevo Usuario</button>
    </div>

    <div style="all: initial; font-family: Arial, sans-serif;" class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Oficina</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user->nombre }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role->nombre ?? '-' }}</td>
                        <td>{{ $user->oficina->nombre ?? '-' }}</td>

                        <!---<td>{{ $user->rol_id }}</td>
                        <td>{{ $user->oficina_id }}</td>-->
                        <td>
                            <button class="btn btn-sm btn-success" onclick="cargarFormularioEditarUser({{ $user->id }})">Editar</button>
                            <button class="btn btn-sm btn-primary" onclick="mostrarDetalleUser({{ $user->id }})">Ver Detalles</button>
                            <form id="form-eliminar-user" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
