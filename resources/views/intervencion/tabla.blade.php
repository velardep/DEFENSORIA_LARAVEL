
<table class="table table-striped table-hover tabla-denuncias">

    <thead>
        <tr>
            <th>Numero de Ficha</th>
            <th>Equipo</th>
            <th>Num TAR</th>
            <th>Nombre Usuaria</th>
           
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($intervenciones as $intervencion)
        <tr>
            <td>{{ $intervencion->num_ficha }}</td>
            <td>{{ $intervencion->num_equipo }}</td>
          
            <td>{{ $intervencion->num_tar }}</td>
            <td>{{ $intervencion->nombre_usuaria }}</td>
            
            <td>
                <a href="javascript:void(0);" class="btn btn-sm btn-primary btn-ver-intervencion" data-id="{{ $intervencion->id }}">
                    Ver
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!! $intervenciones->withQueryString()->links() !!}
