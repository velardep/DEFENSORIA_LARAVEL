<table id="tabla-asignar" class="table table-striped">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Numero CUD</th>
            <th>Víctima</th>
            <th>Abogado Creador</th>
            <th>Oficina</th>
            <th>Fecha(s) Asignación</th>
            <th>Técnicos Asignados</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($denuncias as $denuncia)
        <tr>
            <td>{{ $denuncia->fecha }}</td>
            <td>{{ $denuncia->num_caso }}</td>
            <td>{{ $denuncia->victima->nombre ?? '-' }}</td>
            <td>{{ $denuncia->user->nombre ?? '-' }}</td>
            <td>{{ $denuncia->user->oficina->nombre ?? '-' }}</td>
            <td>
                @foreach($denuncia->asignaciones as $asig)
                    <div>{{ $asig->fecha }}</div>
                @endforeach
            </td>
            <td>
                @foreach($denuncia->asignaciones as $asig)
                    <div>{{ $asig->user->nombre }}</div>
                @endforeach
            </td>
            <td>
                <button class="btn btn-success btn-sm" onclick="abrirModalAsignar({{ $denuncia->id }}, '{{ $denuncia->num_caso }}', {{ $denuncia->oficina_id }})">Asignar</button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>