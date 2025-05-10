
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
</style>



<div class="row">
    <div class="col-md-6">
        <div class="card card-form mb-4">
            <h4 class="mb-4">Datos del Agresor</h4>
            <h5 class="mb-4">En el caso de no contar con el nombre del agresor, ingresar "Agresor"</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Obligatorio" 
                        value="{{ old('nombre', $agresor?->nombre) }}">
                    </div> 
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="ap_paterno">Apellido Paterno</label>
                        <input type="text" name="ap_paterno" id="ap_paterno" value="{{ old('ap_paterno', $agresor?->ap_paterno) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="ap_materno">Apellido Materno</label>
                        <input type="text" name="ap_materno" id="ap_materno" value="{{ old('ap_materno', $agresor?->ap_materno) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="tipo_documento">Tipo documento</label>
                        <select name="tipo_documento" id="tipo_documento">
                            <option value=""></option>
                            <option value="Carnet de Identidad" {{ old('tipo_documento', $agresor?->tipo_documento) == 'Carnet de Identidad' ? 'selected' : '' }}>Carnet de Identidad</option>
                            <option value="RUN" {{ old('tipo_documento', $agresor?->tipo_documento) == 'RUN' ? 'selected' : '' }}>RUN</option>
                            <option value="Certificado de Nacimiento" {{ old('tipo_documento', $agresor?->tipo_documento) == 'Certificado de Nacimiento' ? 'selected' : '' }}>Certificado de Nacimiento</option>
                            <option value="No Tiene" {{ old('tipo_documento', $agresor?->tipo_documento) == 'No Tiene' ? 'selected' : '' }}>No Tiene</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="num_documento">Numero de Documento</label>
                        <input type="text" name="num_documento" id="num_documento" value="{{ old('num_documento', $agresor?->num_documento) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="expedido">Expedido</label>
                        <select name="expedido" id="expedido">
                            <option value=""></option>
                            <option value="Tarija" {{ old('expedido', $agresor?->expedido) == 'Tarija' ? 'selected' : '' }}>Tarija</option>
                            <option value="Chuquisaca" {{ old('expedido', $agresor?->expedido) == 'Chuquisaca' ? 'selected' : '' }}>Chuquisaca</option>
                            <option value="Potosi" {{ old('expedido', $agresor?->expedido) == 'Potosi' ? 'selected' : '' }}>Potosi</option>
                            <option value="Oruro" {{ old('expedido', $agresor?->expedido) == 'Oruro' ? 'selected' : '' }}>Oruro</option>
                            <option value="Cochabamba" {{ old('expedido', $agresor?->expedido) == 'Cochabamba' ? 'selected' : '' }}>Cochabamba</option>
                            <option value="Santa Cruz" {{ old('expedido', $agresor?->expedido) == 'Santa Cruz' ? 'selected' : '' }}>Santa Cruz</option>
                            <option value="Beni" {{ old('expedido', $agresor?->expedido) == 'Beni' ? 'selected' : '' }}>Beni</option>
                            <option value="La Paz" {{ old('expedido', $agresor?->expedido) == 'La Paz' ? 'selected' : '' }}>La Paz</option>
                            <option value="Pando" {{ old('expedido', $agresor?->expedido) == 'Pando' ? 'selected' : '' }}>Pando</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="sexo">Sexo</label>
                        <select name="sexo" id="sexo">
                            <option value=""></option>
                            <option value="Femenino" {{ old('sexo', $agresor?->sexo) == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                            <option value="Masculino" {{ old('sexo', $agresor?->sexo) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="lugr_nacimiento">Lugar de Nacimiento</label>
                        <select name="lugr_nacimiento" id="lugr_nacimiento">
                            <option value=""></option>
                            <option value="Este Municipio" {{ old('lugr_nacimiento', $agresor?->lugr_nacimiento) == 'Este Municipio' ? 'selected' : '' }}>Este Municipio</option>
                            <option value="Otro municipio" {{ old('lugr_nacimiento', $agresor?->lugr_nacimiento) == 'Otro Municipio' ? 'selected' : '' }}>Otro Municipio</option>
                            <option value="Otro Pais" {{ old('lugr_nacimiento', $agresor?->lugr_nacimiento) == 'Otro Pais' ? 'selected' : '' }}>Otro Pais</option>
                        </select>
                    </div>  
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="especifique_lugar">Especifique lugar</label>
                        <input type="text" name="especifique_lugar" id="especifique_lugar" value="{{ old('especifique_lugar', $agresor?->especifique_lugar) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento', $agresor?->fecha_nacimiento) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="edad">Edad</label>
                        <input type="text" name="edad" id="edad" value="{{ old('edad', $agresor?->edad) }}">
                    </div>  
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="adulto_mayor">Adulto Mayor</label>
                        <select name="adulto_mayor" id="adulto_mayor">
                            <option value="">Seleccione</option>
                            <option value="SI" {{ old('adulto_mayor', $agresor?->adulto_mayor) == 'SI' ? 'selected' : '' }}>SI</option>
                            <option value="No" {{ old('adulto_mayor', $agresor?->adulto_mayor) == 'NO' ? 'selected' : '' }}>NO</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="residencia_habitual">Residencia Habitual</label>
                        <select name="residencia_habitual" id="residencia_habitual">
                            <option value=""></option>
                            <option value="Este Municipio" {{ old('residencia_habitual', $agresor?->residencia_habitual) == 'Este Municipio' ? 'selected' : '' }}>Este Municipio</option>
                            <option value="Otro municipio" {{ old('residencia_habitual', $agresor?->residencia_habitual) == 'Otro Municipio' ? 'selected' : '' }}>Otro Municipio</option>
                            <option value="Otro Pais" {{ old('residencia_habitual', $agresor?->residencia_habitual) == 'Otro Pais' ? 'selected' : '' }}>Otro Pais</option>
                        </select>
                    </div>     
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="especifique_residencia">Especifique residencia</label>
                        <input type="text" name="especifique_residencia" id="especifique_residencia" value="{{ old('especifique_residencia', $agresor?->especifique_residencia) }}">
                    </div>
                </div>
            </div>
        </div>
    </div>

   <div class="col-md-6">
        <div class="card card-form mb-4">
        <h5 class="mb-4"></h5>
            <div class="row">
               

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="estado_civil">Estado Civil</label>
                        <select name="estado_civil" id="estado_civil">
                            <option value=""></option>
                            <option value="Soltero(a)" {{ old('estado_civil', $agresor?->estado_civil) == 'Soltero(a)' ? 'selected' : '' }}>Soltero(a)</option>
                            <option value="Casado(a)" {{ old('estado_civil', $agresor?->estado_civil) == 'Casado(a)' ? 'selected' : '' }}>Casado(a)</option>
                            <option value="Divorciado(a)" {{ old('estado_civil', $agresor?->estado_civil) == 'Divorciado(a)' ? 'selected' : '' }}>Divorciado(a)</option>
                            <option value="Concubino(a) – Unión Libre" {{ old('estado_civil', $agresor?->estado_civil) == 'Concubino(a) – Unión Libre' ? 'selected' : '' }}>Concubino(a) – Unión Libre</option>
                            <option value="Enamorado(a)" {{ old('estado_civil', $agresor?->estado_civil) == 'Enamorado(a)' ? 'selected' : '' }}>Enamorado(a)</option>
                            <option value="Viudo(a)" {{ old('estado_civil', $agresor?->estado_civil) == 'Viudo(a)' ? 'selected' : '' }}>Viudo(a)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="logro_educativo">Logro Educativo</label>
                        <select name="logro_educativo" id="logro_educativo">
                            <option value=""></option>
                            <option value="Ninguno" {{ old('logro_educativo', $agresor?->logro_educativo) == 'Ninguno' ? 'selected' : '' }}>Ninguno</option>
                            <option value="Lee y Escribe" {{ old('logro_educativo', $agresor?->logro_educativo) == 'Lee y Escribe' ? 'selected' : '' }}>Lee y Escribe</option>
                            <option value="Primaria" {{ old('logro_educativo', $agresor?->logro_educativo) == 'Primaria' ? 'selected' : '' }}>Primaria</option>
                            <option value="Secundaria" {{ old('logro_educativo', $agresor?->logro_educativo) == 'Secundaria' ? 'selected' : '' }}>Secundaria</option>
                            <option value="Tecnico" {{ old('logro_educativo', $agresor?->logro_educativo) == 'Tecnico' ? 'selected' : '' }}>Tecnico</option>
                            <option value="Superior" {{ old('logro_educativo', $agresor?->logro_educativo) == 'Superior' ? 'selected' : '' }}>Superior</option>
                            <option value="Universidad" {{ old('logro_educativo', $agresor?->logro_educativo) == 'Universidad' ? 'selected' : '' }}>Universidad</option>

                        </select>                    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="ultimo_curso">Último Curso</label>
                        <input type="text" name="ultimo_curso" id="ultimo_curso" value="{{ old('ultimo_curso', $agresor?->ultimo_curso) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="actividad">Actividad</label>
                        <select name="actividad" id="actividad">
                            <option value=""></option>
                            <option value="No Trabaja" {{ old('actividad', $agresor?->actividad) == 'No Trabaja' ? 'selected' : '' }}>No Trabaja</option>
                            <option value="Trabaja" {{ old('actividad', $agresor?->actividad) == 'Trabaja' ? 'selected' : '' }}>Trabaja</option>
                            <option value="Labores de Casa" {{ old('actividad', $agresor?->actividad) == 'Labores de Casa' ? 'selected' : '' }}>Labores de Casa</option>
                            <option value="Estudiante" {{ old('actividad', $agresor?->actividad) == 'Estudiante' ? 'selected' : '' }}>Estudiante</option>
                        </select>                    
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="especifique_actividad">Especifique Actividad</label>
                        <input type="text" name="especifique_actividad" id="especifique_actividad" value="{{ old('especifique_actividad', $agresor?->especifique_actividad) }}">
                    </div>  
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="ingreso">Ingreso</label>
                        <select name="ingreso" id="ingreso">
                            <option value=""></option>
                            <option value="No Tiene" {{ old('ingreso', $agresor?->ingreso) == 'No Tiene' ? 'selected' : '' }}>No Tiene</option>
                            <option value="Diario" {{ old('ingreso', $agresor?->ingreso) == 'Diario' ? 'selected' : '' }}>Diario</option>
                            <option value="Semanal" {{ old('ingreso', $agresor?->ingreso) == 'Semanal' ? 'selected' : '' }}>Semanal</option>
                            <option value="Mensual" {{ old('ingreso', $agresor?->ingreso) == 'Mensual' ? 'selected' : '' }}>Mensual</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="monto">Monto</label>
                        <input type="text" name="monto" id="monto" value="{{ old('monto', $agresor?->monto) }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="idioma">Idioma</label>
                        <select name="idioma" id="idioma">
                            <option value="">Seleccione</option>
                            <option value="Castellano" {{ old('idioma', $agresor?->idioma) == 'Castellano' ? 'selected' : '' }}>Castellano</option>
                            <option value="Quechua" {{ old('idioma', $agresor?->idioma) == 'Quechua' ? 'selected' : '' }}>Quechua</option>
                            <option value="Aymara" {{ old('idioma', $agresor?->idioma) == 'Aymara' ? 'selected' : '' }}>Aymara</option>
                            <option value="Mojeño" {{ old('idioma', $agresor?->idioma) == 'Mojeño' ? 'selected' : '' }}>Mojeño</option>
                            <option value="Guarani" {{ old('idioma', $agresor?->idioma) == 'Guarani' ? 'selected' : '' }}>Guarani</option>
                            <option value="Extranjero" {{ old('idioma', $agresor?->idioma) == 'Extranjero' ? 'selected' : '' }}>Extranjero</option>
                            <option value="Otro" {{ old('idioma', $agresor?->idioma) == 'Otro' ? 'selected' : '' }}>Otro</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="especifique_idioma">Especifique Idioma</label>
                        <input type="text" name="especifique_idioma" id="especifique_idioma" value="{{ old('especifique_idioma', $agresor?->especifique_idioma) }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card card-form mb-4">
    <h5 class="mb-4">📅 Domicilio Agresor</h5>
    <div class="row">
        <div class="col-md-3 input-float">
            <label for="distrito">Distrito Urbano</label>
            <select name="distrito" id="distrito">
                <option value=""></option>
                <option value="Distrito 1 (El Molino)" {{ old('distrito', $agresor?->distrito) == 'Distrito 1 (El Molino)' ? 'selected' : '' }}>Distrito 1 (El Molino)</option>
                <option value="Distrito 2 (San Roque)" {{ old('distrito', $agresor?->distrito) == 'Distrito 2 (San Roque)' ? 'selected' : '' }}>Distrito 2 (San Roque)</option>
                <option value="Distrito 3 (Las Panosas)" {{ old('distrito', $agresor?->distrito) == 'Distrito 3 (Las Panosas)' ? 'selected' : '' }}>Distrito 3 (Las Panosas)</option>
                <option value="Distrito 4 (La Pampa)" {{ old('distrito', $agresor?->distrito) == 'Distrito 4 (La Pampa)' ? 'selected' : '' }}>Distrito 4 (La Pampa)</option>
                <option value="Distrito 5 (Villa Fatima)" {{ old('distrito', $agresor?->distrito) == 'Distrito 5 (Villa Fatima)' ? 'selected' : '' }}>Distrito 5 (Villa Fatima)</option>
                <option value="Distrito 6 (Tomatitas)" {{ old('distrito', $agresor?->distrito) == 'Distrito 6 (Tomatitas)' ? 'selected' : '' }}>Distrito 6 (Tomatitas)</option>
                <option value="Distrito 7 (Zona Mercado Campesion)" {{ old('distrito', $agresor?->distrito) == 'Distrito 7 (Zona Mercado Campesion)' ? 'selected' : '' }}>Distrito 7 (Zona Mercado Campesion)</option>
                <option value="Distrito 8 (Zona Villa Avaroa)" {{ old('distrito', $agresor?->distrito) == 'Distrito 8 (Zona Villa Avaroa)' ? 'selected' : '' }}>Distrito 8 (Zona Villa Avaroa)</option>
                <option value="Distrito 9 (Zona Palmarcito)" {{ old('distrito', $agresor?->distrito) == 'Distrito 9 (Zona Palmarcito)' ? 'selected' : '' }}>Distrito 9 (Zona Palmarcito)</option>
                <option value="Distrito 10 (Zona Morros Blancos)" {{ old('distrito', $agresor?->distrito) == 'Distrito 10 (Zona Morros Blancos)' ? 'selected' : '' }}>Distrito 10 (Zona Morros Blancos)</option>
                <option value="Distrito 11 (ZonaSan Geronimo)" {{ old('distrito', $agresor?->distrito) == 'Distrito 11 (ZonaSan Geronimo)' ? 'selected' : '' }}>Distrito 11 (ZonaSan Geronimo)</option>
                <option value="Distrito 12 (Zona Miraflores)" {{ old('distrito', $agresor?->distrito) == 'Distrito 12 (Zona Miraflores)' ? 'selected' : '' }}>Distrito 12 (Zona Miraflores)</option>
                <option value="Distrito 13 (Zona SENAC)" {{ old('distrito', $agresor?->distrito) == 'Distrito 13 (Zona SENAC)' ? 'selected' : '' }}>Distrito 13 (Zona SENAC)</option>
            </select>            
        </div> 
        <div class="col-md-3 input-float">
            <label for="distrito_rural">Distrito Rural</label>
            <select name="distrito_rural" id="distrito_rural">
                <option value=""></option>
                <option value="San Andres" {{ old('distrito_rural', $agresor?->distrito) == 'San Andres' ? 'selected' : '' }}>San Andres</option>
                <option value="Tolomosa" {{ old('distrito_rural', $agresor?->distrito) == 'Tolomosa' ? 'selected' : '' }}>Tolomosa</option>
                <option value="Sella Cercado" {{ old('distrito_rural', $agresor?->distrito) == 'Sella Cercado' ? 'selected' : '' }}>Sella Cercado</option>
                <option value="Santa Ana" {{ old('distrito_rural', $agresor?->distrito) == 'Santa Ana' ? 'selected' : '' }}>Santa Ana</option>
                <option value="San Agustin" {{ old('distrito_rural', $agresor?->distrito) == 'San Agustin' ? 'selected' : '' }}>San Agustin</option>
                <option value="Papachacra" {{ old('distrito_rural', $agresor?->distrito) == 'Papachacra' ? 'selected' : '' }}>Papachacra</option>
                <option value="Alto España" {{ old('distrito_rural', $agresor?->distrito) == 'Alto España' ? 'selected' : '' }}>Alto España</option>
                <option value="Lazareto" {{ old('distrito_rural', $agresor?->distrito) == 'Lazareto' ? 'selected' : '' }}>Lazareto</option>
                <option value="San Mateo" {{ old('distrito_rural', $agresor?->distrito) == 'San Mateo' ? 'selected' : '' }}>San Mateo'</option>
                <option value="Yesera" {{ old('distrito_rural', $agresor?->distrito) == 'Yesera' ? 'selected' : '' }}>Yesera</option>
                <option value="Junacas" {{ old('distrito_rural', $agresor?->distrito) == 'Junacas' ? 'selected' : '' }}>Junacas</option>
            </select>            
        </div>
        <div class="col-md-3 input-float">
            <label for="zona_barrio">Zona/Barrio</label>
            <input type="text" name="zona_barrio" id="zona_barrio" value="{{ old('zona_barrio', $agresor?->zona_barrio) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="avenida_calle">Avenida/Calle</label>
            <input type="text" name="avenida_calle" id="avenida_calle" value="{{ old('avenida_calle', $agresor?->avenida_calle) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="nom_edificio">Nombre del Edificio</label>
            <input type="text" name="nom_edificio" id="nom_edificio" value="{{ old('nom_edificio', $agresor?->nom_edificio) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="num_piso_departamento">Numero Piso, Departamento</label>
            <input type="text" name="num_piso_departamento" id="num_piso_departamento" value="{{ old('num_piso_departamento', $agresor?->num_piso_departamento) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="num_vivienda">Número de Vivienda</label>
            <input type="text" name="num_vivienda" id="num_vivienda" value="{{ old('num_vivienda', $agresor?->num_vivienda) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="telefono_domicilio">Teléfono Domicilio</label>
            <input type="text" name="telefono_domicilio" id="telefono_domicilio" value="{{ old('telefono_domicilio', $agresor?->telefono_domicilio) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="lugar_domicilio">Lugar de Domicilio</label>
            <select name="lugar_domicilio" id="lugar_domicilio">
                <option value=""></option>
                <option value="Este Municipio" {{ old('lugar_domicilio', $agresor?->lugar_domicilio) == 'Este Municipio' ? 'selected' : '' }}>Este Municipio</option>
                <option value="Otro Municipio" {{ old('lugar_domicilio', $agresor?->lugar_domicilio) == 'Otro Municipio' ? 'selected' : '' }}>Otro Municipio</option>
                <option value="Zona Sur" {{ old('lugar_domicilio', $agresor?->lugar_domicilio) == 'Zona Sur' ? 'selected' : '' }}>Zona Sur</option>
                <option value="Zona Norte" {{ old('lugar_domicilio', $agresor?->lugar_domicilio) == 'Zona Norte' ? 'selected' : '' }}>Zona Norte</option>
            </select>
        </div>
        <div class="col-md-3 input-float">
            <label for="especifique">Especifique</label>
            <input type="text" name="especifique" id="especifique" value="{{ old('especifique', $agresor?->especifique) }}">
        </div>
    </div>
</div>




<div class="card card-form mb-4">
    <h5 class="mb-4">📅 Direccion Laboral</h5>
    <div class="row">
    <div class="col-md-3 input-float">
            <label for="nombre_empresa">Nombre de la empresa</label>
            <input type="text" name="nombre_empresa" id="nombre_empresa" value="{{ old('nombre_empresa', 
            $agresor?->nombre_empresa) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="empresa_zona_barrio">Zona/Barrio</label>
            <input type="text" name="empresa_zona_barrio" id="empresa_zona_barrio" value="{{ old('empresa_zona_barrio', 
            $agresor?->empresa_zona_barrio) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="empresa_avenida_calle">Avenida/Calle</label>
            <input type="text" name="empresa_avenida_calle" id="empresa_avenida_calle" value="{{ old('empresa_avenida_calle', 
            $agresor?->empresa_avenida_calle) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="empresa_telefono">Telefono empresa</label>
            <input type="text" name="empresa_telefono" id="empresa_telefono" value="{{ old('empresa_telefono', 
            $agresor?->empresa_telefono) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="empresa_num_edificio">Número de Vivienda</label>
            <input type="text" name="empresa_num_edificio" id="empresa_num_edificio" value="{{ old('empresa_num_edificio', 
            $agresor?->empresa_num_edificio) }}">
        </div>
    </div>
</div>

<script>
// MANTENER TODO EN MAYUSCULAS
document.addEventListener("DOMContentLoaded", function () {
    const campos = document.querySelectorAll("input[type='text'], textarea");

    campos.forEach(function (campo) {
        campo.style.textTransform = "uppercase"; // visual
        campo.addEventListener("input", function () {
            const cursorInicio = this.selectionStart;
            const cursorFin = this.selectionEnd;

            this.value = this.value.toUpperCase(); // real
            this.setSelectionRange(cursorInicio, cursorFin); // mantener posición del cursor
        });
    });
});
</script>
        




