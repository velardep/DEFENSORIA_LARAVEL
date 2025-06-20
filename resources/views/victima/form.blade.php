<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f9f9f9;
    }

    :root {
        --azul: #003049;
        --rojo:rgb(0, 102, 255);
        --naranja: #000000;
        --amarillo: #1f99be;
        --beige: #f8f8f8;
    }

    .card-form {
        background-color: var(--beige);
        border-radius: 1.25rem;
        padding: 2rem;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 2rem;
        /* Eliminamos el hover dinámico */
        transition: none;
    }

    .card-form h5 {
        color: var(--azul);
        font-weight: 600;
        margin-bottom: 1.5rem;
    }

    .input-float {
        position: relative;
        margin-bottom: 2.5rem;
    }

    .input-float label {
        position: absolute;
        top: -1rem;
        left: 2.6rem;
        background: var(--beige);
        padding: 0 0.4rem;
        font-size: 0.9rem;
        color: var(--azul);
        z-index: 2;
        pointer-events: none;
        transition: 0.2s;
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
        padding: 1rem 0.6rem 0.6rem 2.6rem;
        border: none;
        border-bottom: 2px solid var(--amarillo);
        background: transparent;
        font-size: 1rem;
        color: var(--azul);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .input-float input:focus,
    .input-float select:focus {
        outline: none;
        border-bottom: 2px solid var(--rojo);
        box-shadow: 0 4px 12px rgba(255, 72, 0, 0.1);
    }

    .btn-submit {
        padding: 0.65rem 1.5rem;
        font-size: 1rem;
        border-radius: 30px;
        background-color: #1f99be; /* azul personalizado */
        border: none;
        color: white;
        transition: background 0.3s ease;
    }


    .btn-submit:hover {
        background-color: var(--rojo);
    }

    .invalid-feedback {
        font-size: 0.85rem;
        margin-top: 0.25rem;
        color: #dc3545;
    }
</style>

<h4 style="margin-left: 16px; font-size: 2rem;"> Iniciar Ficha de Denuncia</h4>

<div class="row"> 
    <!-- 🧍 Información Personal --> 
    <div class="col-md-6">
        <div class="card card-form mb-4">
            <h4 class="mb-4">Datos de la victima</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" 
                        value="{{ old('nombre', $victima?->nombre) }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="ap_paterno">Apellido Paterno</label>
                        <input type="text" name="ap_paterno" id="ap_paterno" value="{{ old('ap_paterno', $victima?->ap_paterno) }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="ap_materno">Apellido Materno</label>
                        <input type="text" name="ap_materno" id="ap_materno" value="{{ old('ap_materno', $victima?->ap_materno) }}">
                    </div>
                </div>

                
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="tipo_documento">Tipo documento</label>
                        <select name="tipo_documento" id="tipo_documento"> 
                            <option value=""></option>
                            <option value="Carnet de Identidad" {{ old('tipo_documento', $victima?->tipo_documento) == 'Carnet de Identidad' ? 'selected' : '' }}>Carnet de Identidad</option>
                            <option value="RUN" {{ old('tipo_documento', $victima?->tipo_documento) == 'RUN' ? 'selected' : '' }}>RUN</option>
                            <option value="Certificado de Nacimiento" {{ old('tipo_documento', $victima?->tipo_documento) == 'Certificado de Nacimiento' ? 'selected' : '' }}>Certificado de Nacimiento</option>
                            <option value="No Tiene" {{ old('tipo_documento', $victima?->tipo_documento) == 'No Tiene' ? 'selected' : '' }}>No Tiene</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="num_documento">Numero de Documento</label>
                        <input type="text" name="num_documento" id="num_documento" value="{{ old('num_documento', $victima?->num_documento) }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="expedido">Expedido</label>
                        <select name="expedido" id="expedido">
                            <option value=""></option>
                            <option value="Tarija" {{ old('expedido', $victima?->expedido) == 'Tarija' ? 'selected' : '' }}>Tarija</option>
                            <option value="Chuquisaca" {{ old('expedido', $victima?->expedido) == 'Chuquisaca' ? 'selected' : '' }}>Chuquisaca</option>
                            <option value="Potosi" {{ old('expedido', $victima?->expedido) == 'Potosi' ? 'selected' : '' }}>Potosi</option>
                            <option value="Oruro" {{ old('expedido', $victima?->expedido) == 'Oruro' ? 'selected' : '' }}>Oruro</option>
                            <option value="Cochabamba" {{ old('expedido', $victima?->expedido) == 'Cochabamba' ? 'selected' : '' }}>Cochabamba</option>
                            <option value="Santa Cruz" {{ old('expedido', $victima?->expedido) == 'Santa Cruz' ? 'selected' : '' }}>Santa Cruz</option>
                            <option value="Beni" {{ old('expedido', $victima?->expedido) == 'Beni' ? 'selected' : '' }}>Beni</option>
                            <option value="La Paz" {{ old('expedido', $victima?->expedido) == 'La Paz' ? 'selected' : '' }}>La Paz</option>
                            <option value="Pando" {{ old('expedido', $victima?->expedido) == 'Pando' ? 'selected' : '' }}>Pando</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="sexo">Sexo</label>
                        <select name="sexo" id="sexo">
                            <option value=""></option>
                            <option value="Femenino" {{ old('sexo', $victima?->sexo) == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                            <option value="Masculino" {{ old('sexo', $victima?->sexo) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="lugr_nacimiento">Lugar de Nacimiento</label>
                        <select name="lugr_nacimiento" id="lugr_nacimiento">
                            <option value=""></option>
                            <option value="Este Municipio" {{ old('lugr_nacimiento', $victima?->lugr_nacimiento) == 'Este Municipio' ? 'selected' : '' }}>Este Municipio</option>
                            <option value="Otro municipio" {{ old('lugr_nacimiento', $victima?->lugr_nacimiento) == 'Otro Municipio' ? 'selected' : '' }}>Otro Municipio</option>
                            <option value="Otro Pais" {{ old('lugr_nacimiento', $victima?->lugr_nacimiento) == 'Otro Pais' ? 'selected' : '' }}>Otro Pais</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6" id="especifique-nacimiento-wrapper" style="display: none;">
                    <div class="input-float">
                        <label for="especifique_nacimiento">Especifique lugar</label>
                        <input type="text" name="especifique_nacimiento" id="especifique_nacimiento" value="{{ old('especifique_nacimiento', $victima?->especifique_nacimiento) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento', $victima?->fecha_nacimiento) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="edad">Edad</label>
                        <input type="number" name="edad" id="edad" value="{{ old('edad', $victima?->edad) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="adulto_mayor">Adulto Mayor</label>
                        <select name="adulto_mayor" id="adulto_mayor">
                            <option value="">Seleccione</option>
                            <option value="SI" {{ old('adulto_mayor', $victima?->adulto_mayor) == 'SI' ? 'selected' : '' }}>SI</option>
                            <option value="No" {{ old('adulto_mayor', $victima?->adulto_mayor) == 'NO' ? 'selected' : '' }}>NO</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="residencia_habitual">Residencia Habitual</label>
                        <select name="residencia_habitual" id="residencia_habitual">
                            <option value=""></option>
                            <option value="Este Municipio" {{ old('residencia_habitual', $victima?->residencia_habitual) == 'Este Municipio' ? 'selected' : '' }}>Este Municipio</option>
                            <option value="Otro municipio" {{ old('residencia_habitual', $victima?->residencia_habitual) == 'Otro Municipio' ? 'selected' : '' }}>Otro Municipio</option>
                            <option value="Otro Pais" {{ old('residencia_habitual', $victima?->residencia_habitual) == 'Otro Pais' ? 'selected' : '' }}>Otro Pais</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6" id="especifique-residencia-wrapper" style="display: none;">
                    <div class="input-float">
                        <label for="especifique_residencia">Especifique residencia</label>
                        <input type="text" name="especifique_residencia" id="especifique_residencia" value="{{ old('especifique_residencia', $victima?->especifique_residencia) }}">
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
                            <option value="Soltero(a)" {{ old('estado_civil', $victima?->estado_civil) == 'Soltero(a)' ? 'selected' : '' }}>Soltero(a)</option>
                            <option value="Casado(a)" {{ old('estado_civil', $victima?->estado_civil) == 'Casado(a)' ? 'selected' : '' }}>Casado(a)</option>
                            <option value="Divorciado(a)" {{ old('estado_civil', $victima?->estado_civil) == 'Divorciado(a)' ? 'selected' : '' }}>Divorciado(a)</option>
                            <option value="Concubino(a) – Unión Libre" {{ old('estado_civil', $victima?->estado_civil) == 'Concubino(a) – Unión Libre' ? 'selected' : '' }}>Concubino(a) – Unión Libre</option>
                            <option value="Enamorado(a)" {{ old('estado_civil', $victima?->estado_civil) == 'Enamorado(a)' ? 'selected' : '' }}>Enamorado(a)</option>
                            <option value="Viudo(a)" {{ old('estado_civil', $victima?->estado_civil) == 'Viudo(a)' ? 'selected' : '' }}>Viudo(a)</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="rel_victima_agresor">Relación con el Agresor</label>
                        <select name="rel_victima_agresor" id="rel_victima_agresor">
                                <option value=""></option>
                                <option value="Esposo(a)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Esposo(a)' ? 'selected' : '' }}>Esposo(a)</option>
                                <option value="Concubino(a) – Unión Libre" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Concubino(a) – Unión Libre' ? 'selected' : '' }}>Concubino(a) – Unión Libre</option>
                                <option value="Enamorado(a)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Enamorado(a)' ? 'selected' : '' }}>Enamorado(a)</option>
                                <option value="Ex-esposo(a)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Ex-esposo(a)' ? 'selected' : '' }}>Ex-esposo(a)</option>
                                <option value="Ex-concubino(a)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Ex-concubino(a)' ? 'selected' : '' }}>Ex-concubino(a)</option>
                                <option value="Ex-enamorado(a)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Ex-enamorado(a)' ? 'selected' : '' }}>Ex-enamorado(a)</option>
                                <option value="Progenitores" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Progenitores' ? 'selected' : '' }}>Progenitores</option>
                                <option value="Hijos(as)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Hijos(as)' ? 'selected' : '' }}>Hijos(as)</option>
                                <option value="Hermanos(as)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Hermanos(as)' ? 'selected' : '' }}>Hermanos(as)</option>
                                <option value="Abuelos(as)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Abuelos(as)' ? 'selected' : '' }}>Abuelos(as)</option>
                                <option value="Tíos(as)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Tíos(as)' ? 'selected' : '' }}>Tíos(as)</option>
                                <option value="Nietos(as)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Nietos(as)' ? 'selected' : '' }}>Nietos(as)</option>
                                <option value="Cuñados(as)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Cuñados(as)' ? 'selected' : '' }}>Cuñados(as)</option>
                                <option value="Suegros(as)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Suegros(as)' ? 'selected' : '' }}>Suegros(as)</option>
                                <option value="Nueras – Yernos" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Nueras – Yernos' ? 'selected' : '' }}>Nueras – Yernos</option>
                                <option value="Primos(as)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Primos(as)' ? 'selected' : '' }}>Primos(as)</option>
                                <option value="Sobrinos(as)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Sobrinos(as)' ? 'selected' : '' }}>Sobrinos(as)</option>
                                <option value="Otros(as)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Otros(as)' ? 'selected' : '' }}>Otros(as)</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="hijos">Hijos</label>
                        <input type="text" name="hijos" id="hijos" value="{{ old('hijos', $victima?->hijos) }}">
                    </div>
                </div>

                
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="logro_educativo">Logro Educativo</label>
                        <select name="logro_educativo" id="logro_educativo">
                            <option value=""></option>
                            <option value="Ninguno" {{ old('logro_educativo', $victima?->logro_educativo) == 'Ninguno' ? 'selected' : '' }}>Ninguno</option>
                            <option value="Lee y Escribe" {{ old('logro_educativo', $victima?->logro_educativo) == 'Lee y Escribe' ? 'selected' : '' }}>Lee y Escribe</option>
                            <option value="Primaria" {{ old('logro_educativo', $victima?->logro_educativo) == 'Primaria' ? 'selected' : '' }}>Primaria</option>
                            <option value="Secundaria" {{ old('logro_educativo', $victima?->logro_educativo) == 'Secundaria' ? 'selected' : '' }}>Secundaria</option>
                            <option value="Tecnico" {{ old('logro_educativo', $victima?->logro_educativo) == 'Tecnico' ? 'selected' : '' }}>Tecnico</option>
                            <option value="Superior" {{ old('logro_educativo', $victima?->logro_educativo) == 'Superior' ? 'selected' : '' }}>Superior</option>
                            <option value="Universidad" {{ old('logro_educativo', $victima?->logro_educativo) == 'Universidad' ? 'selected' : '' }}>Universidad</option>

                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="actividad">Actividad</label>
                        <select name="actividad" id="actividad">
                            <option value=""></option>
                            <option value="No Trabaja" {{ old('actividad', $victima?->actividad) == 'No Trabaja' ? 'selected' : '' }}>No Trabaja</option>
                            <option value="Trabaja" {{ old('actividad', $victima?->actividad) == 'Trabaja' ? 'selected' : '' }}>Trabaja</option>
                            <option value="Labores de Casa" {{ old('actividad', $victima?->actividad) == 'Labores de Casa' ? 'selected' : '' }}>Labores de Casa</option>
                            <option value="Estudiante" {{ old('actividad', $victima?->actividad) == 'Estudiante' ? 'selected' : '' }}>Estudiante</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6" id="ingreso-wrapper" style="display: none;">
                    <div class="input-float">
                        <label for="ingreso">Ingreso</label>
                        <select name="ingreso" id="ingreso">
                            <option value=""></option>
                            <option value="No Tiene" {{ old('ingreso', $victima?->ingreso) == 'No Tiene' ? 'selected' : '' }}>No Tiene</option>
                            <option value="Diario" {{ old('ingreso', $victima?->ingreso) == 'Diario' ? 'selected' : '' }}>Diario</option>
                            <option value="Semanal" {{ old('ingreso', $victima?->ingreso) == 'Semanal' ? 'selected' : '' }}>Semanal</option>
                            <option value="Mensual" {{ old('ingreso', $victima?->ingreso) == 'Mensual' ? 'selected' : '' }}>Mensual</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6" id="monto-wrapper" style="display: none;">
                    <div class="input-float">
                        <label for="monto">Monto Bs</label>
                        <input type="number" name="monto" id="monto" value="{{ old('monto', $victima?->monto) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="idioma">Idioma</label>
                        <select name="idioma" id="idioma">
                            <option value=""></option>
                            <option value="Castellano" {{ old('idioma', $victima?->idioma) == 'Castellano' ? 'selected' : '' }}>Castellano</option>
                            <option value="Quechua" {{ old('idioma', $victima?->idioma) == 'Quechua' ? 'selected' : '' }}>Quechua</option>
                            <option value="Aymara" {{ old('idioma', $victima?->idioma) == 'Aymara' ? 'selected' : '' }}>Aymara</option>
                            <option value="Mojeño" {{ old('idioma', $victima?->idioma) == 'Mojeño' ? 'selected' : '' }}>Mojeño</option>
                            <option value="Guarani" {{ old('idioma', $victima?->idioma) == 'Guarani' ? 'selected' : '' }}>Guarani</option>
                            <option value="Extranjero" {{ old('idioma', $victima?->idioma) == 'Extranjero' ? 'selected' : '' }}>Extranjero</option>
                            <option value="Otro" {{ old('idioma', $victima?->idioma) == 'Otro' ? 'selected' : '' }}>Otro</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6" id="especifique_idioma-wrapper" style="display: none;">
                    <div class="input-float">
                        <label for="especifique_idioma">Especifique Idioma</label>
                        <input type="text" name="especifique_idioma" id="especifique_idioma" value="{{ old('especifique_idioma', $victima?->especifique_idioma) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="celular">Celular</label>
                        <input type="text" name="celular" id="celular" value="{{ old('celular', $victima?->celular) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="discapacidad">Discapacidad</label>
                        <select name="discapacidad" id="discapacidad">
                            <option value="">Seleccione</option>
                            <option value="SI" {{ old('discapacidad', $victima?->discapacidad) == 'SI' ? 'selected' : '' }}>SI</option>
                            <option value="No" {{ old('discapacidad', $victima?->discapacidad) == 'NO' ? 'selected' : '' }}>NO</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="grado_discapacidad">Grado y Descripcion</label>
                        <input type="text" name="grado_discapacidad" id="grado_discapacidad" value="{{ old('grado_discapacidad', $victima?->grado_discapacidad) }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









    <div class="card card-form mb-4">
        <h5 class="mb-4">📅 Domicilio Victima</h5>
        <div class="row">
            <div class="col-md-3 input-float">
                <label for="distrito">Distrito Urbano</label>
                <select name="distrito" id="distrito">
                    <option value=""></option>
                    <option value="Distrito 1" {{ old('distrito', $victima?->distrito) == 'Distrito 1' ? 'selected' : '' }}>Distrito 1</option>
                    <option value="Distrito 2" {{ old('distrito', $victima?->distrito) == 'Distrito 2' ? 'selected' : '' }}>Distrito 2</option>
                    <option value="Distrito 3" {{ old('distrito', $victima?->distrito) == 'Distrito 3' ? 'selected' : '' }}>Distrito 3</option>
                    <option value="Distrito 4" {{ old('distrito', $victima?->distrito) == 'Distrito 4' ? 'selected' : '' }}>Distrito 4</option>
                    <option value="Distrito 5" {{ old('distrito', $victima?->distrito) == 'Distrito 5' ? 'selected' : '' }}>Distrito 5</option>
                    <option value="Distrito 6" {{ old('distrito', $victima?->distrito) == 'Distrito 6' ? 'selected' : '' }}>Distrito 6</option>
                    <option value="Distrito 7" {{ old('distrito', $victima?->distrito) == 'Distrito 7' ? 'selected' : '' }}>Distrito 7</option>
                    <option value="Distrito 8" {{ old('distrito', $victima?->distrito) == 'Distrito 8' ? 'selected' : '' }}>Distrito 8</option>
                    <option value="Distrito 9" {{ old('distrito', $victima?->distrito) == 'Distrito 9' ? 'selected' : '' }}>Distrito 9</option>
                    <option value="Distrito 10" {{ old('distrito', $victima?->distrito) == 'Distrito 10' ? 'selected' : '' }}>Distrito 10</option>
                    <option value="Distrito 11" {{ old('distrito', $victima?->distrito) == 'Distrito 11' ? 'selected' : '' }}>Distrito 11</option>
                    <option value="Distrito 12" {{ old('distrito', $victima?->distrito) == 'Distrito 12' ? 'selected' : '' }}>Distrito 12</option>
                    <option value="Distrito 13" {{ old('distrito', $victima?->distrito) == 'Distrito 13' ? 'selected' : '' }}>Distrito 13</option>
                </select>            
            </div>
            <div class="col-md-3 input-float">
                <label for="distrito_rural">Distrito Rural</label>
                <input type="text" name="distrito_rural" id="distrito_rural" value="{{ old('distrito_rural', $victima?->distrito_rural) }}">     
            </div>
            <div class="col-md-3 input-float">
                <label for="zona_barrio">Zona/Barrio</label>
                <input type="text" name="zona_barrio" id="zona_barrio" value="{{ old('zona_barrio', $victima?->zona_barrio) }}">
            </div>
            <div class="col-md-3 input-float">
                <label for="avenida_calle">Avenida/Calle</label>
                <input type="text" name="avenida_calle" id="avenida_calle" value="{{ old('avenida_calle', $victima?->avenida_calle) }}">
            </div>
            <div class="col-md-3 input-float">
                <label for="nom_edificio">Nombre del Edificio</label>
                <input type="text" name="nom_edificio" id="nom_edificio" value="{{ old('nom_edificio', $victima?->nom_edificio) }}">
            </div>
            <div class="col-md-3 input-float">
                <label for="num_piso_departamento">Numero Piso, Departamento</label>
                <input type="text" name="num_piso_departamento" id="num_piso_departamento" value="{{ old('num_piso_departamento', $victima?->num_piso_departamento) }}">
            </div>
            <div class="col-md-3 input-float">
                <label for="num_vivienda">Número de Vivienda</label>
                <input type="text" name="num_vivienda" id="num_vivienda" value="{{ old('num_vivienda', $victima?->num_vivienda) }}">
            </div>
            <div class="col-md-3 input-float">
                <label for="telefono_referencia">Teléfono de Referencia</label>
                <input type="text" name="telefono_referencia" id="telefono_referencia" value="{{ old('telefono_referencia', $victima?->telefono_referencia) }}">
            </div>
            <div class="col-md-3 input-float">
                <label for="lugar_domicilio">Lugar de Domicilio</label>
                <select name="lugar_domicilio" id="lugar_domicilio">
                    <option value=""></option>
                    <option value="Este Municipio" {{ old('lugar_domicilio', $victima?->lugar_domicilio) == 'Este Municipio' ? 'selected' : '' }}>Este Municipio</option>
                    <option value="Otro Municipio" {{ old('lugar_domicilio', $victima?->lugar_domicilio) == 'Otro Municipio' ? 'selected' : '' }}>Otro Municipio</option>
                </select>
            </div>
            <div class="col-md-3 input-float" id="especifique-wrapper" style="display: none;">
                <label for="espcifique">Especifique</label>
                <input type="text" name="especifique" id="especifique" value="{{ old('especifique', $victima?->especifique) }}">
            </div>
            
        </div>
    </div>

@if (empty($desdeResumen))
    <div class="text-end mt-3">
        <button type="submit" class="btn btn-warning">Iniciar Denuncia</button>
    </div>
@endif




<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Lugar de nacimiento
        const selectNacimiento = document.getElementById('lugr_nacimiento');
        const wrapperNacimiento = document.getElementById('especifique-nacimiento-wrapper');

        function toggleEspecifiqueNacimiento() {
            const val = selectNacimiento.value;
            wrapperNacimiento.style.display = (val === 'Otro municipio' || val === 'Otro Pais') ? 'block' : 'none';
        }

        selectNacimiento.addEventListener('change', toggleEspecifiqueNacimiento);
        toggleEspecifiqueNacimiento(); // Inicial

        // Residencia habitual
        const selectResidencia = document.getElementById('residencia_habitual');
        const wrapperResidencia = document.getElementById('especifique-residencia-wrapper');

        function toggleEspecifiqueResidencia() {
            const val = selectResidencia.value;
            wrapperResidencia.style.display = (val === 'Otro municipio' || val === 'Otro Pais') ? 'block' : 'none';
        }

        selectResidencia.addEventListener('change', toggleEspecifiqueResidencia);
        toggleEspecifiqueResidencia(); // Inicial
    });

    document.addEventListener('DOMContentLoaded', function () {
        const actividadSelect = document.getElementById('actividad');
        const ingresoWrapper = document.getElementById('ingreso-wrapper');
        const montoWrapper = document.getElementById('monto-wrapper');

        function toggleIngresoYMonto() {
            const value = actividadSelect.value;
            const mostrar = (value === 'Trabaja');
            ingresoWrapper.style.display = mostrar ? 'block' : 'none';
            montoWrapper.style.display = mostrar ? 'block' : 'none';
        }

        actividadSelect.addEventListener('change', toggleIngresoYMonto);
        toggleIngresoYMonto(); // Ejecutar al cargar
    });


    document.addEventListener('DOMContentLoaded', function () {
        const idiomaSelect = document.getElementById('idioma');
        const especifiqueIdiomaWrapper = document.getElementById('especifique_idioma-wrapper');

        function toggleEspecifiqueIdioma() {
            especifiqueIdiomaWrapper.style.display = (idiomaSelect.value === 'Otro') ? 'block' : 'none';
        }

        idiomaSelect.addEventListener('change', toggleEspecifiqueIdioma);
        toggleEspecifiqueIdioma(); // Ejecutar al cargar
    });


    document.addEventListener('DOMContentLoaded', function () {
        const lugarDomicilioSelect = document.getElementById('lugar_domicilio');
        const especifiqueWrapper = document.getElementById('especifique-wrapper');

        function toggleEspecifiqueDomicilio() {
            especifiqueWrapper.style.display = (lugarDomicilioSelect.value === 'Otro Municipio') ? 'block' : 'none';
        }

        lugarDomicilioSelect.addEventListener('change', toggleEspecifiqueDomicilio);
        toggleEspecifiqueDomicilio(); // Ejecutar al cargar
    });


    document.addEventListener('DOMContentLoaded', function () {
        const discapacidadSelect = document.getElementById('discapacidad');
        const gradoDiscapacidadDiv = document.getElementById('grado_discapacidad').closest('.col-md-6');

        function toggleGradoDiscapacidad() {
            if (discapacidadSelect.value === 'SI') {
                gradoDiscapacidadDiv.style.display = 'block';
            } else {
                gradoDiscapacidadDiv.style.display = 'none';
            }
        }

        discapacidadSelect.addEventListener('change', toggleGradoDiscapacidad);

        toggleGradoDiscapacidad();
    });

</script>


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

