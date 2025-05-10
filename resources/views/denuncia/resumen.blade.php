<style>

/* Estilo general para los resúmenes */
.resumen-card {
    background-color: var(--beige);
    border-radius: 1.5rem;
    padding: 2rem;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    font-size: 1.1rem;
    color: var(--azul);
}

.resumen-card h4 {
    color: var(--azul);
    font-weight: bold;
    margin-bottom: 1.5rem;
}

.resumen-card strong {
    color: var(--naranja);
}

.resumen-card .detalle-item {
    margin-bottom: 0.75rem;
}

.resumen-card .text-muted {
    font-size: 1rem;
    color: #666;
    margin-left: 1rem;
}

.resumen-card .badge {
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

.resumen-card .text-muted {
    font-size: 0.95rem;
    color: #555;
}

.resumen-card .badge {
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
    border-radius: 20px;
}

.resumen-card + .resumen-card {
        margin-top: 1rem !important; /* o menos si quieres más compacto */
    }


</style>

<div class="row">
<h4 style="margin-left: 16px; font-size: 2rem;"> Detalles</h4>
    {{-- Involucrados --}}
    <div class="col-md-8">
        <div class="resumen-card mb-3">
            <h4>👥 Involucrados</h4>

            {{-- Víctima --}}
            <div class="d-flex align-items-start mb-4">
                <div class="icon-circle bg-warning text-white me-3">
                    <i class="material-icons">person</i>
                </div>
                <div class="w-100">
                    <strong>Víctima:</strong><br>
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-muted">Nombre: {{ $denuncia->victima->nombre }} {{ $denuncia->victima->ap_paterno }}</small><br>
                            <small class="text-muted">Documento: {{ $denuncia->victima->tipo_documento ?? 'CI' }}: {{ $denuncia->victima->num_documento ?? 'No registrado' }}</small><br>
                        </div>
                        <div class="col-md-6">
                            <small class="text-muted">Sexo: {{ $denuncia->victima->sexo }}</small><br>
                            <small class="text-muted">Edad: {{ $denuncia->victima->edad }}</small>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Familiares --}}
            @if($denuncia->victima->familiares->isEmpty())
                <div class="d-flex align-items-start mb-4">
                    <div class="icon-circle bg-secondary text-white me-3">
                        <i class="material-icons">group</i>
                    </div>
                    <div>
                        <strong>Familiares:</strong><br>
                        <span class="text-muted">No se han registrado familiares aún.</span>
                    </div>
                </div>
            @else
                @foreach($denuncia->victima->familiares as $familiar)
                    <div class="d-flex align-items-start mb-4">
                        <div class="icon-circle bg-secondary text-white me-3">
                            <i class="material-icons">group</i>
                        </div>
                        <div class="w-100">
                            <strong>Familiar:</strong><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <small class="text-muted">Nombre: {{ $familiar->nombre }} {{ $familiar->apellidos }}</small><br>
                                    <small class="text-muted">Parentesco: {{ $familiar->parentesco }}</small><br>
                                    <small class="text-muted">Sexo: {{ $familiar->sexo }}</small><br>
                                </div>
                                <div class="col-md-6">
                                    <small class="text-muted">Edad: {{ $familiar->edad }}</small><br>
                                    <small class="text-muted">Ocupación: {{ $familiar->ocupacion }}</small><br>
                                    <small class="text-muted">Observación: {{ $familiar->observacion }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

            {{-- Agresor --}}
            <div class="d-flex align-items-start mb-4">
                <div class="icon-circle bg-danger text-white me-3">
                    <i class="material-icons">person</i>
                </div>
                <div class="w-100">
                    <strong>Agresor:</strong><br>
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-muted">Nombre: {{ $denuncia->agresor->nombre }} {{ $denuncia->agresor->ap_paterno }}</small><br>
                            <small class="text-muted">Documento: {{ $denuncia->agresor->tipo_documento ?? 'CI' }}: {{ $denuncia->agresor->num_documento ?? 'No registrado' }}</small><br>
                        </div>
                        <div class="col-md-6">
                            <small class="text-muted">Sexo: {{ $denuncia->agresor->sexo }}</small><br>
                            <small class="text-muted">Edad: {{ $denuncia->agresor->edad }}</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    {{-- Botón para añadir familiar --}}
        <div class="resumen-card mb-3">
            <p><strong>Agregar Familiar</strong>
            <button class="btn btn-outline-success btn-lg px-5 w-100" onclick="mostrarFormularioFamiliarVictima({{ $denuncia->victima->id }}, {{ $denuncia->id }})">
                Añadir Familiar
            </button>
        </div>

        <div id="formulario-familiar-container" style="display: none;" class="mt-4"></div>

        <div class="resumen-card mb-3">
            <p><strong>Testimonio:</strong> {{ $denuncia->testimonio }}</p>
            <!-- Botón que abre el formulario -->
            <button class="btn btn-outline-primary btn-lg px-5 w-100" onclick="mostrarFormularioTestimonio({{ $denuncia->id }}, '{{ $denuncia->testimonio }}')">
                Editar Testimonio
            </button>

            <!-- Contenedor donde se cargará el formulario -->
            <div id="formulario-testimonio-container" class="mt-3"></div>

        </div>



        {{-- Card Historial de Acciones --}}
        <div class="resumen-card mb-3">
            <h4>📌 Historial de Acciones</h4>

            @if($denuncia->acciones->isEmpty())
                <p class="text-muted">No se han registrado acciones aún.</p>
            @else
                <div class="bg-light p-3 rounded">
                    @foreach($denuncia->acciones as $accion)
                        <p>
                            <strong>Fecha:</strong> {{ $accion->fecha }}<br>
                            <strong>Técnico:</strong> {{ $accion->tecnico }}<br>
                            <strong>Acción:</strong> {{ $accion->acciones }}
                        </p>
                    @endforeach
                </div>
            @endif

            <div class="text-end mt-3">
                <button id="btn-ver-acciones" data-id="{{ $denuncia->id }}" class="btn btn-warning">
                    <i class="fas fa-tasks"></i> Agregar Acciones
                </button>
            </div>

            <div id="contenedor-acciones" style="display:none;"></div>
        </div>

        {{--Actualizaciones --}}
        <div class="resumen-card mb-3">
            <h4>Editar Detalles</h4>
                <!-- Botón para abrir el formulario de editar estado -->
                <button class="btn btn-outline-primary btn-lg px-5 w-100" onclick="mostrarFormularioEstado({{ $denuncia->id }}, '{{ $denuncia->estado }}')">
                    Editar Estado
                </button>

                <!-- Contenedor donde se cargará el formulario -->
                <div id="formulario-estado-container" style="display:none; margin-top: 20px;"></div>  

                <button class="btn btn-outline-primary btn-lg px-5 w-100" onclick="mostrarFormularioDelitos({{ $denuncia->id }}, '{{ $denuncia->delitos_penales }}')">
                    Editar Delitos
                </button>

                <div id="formulario-delitos-container" class="mt-2"></div>

                <button class="btn btn-outline-primary btn-lg px-5 w-100" onclick="mostrarFormularioViolencias({{ $denuncia->id }}, 
                '{{ $denuncia->violencia_economica }}', 
                '{{ $denuncia->violencia_psicologica }}', 
                '{{ $denuncia->violencia_sexual }}', 
                '{{ $denuncia->violencia_fisica }}', 
                '{{ $denuncia->violencia_feminicida }}')">
                
                    Editar Violencias
                </button>


            <div id="formulario-violencias-container"></div>




        </div>
    </div>

    {{-- Detalles del Caso --}}
    <div class="col-md-4">
        <div class="resumen-card bg-light border">
            <!--<h4>📄 Detalles del Caso</h4></div>-->
            <h4>Detalles</h4>
                <hr>
                <p><strong>Código SLIM:</strong> {{ $denuncia->cod_slim }}</p>
                <p><strong>Número CUD:</strong> {{ $denuncia->num_caso }}</p>
                <p><strong>Fecha:</strong> {{ $denuncia->fecha }}</p>
                <p><strong>Estado:</strong> {{ $denuncia->estado }}</p>
                <p><strong>Emblemático:</strong> {{ $denuncia->emblematico }}</p>
                <p><strong>Numero de Juzgado:</strong> {{ $denuncia->num_juzgado }}</p>
                <p><strong>Completado:</strong> {{ $denuncia->provisional ? 'SI' : 'NO' }}</p>

                <p><strong>Encargado de Apertura:</strong> {{ $denuncia->user->nombre ?? 'N/A' }}</p>


                <button class="btn btn-outline-success btn-lg px-5 w-100" onclick="mostrarFormularioCompletar({{ $denuncia->id }})">
                    ✅ Marcar como Completa
                </button>
                <div id="formulario-completar-container" style="display:none; margin-top: 20px;"></div>
           

        </div>
        
    </div>


    {{-- Complementar datos del agresor --}}
    <div class="card p-4 mb-4" style="width: 95%; margin: auto;">
        <h5 class="mb-3">Datos del Agresor</h5>
        <div class="text-end">
            <button class="btn btn-outline-primary btn-lg px-5 w-100" onclick="mostrarFormularioEditarAgresor({{ $denuncia->agresor->id }}, {{ $denuncia->id }})">
                Complementar Datos del Agresor
            </button>
        </div>

        <div id="formulario-agresor-container" style="display: none;" class="mt-4"></div>
        <input type="hidden" id="denuncia-id-global" value="{{ $denuncia->id }}">
    </div>


    {{-- Complementar datos de la víctima --}}
<div class="card p-4 mb-4" style="width: 95%; margin: auto;">
    <h5 class="mb-3">Datos de la Víctima</h5>
    <div class="text-end">
        <button class="btn btn-outline-primary btn-lg px-5 w-100" onclick="mostrarFormularioEditarVictima({{ $denuncia->victima->id }}, {{ $denuncia->id }})">
            Complementar Datos de la Víctima
        </button>
    </div>

    <div id="formulario-victima-container" style="display: none;" class="mt-4"></div>
</div>




</div>



