<table id="tabla-derivar" class="table table-striped">
    <thead>
        <tr>
            <th>Fecha</th>
            <th>Numero CUD</th>
            <th>Víctima</th>
            <th>Abogado Actual</th>
            <th>Oficina Actual</th>
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
            <button class="btn btn-primary btn-sm" onclick="abrirModalDerivar({{ $denuncia->id }}, '{{ $denuncia->num_caso }}')">
                Derivar
            </button>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@include('denuncia.modal_derivar') <!-- ✅ AÑADE ESTO AQUÍ -->
