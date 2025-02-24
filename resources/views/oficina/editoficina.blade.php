<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Oficina</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">
    <h2 class="text-white">Editar Oficina</h2>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/oficina' . $oficina->idoficina) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombreoficina" value="{{ $oficina->nombreoficina }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Teléfono</label>
                    <input type="text" class="form-control" name="telefonooficina" value="{{ $oficina->telefonooficina }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipo</label>
                    <input type="number" class="form-control" name="idtipo_oficina" value="{{ $oficina->idtipo_oficina }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Condicion</label>
                    <input type="text" class="form-control" name="condicionoficina" value="{{ $oficina->condicionoficina }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="direccionoficina" value="{{ $oficina->direccionoficina }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ url('/oficina') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
