
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
            <label for="num_caso">Numero CUD *</label>
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
            <select name="estado" id="estado">
                <option value=""></option>
                <option value="Recepcion" {{ old('estado', $denuncia?->estado) == 'Recepcion' ? 'selected' : '' }}>Recepcion</option>
                <option value="Investigacion" {{ old('estado', $denuncia?->estado) == 'Investigacion' ? 'selected' : '' }}>Investigacion</option>
                <option value="Concluido" {{ old('estado', $denuncia?->estado) == 'Concluido' ? 'selected' : '' }}>Concluido de Casa</option>
                <option value="Archivado" {{ old('estado', $denuncia?->estado) == 'Archivado' ? 'selected' : '' }}>Archivado</option>
            </select>   
        </div>

        


        {{-- Juzgado --}}
        <div class="col-md-6 input-float">
            <i class="material-icons">assignment_ind</i>
            <label for="num_juzgado">Numero de Juzgado</label>
            <input type="text" name="num_juzgado" id="num_juzgado"
                   class="@error('num_juzgado') is-invalid @enderror"
                   value="{{ old('num_juzgado', $denuncia?->num_juzgado) }}">
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


                 <!-- FEMINICIDA -->
                 @php
                    $violenciaFeminicida = \App\Models\Violencia::where('id_tipo_violencia', 5)->get();
                @endphp

                <div class="col-12 input-float">
                    <label for="violencia_feminicida">Violencia Feminicida</label>
                    <select name="violencia_feminicida[]" id="violencia_feminicida" class="form-select select2" multiple>
                        @foreach ($violenciaFeminicida as $v)
                            <option value="{{ $v->nombre }}">{{ $v->nombre }}</option>
                        @endforeach
                    </select>
                </div>

                
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
        </div>
    </div>






    <div class="col-md-6">
        <div class="card card-form mb-4">
        <h5 class="mb-4">🧍 Lugar de la Agresion</h5>
            <div class="row">
                <div class="col-md-6 input-float">
                    <label for="distrito">Distrito Urbano</label>
                    <select name="distrito" id="distrito">
                        <option value=""></option>
                        <option value="Distrito 1" {{ old('distrito', $denuncia?->distrito) == 'Distrito 1' ? 'selected' : '' }}>Distrito 1</option>
                        <option value="Distrito 2" {{ old('distrito', $denuncia?->distrito) == 'Distrito 2' ? 'selected' : '' }}>Distrito 2</option>
                        <option value="Distrito 3" {{ old('distrito', $denuncia?->distrito) == 'Distrito 3' ? 'selected' : '' }}>Distrito 3</option>
                        <option value="Distrito 4" {{ old('distrito', $denuncia?->distrito) == 'Distrito 4' ? 'selected' : '' }}>Distrito 4</option>
                        <option value="Distrito 5" {{ old('distrito', $denuncia?->distrito) == 'Distrito 5' ? 'selected' : '' }}>Distrito 5</option>
                        <option value="Distrito 6" {{ old('distrito', $denuncia?->distrito) == 'Distrito 6' ? 'selected' : '' }}>Distrito 6</option>
                        <option value="Distrito 7" {{ old('distrito', $denuncia?->distrito) == 'Distrito 7' ? 'selected' : '' }}>Distrito 7</option>
                        <option value="Distrito 8" {{ old('distrito', $denuncia?->distrito) == 'Distrito 8' ? 'selected' : '' }}>Distrito 8</option>
                        <option value="Distrito 9" {{ old('distrito', $denuncia?->distrito) == 'Distrito 9' ? 'selected' : '' }}>Distrito 9</option>
                        <option value="Distrito 10" {{ old('distrito', $denuncia?->distrito) == 'Distrito 10' ? 'selected' : '' }}>Distrito 10</option>
                        <option value="Distrito 11" {{ old('distrito', $denuncia?->distrito) == 'Distrito 11' ? 'selected' : '' }}>Distrito 11</option>
                        <option value="Distrito 12" {{ old('distrito', $denuncia?->distrito) == 'Distrito 12' ? 'selected' : '' }}>Distrito 12</option>
                        <option value="Distrito 13" {{ old('distrito', $denuncia?->distrito) == 'Distrito 13' ? 'selected' : '' }}>Distrito 13</option>
                    </select>            
                </div>
                <div class="col-md-6 input-float">
                    <label for="distrito_rural">Distrito Rural</label>
                    <input type="text" name="distrito_rural" id="distrito_rural" value="{{ old('distrito_rural', $denuncia?->distrito_rural) }}">     
                </div>
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



<script>

</script>

