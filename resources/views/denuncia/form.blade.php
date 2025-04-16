<!--<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="text" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $denuncia?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="departamento" class="form-label">{{ __('Departamento') }}</label>
            <input type="text" name="departamento" class="form-control @error('departamento') is-invalid @enderror" value="{{ old('departamento', $denuncia?->departamento) }}" id="departamento" placeholder="Departamento">
            {!! $errors->first('departamento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_servicio" class="form-label">{{ __('Nombre Servicio') }}</label>
            <input type="text" name="nombre_servicio" class="form-control @error('nombre_servicio') is-invalid @enderror" value="{{ old('nombre_servicio', $denuncia?->nombre_servicio) }}" id="nombre_servicio" placeholder="Nombre Servicio">
            {!! $errors->first('nombre_servicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="municipio" class="form-label">{{ __('Municipio') }}</label>
            <input type="text" name="municipio" class="form-control @error('municipio') is-invalid @enderror" value="{{ old('municipio', $denuncia?->municipio) }}" id="municipio" placeholder="Municipio">
            {!! $errors->first('municipio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_caso" class="form-label">{{ __('Num Caso') }}</label>
            <input type="text" name="num_caso" class="form-control @error('num_caso') is-invalid @enderror" value="{{ old('num_caso', $denuncia?->num_caso) }}" id="num_caso" placeholder="Num Caso">
            {!! $errors->first('num_caso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cod_slim" class="form-label">{{ __('Cod Slim') }}</label>
            <input type="text" name="cod_slim" class="form-control @error('cod_slim') is-invalid @enderror" value="{{ old('cod_slim', $denuncia?->cod_slim) }}" id="cod_slim" placeholder="Cod Slim">
            {!! $errors->first('cod_slim', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

<div class="form-group">
    <label for="id_agresor">Agresor</label>
    <select name="id_agresor" class="form-control" required>
        <option value="">Seleccione un agresor</option>
        @foreach ($agresores as $agresor)
            <option value="{{ $agresor->id }}">{{ $agresor->nombre }} {{ $agresor->ap_paterno }} {{ $agresor->ap_materno }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="id_victima">Víctima</label>
    <select name="id_victima" class="form-control" required>
        <option value="">Seleccione una víctima</option>
        @foreach ($victimas as $victima)
            <option value="{{ $victima->id }}">{{ $victima->nombre }} {{ $victima->ap_paterno }} {{ $victima->ap_materno }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="id_tipo_violencia">Tipo de Violencia</label>
    <select name="id_tipo_violencia" class="form-control" required>
        <option value="">Seleccione un tipo</option>
        @foreach ($tiposViolencia as $tipo)
            <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
        @endforeach
    </select>
</div>

        <div class="form-group mb-2 mb20">
            <label for="condicion" class="form-label">{{ __('Condicion') }}</label>
            <input type="text" name="condicion" class="form-control @error('condicion') is-invalid @enderror" value="{{ old('condicion', $denuncia?->condicion) }}" id="condicion" placeholder="Condicion">
            {!! $errors->first('condicion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div> -->

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">


<style>
    body {
        font-family: cursive;
    }
    :root {
        --azul: #003049;
        --rojo:rgb(255, 72, 0);
        --naranja:rgb(0, 0, 0);
        --amarillo:rgb(31, 153, 190);
        --beige:rgb(248, 248, 248);
    }

    .card-form {
        background-color: var(--beige);
        border-radius: 1.5rem;
        padding: 3rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.51);
    }

    .card-form h5 {
        color: var(--azul);
        font-weight: bold;
    }

    .input-float {
        position: relative;
        margin-bottom: 2rem;
    }

    .input-float label {
        position: absolute;
        top: -0.6rem;
        left: 2.6rem;
        background: var(--beige);
        padding: 0 0.4rem;
        font-size: 0.9rem;
        color: var(--azul);
        z-index: 2;
    }

    .input-float .material-icons {
        position: absolute;
        top: 50%;
        left: 0.75rem;
        transform: translateY(-50%);
        font-size: 20px;
        color: var(--naranja);
    }

    .input-float input,
    .input-float select {
        width: 100%;
        padding: 0.6rem 0.6rem 0.6rem 2.6rem;
        border: none;
        border-bottom: 2px solid var(--amarillo);
        border-radius: 0;
        background: transparent;
        font-size: 1rem;
        color: var(--azul);
        transition: all 0.3s ease;
    }

    .input-float input:focus,
    .input-float select:focus {
        outline: none;
        border-bottom: 2px solid var(--rojo);
        box-shadow: 0 2px 10px rgba(246, 140, 45, 0.15);
    }

    .form-select-custom {
        appearance: none;
    }

    .btn-submit {
        padding: 0.75rem 2rem;
        font-size: 1rem;
        border-radius: 40px;
        background-color: var(--azul);
        border: none;
        color: white;
        transition: background 0.3s ease;
    }

    .btn-submit:hover {
        background-color: var(--rojo);
    }

    .select2-container--default .select2-selection--multiple {
        background-color: transparent;
        border: none;
        border-bottom: 2px solid var(--amarillo);
        border-radius: 0;
        padding-left: 2.6rem;
        min-height: 40px;
        font-family: cursive;
        font-size: 1rem;
        color: var(--azul);
    }

    .select2-container--default .select2-selection--multiple:focus,
    .select2-container--default .select2-selection--multiple:active {
        border-bottom: 2px solid var(--rojo);
        outline: none;
        box-shadow: 0 2px 10px rgba(246, 140, 45, 0.15);
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: var(--azul);
        border: none;
        color: white;
        padding: 0.2rem 0.5rem;
        margin-top: 6px;
        font-size: 0.85rem;
        border-radius: 15px;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
        color: white;
        margin-right: 5px;
    }

    /* Elimina margen extra */
    .select2-container {
        width: 100% !important;
    }
</style>


<div class="card card-form mb-4">
    <h5 class="mb-4">📝 Datos de la denuncia</h5>
    <div class="row">

        {{-- Fecha --}}
        <div class="col-md-4 input-float">
            <i class="material-icons">event</i>
            <label for="fecha">Fecha *</label>
            <input type="date" name="fecha" id="fecha"
                   class="@error('fecha') is-invalid @enderror"
                   value="{{ old('fecha', $denuncia?->fecha) }}">
        </div>

        {{-- Número de Caso --}}
        <div class="col-md-4 input-float">
            <i class="material-icons">confirmation_number</i>
            <label for="num_caso">Número de caso *</label>
            <input type="text" name="num_caso" id="num_caso"
                   class="@error('num_caso') is-invalid @enderror"
                   value="{{ old('num_caso', $denuncia?->num_caso) }}">
        </div>

        {{-- Nombre del Servicio --}}
        <div class="col-md-4 input-float">
            <i class="material-icons">medical_services</i>
            <label for="nombre_servicio">Nombre del servicio</label>
            <input type="text" name="nombre_servicio" id="nombre_servicio"
                   class="@error('nombre_servicio') is-invalid @enderror"
                   value="{{ old('nombre_servicio', $denuncia?->nombre_servicio) }}">
        </div>

        {{-- Departamento --}}
        <div class="col-md-4 input-float">
            <i class="material-icons">public</i>
            <label for="departamento">Departamento</label>
            <input type="text" name="departamento" id="departamento"
                   class="@error('departamento') is-invalid @enderror"
                   value="{{ old('departamento', $denuncia?->departamento) }}">
        </div>

        {{-- Municipio --}}
        <div class="col-md-4 input-float">
            <i class="material-icons">location_city</i>
            <label for="municipio">Municipio</label>
            <input type="text" name="municipio" id="municipio"
                   class="@error('municipio') is-invalid @enderror"
                   value="{{ old('municipio', $denuncia?->municipio) }}">
        </div>

        {{-- Código SLIM --}}
        <div class="col-md-4 input-float">
            <i class="material-icons">vpn_key</i>
            <label for="cod_slim">Código Slim</label>
            <input type="text" name="cod_slim" id="cod_slim"
                   class="@error('cod_slim') is-invalid @enderror"
                   value="{{ old('cod_slim', $denuncia?->cod_slim) }}">
        </div>

        {{-- Agresor --}}
        <div class="col-md-6 input-float">
            <label for="id_agresor">Agresor *</label>
            <select name="id_agresor" id="id_agresor" class="form-select-custom">
                <option value="">Seleccione un agresor</option>
                @foreach ($agresores as $agresor)
                    <option value="{{ $agresor->id }}">{{ $agresor->nombre }} {{ $agresor->ap_paterno }} {{ $agresor->ap_materno }}</option>
                @endforeach
            </select>
        </div>

        {{-- Víctima --}}
        <div class="col-md-6 input-float">
            <label for="id_victima">Víctima *</label>
            <select name="id_victima" id="id_victima" class="form-select-custom">
                <option value="">Seleccione una víctima</option>
                @foreach ($victimas as $victima)
                    <option value="{{ $victima->id }}">{{ $victima->nombre }} {{ $victima->ap_paterno }} {{ $victima->ap_materno }}</option>
                @endforeach
            </select>
        </div>


        {{-- Estado --}}
        <div class="col-md-6 input-float">
            <i class="material-icons">assignment_ind</i>
            <label for="estado">Estado</label>
            <input type="text" name="estado" id="estado"
                   class="@error('estado') is-invalid @enderror"
                   value="{{ old('estado', $denuncia?->estado) }}">
        </div>

        {{-- Completada --}}
        <div class="col-md-6 input-float">
            <i class="material-icons">assignment_ind</i>
            <label for="completada">Completada</label>
            <input type="text" name="completada" id="completada"
                   class="@error('completada') is-invalid @enderror"
                   value="{{ old('completada', $denuncia?->completada) }}">
        </div>
    </div>

    <!--<div class="text-end mt-4">
        <button type="submit" class="btn btn-submit">Guardar</button>
    </div>-->
</div>






<div class="row">
    <div class="col-md-6">
        <div class="card card-form mb-4">
            <h5 class="mb-4">🧍 Testimonio</h5>
            <div class="row">
                {{-- Forma de Ingreso --}}
                <div class="col-md-6 input-float">
                    <label for="forma_ingreso">Forma de Ingreso</label>
                    <input type="text" name="forma_ingreso" id="forma_ingreso"
                        class="@error('forma_ingreso') is-invalid @enderror"
                        value="{{ old('forma_ingreso', $denuncia?->forma_ingreso) }}">
                </div>

                {{-- Denuncia Previa --}}
                <div class="col-md-6 input-float">
                    <label for="denuncia_previa">Existe alguna denuncia previa?</label>
                    <input type="text" name="denuncia_previa" id="denuncia_previa"
                        class="@error('denuncia_previa') is-invalid @enderror"
                        value="{{ old('denuncia_previa', $denuncia?->denuncia_previa) }}">
                </div>

<!--NO ES LO MAS OPTIMO, LA LOGICA SE DESPLIEGA A LA VISTA Y SU MANTENIMIENTO SERA MAS DIFICIL, PERO ES LA OPCION MAS SIMPLE Y FUNCINAL-->

                <!--VIOLENCIA ECONOMICA-->
                @php
                    $violenciaEconomica = \App\Models\Violencia::where('id_tipo_violencia', 1)->get();
                @endphp

                <div class="col-12 input-float">
                    <label for="violencia_economica">Violencia Económica</label>
                    <select name="violencia_economica[]" id="violencia_economica" class="form-select select2" multiple>
                        @foreach ($violenciaEconomica as $v)
                            <option value="{{ $v->nombre }}">{{ $v->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- PSICOLÓGICA -->
                @php
                    $violenciaPsicologica = \App\Models\Violencia::where('id_tipo_violencia', 2)->get();
                @endphp

                <div class="col-12 input-float">
                    <label for="violencia_psicologica">Violencia Psicologica</label>
                    <select name="violencia_psicologica[]" id="violencia_psicologica" class="form-select select2" multiple>
                        @foreach ($violenciaPsicologica as $v)
                            <option value="{{ $v->nombre }}">{{ $v->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- SEXUAL -->
                @php
                    $violenciaSexual = \App\Models\Violencia::where('id_tipo_violencia', 3)->get();
                @endphp

                <div class="col-12 input-float">
                    <label for="violencia_sexual">Violencia Sexual</label>
                    <select name="violencia_sexual[]" id="violencia_sexual" class="form-select select2" multiple>
                        @foreach ($violenciaSexual as $v)
                            <option value="{{ $v->nombre }}">{{ $v->nombre }}</option>
                        @endforeach
                    </select>
                </div>


                <!-- FÍSICA -->
                @php
                    $violenciaFisica = \App\Models\Violencia::where('id_tipo_violencia', 4)->get();
                @endphp

                <div class="col-12 input-float">
                    <label for="violencia_fisica">Violencia Fisica</label>
                    <select name="violencia_fisica[]" id="violencia_fisica" class="form-select select2" multiple>
                        @foreach ($violenciaFisica as $v)
                            <option value="{{ $v->nombre }}">{{ $v->nombre }}</option>
                        @endforeach
                    </select>
                </div>



                <!--
                <div class="col-12 input-float">
                    <label for="violencia_fisica">Violencia física</label>
                    <select name="violencia_fisica[]" id="violencia_fisica" class="form-select select2" multiple>
                        <option value="Golpes">Golpes (puñetes, patadas, etc)</option>
                        <option value="Empujones">Empujones</option>
                        <option value="Uso de objetos">Uso de objetos</option>
                        <option value="Quemaduras">Quemaduras</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>

                <div class="col-12 input-float">
                    <label for="violencia_sexual">Violencia Sexual</label>
                    <select name="violencia_sexual[]" id="violencia_sexual" class="form-select select2" multiple>
                        <option value="Abuso">Abuso</option>
                        <option value="Manoseo">Manoseo</option>
                        <option value="Ver peliculas pornograficas">Ver peliculas pornograficas</option>
                    </select>
                </div>

                <div class="col-12 input-float">
                    <label for="violencia_psicologica">Violencia Psicologica</label>
                    <select name="violencia_psicologica[]" id="violencia_psicologica" class="form-select select2" multiple>
                        <option value="Insultos">Insultos</option>
                        <option value="Denigracion">Denigracion</option>
                    </select>
                </div>

                <div class="col-12 input-float">
                    <label for="violencia_economica">Violencia Economica</label>
                    <select name="violencia_economica[]" id="violencia_economica" class="form-select select2" multiple>
                        <option value="Robo">Robo</option>
                        <option value="Estafa">Estafa</option>
                        <option value="Hurto">Hurto</option>
                    </select>
                </div> 
-->
                
                {{-- Testimonio --}}
                <div class="col-12 input-float">
                    <label for="testimonio">Testimonio</label>
                    <input type="text" name="testimonio" id="testimonio"
                        class="@error('testimonio') is-invalid @enderror"
                        value="{{ old('testimonio', $denuncia?->testimonio) }}">
                </div>

                <!-- DELITOS -->
                @php
                    $delitosLista = \App\Models\Delito::all();
                @endphp

                <div class="col-12 input-float">
                    <label for="delitos_penales">Delitos Penales</label>
                    <select name="delitos_penales[]" class="form-select select2" multiple>
                        @foreach ($delitosLista as $delito)
                            <option value="{{ $delito->nombre_delito }}">{{ $delito->nombre_delito }}</option>
                        @endforeach
                    </select>
                </div>



                <div class="col-12 input-float">
    <label for="emblematico" class="form-label">¿Caso Emblemático?</label>
    <select name="emblematico" id="emblematico" class="form-select">
        <option value="NO" selected>NO</option>
        <option value="SI">SI</option>
    </select>
</div>



            </div>

                <!--DELITOS 
                <div class="col-12 input-float">
                    <label for="delitos_penales">Delitos Penales</label>
                    <select name="delitos_penales[]" id="delitos_penales" class="form-select select2" multiple>
                        <option value="Feminicidio">Feminicidio</option>
                        <option value="Pornografia">Pornografia</option>
                        <option value="Proxenetismo">Proxenetismo</option>
                    </select>
                </div>-->
        </div>
    </div>






    <div class="col-md-6">
        <div class="card card-form mb-4">
        <h5 class="mb-4">🧍 Lugar de la Agresion</h5>
            <div class="row">

               <!-- <div class="col-md-12 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="copiar-domicilio-victima">
                        <label class="form-check-label" for="copiar-domicilio-victima">
                            📍 Mismo lugar que la dirección actual de la víctima
                        </label>
                    </div>
                </div>-->

<!-- meter datos de domicilio-->
                <div class="col-md-6 input-float">
                    <label for="zona_barrio">Zona/Barrio</label>
                    <input type="text" name="zona_barrio" id="zona_barrio" value="{{ old('zona_barrio', $denuncia?->zona_barrio) }}">
                </div>
                <div class="col-md-6 input-float">
                    <label for="avenida_calle">Avenida/Calle</label>
                    <input type="text" name="avenida_calle" id="avenida_calle" value="{{ old('avenida_calle', $denuncia?->avenida_calle) }}">
                </div>
                <div class="col-md-6 input-float">
                    <label for="nom_edificio">Nombre del Edificio</label>
                    <input type="text" name="nom_edificio" id="nom_edificio" value="{{ old('nom_edificio', $denuncia?->nom_edificio) }}">
                </div>
                <div class="col-md-6 input-float">
                    <label for="num_vivienda">Número de Vivienda</label>
                    <input type="text" name="num_vivienda" id="num_vivienda" value="{{ old('num_vivienda', $denuncia?->num_vivienda) }}">
                </div>
                <div class="col-md-6 input-float">
                    <label for="lugar_domicilio">Lugar de Domicilio</label>
                    <select name="lugar_domicilio" id="lugar_domicilio">
                        <option value=""></option>
                        <option value="Este Municipio" {{ old('lugar_domicilio', $denuncia?->lugar_domicilio) == 'Este Municipio' ? 'selected' : '' }}>Este Municipio</option>
                        <option value="Otro Municipio" {{ old('lugar_domicilio', $denuncia?->lugar_domicilio) == 'Otro Municipio' ? 'selected' : '' }}>Otro Municipio</option>
                        <option value="Zona Sur" {{ old('lugar_domicilio', $denuncia?->lugar_domicilio) == 'Zona Sur' ? 'selected' : '' }}>Zona Sur</option>
                        <option value="Zona Norte" {{ old('lugar_domicilio', $denuncia?->lugar_domicilio) == 'Zona Norte' ? 'selected' : '' }}>Zona Norte</option>
                    </select>
                </div>
                <div class="col-md-6 input-float">
                    <label for="espcifique">Especifique</label>
                    <input type="text" name="especifique" id="especifique" value="{{ old('especifique', $denuncia?->especifique) }}">
                </div>
            </div>
        </div>
    </div>
</div>



{{-- Filtro dinámico sin usar AJAX --}}
<script>
/*document.addEventListener('DOMContentLoaded', function () {
    const tipoSelect = document.getElementById('id_tipo_violencia');
    const violenciaelect = document.getElementById('id_violencia');
    const todasLasOpciones = Array.from(violenciaelect.options);

    tipoSelect.addEventListener('change', function () {
        const tipoId = this.value;

        // Limpiar y agregar solo las que coincidan
        violenciaelect.innerHTML = '<option value="">Seleccione un accion</option>';

        const opcionesFiltradas = todasLasOpciones.filter(option => {
            return option.dataset.tipo === tipoId;
        });

        opcionesFiltradas.forEach(option => violenciaelect.appendChild(option));
    });
});*/
</script>

