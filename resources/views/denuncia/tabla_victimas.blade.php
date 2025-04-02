<style>
    .tabla-victimas-container {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .tabla-victimas {
        width: 90%;
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        border-collapse: collapse;
    }

    .tabla-victimas thead {
        background-color: #f0f2f5;
        color: #444;
        font-weight: bold;
    }

    .tabla-victimas th,
    .tabla-victimas td {
        padding: 12px 15px;
        text-align: left;
        vertical-align: middle;
        border-bottom: 1px solid #ccc; /* líneas más visibles */
        white-space: nowrap;
    }

    .tabla-victimas tbody tr:hover {
        background-color: #f4f7fa;
    }

    .tabla-victimas td {
        color: #333;
        font-size: 14px;
    }

    .tabla-victimas .text-center {
        text-align: center;
        color: #999;
    }
</style>
<h4 style="margin-left: 16px; font-size: 2rem;"> Victimas</h4>

<div class="tabla-victimas-container">
    <table class="tabla-victimas">
        <thead>
            <tr>
                <th >Nombre</th>
				<th >Ap Paterno</th>
				<th >Ap Materno</th>
				<th >Sexo</th>
				<th >Fecha Nacimiento</th>
				<th >Edad</th>
                <th> Denuncia</th>

                <th> Acciones</th>
		
            </tr>
        </thead>
        <tbody>
            @forelse ($victimas as $victima)
            <tr>
                <td >{{ $victima->nombre }}</td>
				<td >{{ $victima->ap_paterno }}</td>
				<td >{{ $victima->ap_materno }}</td>
			    <td >{{ $victima->sexo }}</td>
				<td >{{ $victima->fecha_nacimiento }}</td>
				<td >{{ $victima->edad }}</td>
                <td >{{ $victima->denuncia ? $victima->denuncia->cod_slim : '—' }}</td>

                <td>
                    <button type="button" class="btn btn-info btn-ver-detalle-victima" data-id="{{ $victima->id }}">
                        <i class="fas fa-eye"></i> Detalles
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
