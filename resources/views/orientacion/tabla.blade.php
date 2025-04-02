
<table class="table table-striped table-hover tabla-denuncias">

    <thead>
        <tr>
            <th>Num Caso</th>
            <th>Fecha Ingreso</th>
            <th>Orientacion</th>
            <th>Nombre Persona</th>
            <th>Edad</th>
            <th>Resultado Entrevista</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orientaciones as $orientacion)
        <tr>
            <td>{{ $orientacion->num_caso }}</td>
            <td>{{ $orientacion->fecha_ingreso }}</td>
            <td>{{ $orientacion->orientacion }}</td>
            <td>{{ $orientacion->nombre_persona }}</td>
            <td>{{ $orientacion->edad }}</td>
            <td>{{ $orientacion->resutado_entrevista }}</td>
            <td>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-ver-orientacion" data-id="{{ $orientacion->id }}">
                    Ver Orientacion
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $orientaciones->withQueryString()->links() !!}
