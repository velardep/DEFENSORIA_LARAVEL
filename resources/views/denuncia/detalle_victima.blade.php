<style>

/* Estilo general para los resúmenes */
.detalle-card {
    background-color: var(--beige);
    border-radius: 1.5rem;
    padding: 2rem;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    font-size: 1.1rem;
    color: var(--azul);
}

.detalle-card h4 {
    color: var(--azul);
    font-weight: bold;
    margin-bottom: 1.5rem;
}

.detalle-card strong {
    color: var(--naranja);
}

.detalle-card .detalle-item {
    margin-bottom: 0.75rem;
}

.detalle-card .text-muted {
    font-size: 1rem;
    color: #666;
    margin-left: 1rem;
}

.detalle-card .badge {
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
    border-radius: 20px;
}
.icon-circle {
    width: 50px;
    height: 50px;
    min-width: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 26px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}

.bg-warning {
    background-color: #fbc02d !important; /* amarillo suave */
}

.bg-danger {
    background-color: #e53935 !important; /* rojo suave */
}

.detalle-card .text-muted {
    font-size: 0.95rem;
    color: #555;
}

.detalle-card .badge {
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
    border-radius: 20px;
}

.detalle-card + .detalle-card {
        margin-top: 1rem !important; /* o menos si quieres más compacto */
    }


</style>

<div class="row">
<h4 style="margin-left: 16px; font-size: 2rem;"> Detalles</h4>
    <div class="col-md-8">
        <div class="detalle-card mb-3">
            <div class="detalle-card mb-3">
                <h4>👤 Datos de la Víctima</h4>

                <div class="d-flex align-items-start mb-4">
                    <div class="icon-circle bg-warning text-white me-3">
                        <i class="material-icons">person</i>
                    </div>
                    <div>
                        <strong>Nombre:</strong><br>
                        <span class="text-muted">{{ $victima->nombre }} {{ $victima->ap_paterno }}</span><br>
                        <small class="text-muted">{{ $victima->tipo_documento ?? 'CI' }}: {{ $victima->num_documento ?? 'No registrado' }}</small><br>
                        <small class="text-muted">Sexo: {{ $victima->sexo }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


