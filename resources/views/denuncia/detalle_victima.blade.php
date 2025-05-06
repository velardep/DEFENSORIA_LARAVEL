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
    <h4 style="margin-left: 16px; font-size: 2rem;">Detalles</h4>

    <!-- Columna izquierda: Dos cards grandes -->
    <div class="col-md-8">
        <!-- Card 1: Datos de la Víctima -->
        <div class="detalle-card mb-3">
            <h4>👤 Datos de la Víctima</h4>
            <div class="d-flex align-items-start mb-4">
                <div class="icon-circle bg-warning text-white me-3">
                    <i class="material-icons">person</i>
                </div>
                <div>
                    <strong>Nombre Completo:</strong><br>
                    <span class="text-muted">{{ $victima->nombre }} {{ $victima->ap_paterno }} {{ $victima->ap_materno }}</span><br>

                    <strong>Documento:</strong><br>
                    <small class="text-muted">{{ $victima->tipo_documento ?? 'CI' }}: {{ $victima->num_documento ?? 'No registrado' }} ({{ $victima->expedido ?? '-' }})</small><br>

                    <strong>Sexo:</strong><br>
                    <small class="text-muted">{{ $victima->sexo ?? 'No registrado' }}</small><br>

                    <strong>Fecha de Nacimiento:</strong><br>
                    <small class="text-muted">{{ $victima->fecha_nacimiento ?? 'No registrada' }}</small><br>

                    <strong>Edad:</strong><br>
                    <small class="text-muted">{{ $victima->edad ?? 'No registrada' }} años</small><br>
                </div>
            </div>
        </div>

        <!-- Card 2: Datos Adicionales -->
        <div class="detalle-card mb-3">
            <h4>📋 Datos Adicionales</h4>
            <div class="d-flex align-items-start mb-2">
                <div class="icon-circle bg-info text-white me-3">
                    <i class="material-icons">info</i>
                </div>
                <div>
                    <strong>Residencia Habitual:</strong><br>
                    <small class="text-muted">{{ $victima->residencia_habitual }} {{ $victima->especifique_residencia ? '(' . $victima->especifique_residencia . ')' : '' }}</small><br>

                    <strong>Estado Civil:</strong><br>
                    <small class="text-muted">{{ $victima->estado_civil ?? 'No registrado' }}</small><br>

                    <strong>Relación con el Agresor:</strong><br>
                    <small class="text-muted">{{ $victima->rel_victima_agresor ?? 'No registrado' }}</small><br>

                    <strong>Hijos:</strong><br>
                    <small class="text-muted">{{ $victima->hijos ?? 'No registrado' }}</small><br>

                    <strong>Logro Educativo:</strong><br>
                    <small class="text-muted">{{ $victima->logro_educativo ?? 'No registrado' }}</small><br>

                    <strong>Actividad:</strong><br>
                    <small class="text-muted">{{ $victima->actividad ?? 'No registrada' }}</small><br>

                    @if($victima->actividad == 'Trabaja')
                        <strong>Ingreso:</strong><br>
                        <small class="text-muted">{{ $victima->ingreso ?? '-' }} 
                        @if($victima->monto) 
                            (Bs {{ $victima->monto }})
                        @endif
                        </small><br>
                    @endif

                    <strong>Idioma:</strong><br>
                    <small class="text-muted">{{ $victima->idioma }} {{ $victima->especifique_idioma ? '(' . $victima->especifique_idioma . ')' : '' }}</small><br>

                    <strong>Celular:</strong><br>
                    <small class="text-muted">{{ $victima->celular ?? 'No registrado' }}</small><br>
                </div>
            </div>
        </div>
    </div>

    <!-- Columna derecha: Card angosta para domicilio -->
    <div class="col-md-4">
        <div class="detalle-card mb-3" >
            <h4>🏠 Domicilio de la Víctima</h4>
            <div class="d-flex align-items-start mb-2">
                <div class="icon-circle bg-danger text-white me-3">
                    <i class="material-icons">home</i>
                </div>
                <div>
                    <strong>Zona/Barrio:</strong><br>
                    <small class="text-muted">{{ $victima->zona_barrio ?? '-' }}</small><br>

                    <strong>Avenida/Calle:</strong><br>
                    <small class="text-muted">{{ $victima->avenida_calle ?? '-' }}</small><br>

                    <strong>Edificio:</strong><br>
                    <small class="text-muted">{{ $victima->nom_edificio ?? '-' }}</small><br>

                    <strong>Número de Vivienda:</strong><br>
                    <small class="text-muted">{{ $victima->num_vivienda ?? '-' }}</small><br>

                    <strong>Piso/Departamento:</strong><br>
                    <small class="text-muted">{{ $victima->num_piso_departamento ?? '-' }}</small><br>

                    <strong>Teléfono del Domicilio:</strong><br>
                    <small class="text-muted">{{ $victima->telefono_domicilio ?? '-' }}</small><br>

                    <strong>Ubicación:</strong><br>
                    <small class="text-muted">{{ $victima->lugar_domicilio }} {{ $victima->especifique ? '(' . $victima->especifique . ')' : '' }}</small><br>
                </div>
            </div>
        </div>
    </div>
</div>




