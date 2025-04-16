<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Historial de Acciones</h5>
        <button class="btn btn-success btn-sm" onclick="mostrarFormularioAccion({{ $id }})">Agregar Acción</button>
    </div>
    <div class="card-body">
        @forelse ($acciones as $accion)
            <div class="mb-3 border-bottom pb-2">
                <strong>{{ $accion->fecha }}</strong> - {{ $accion->tecnico }}<br>
                {{ $accion->acciones }}
            </div>
        @empty
            <p>No hay acciones registradas.</p>
        @endforelse

        <div class="text-end mt-4">
            <button class="btn btn-secondary" onclick="regresarATabla()">Confirmar</button>
        </div>
    </div>
</div>
