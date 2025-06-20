<style>
    .tabla-denuncias-container {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .tabla-denuncias {
        width: 90%;
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        border-collapse: collapse;
    }

    .tabla-denuncias thead {
        background-color: #f0f2f5;
        color: #444;
        font-weight: bold;
    }

    .tabla-denuncias th,
    .tabla-denuncias td {
        padding: 12px 15px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #ccc; /* líneas más visibles */
        white-space: nowrap;
    }

    .tabla-denuncias tbody tr:hover {
        background-color: #f4f7fa;
    }

    .tabla-denuncias td {
        color: #333;
        font-size: 14px;
    }

    .tabla-denuncias .text-center {
        text-align: center;
        color: #999;
    }
</style>
<h4 style="margin-left: 16px; font-size: 2rem;"> Casos Todo</h4>

<div class="tabla-denuncias-admin">
    <table class="tabla-denuncias">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Numero CUD</th>
                <th>Cod Slim</th>
                <th>Agresor</th>
                <th>Víctima</th>
                <th>Estado</th>
                <th>Completa</th>
                <th>Emplematico</th>

                <th>Acciones</th>
                <th>Reporte</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($denuncias as $denuncia)
            <tr>
                <td>{{ $denuncia->fecha }}</td>
                <td>{{ $denuncia->num_caso }}</td>
                <td>{{ $denuncia->cod_slim }}</td>
                <td>{{ $denuncia->agresor->nombre ?? 'N/A' }}</td>
                <td>{{ $denuncia->victima->nombre ?? 'N/A' }}</td>
                <td>{{ $denuncia->estado }}</td>
                <td>{{ $denuncia->provisional ? 'SI' : 'NO' }}</td>
                <td>{{ $denuncia->emblematico }}</td>


                <td>
                    <button type="button" class="btn btn-primary btn-ver-detalles" data-id="{{ $denuncia->id }}">
                        <i class="fas fa-search"></i> Ver Detalles
                    </button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger btn-eliminar-denuncia" data-id="{{ $denuncia->id }}">
                        <i class="fas fa-trash"></i> Eliminar
                    </button>
                </td>


            </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">No se encontraron resultados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
