<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Permiso</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">
    <h2 class="text-white">Editar Permiso</h2>
    
    <div class="card">
        <div class="card-body">
            <form action="{{ url('/permiso' . $permiso->idpermiso) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombrepermiso" value="{{ $permiso->nombrepermiso }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Condicion</label>
                    <input type="text" class="form-control" name="condicionpermiso" value="{{ $permiso->condicionpermiso }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
                <a href="{{ url('/permiso') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
