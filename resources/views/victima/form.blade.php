<!--<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $victima?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ap_paterno" class="form-label">{{ __('Ap Paterno') }}</label>
            <input type="text" name="ap_paterno" class="form-control @error('ap_paterno') is-invalid @enderror" value="{{ old('ap_paterno', $victima?->ap_paterno) }}" id="ap_paterno" placeholder="Ap Paterno">
            {!! $errors->first('ap_paterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ap_materno" class="form-label">{{ __('Ap Materno') }}</label>
            <input type="text" name="ap_materno" class="form-control @error('ap_materno') is-invalid @enderror" value="{{ old('ap_materno', $victima?->ap_materno) }}" id="ap_materno" placeholder="Ap Materno">
            {!! $errors->first('ap_materno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sexo" class="form-label">{{ __('Sexo') }}</label>
            <input type="text" name="sexo" class="form-control @error('sexo') is-invalid @enderror" value="{{ old('sexo', $victima?->sexo) }}" id="sexo" placeholder="Sexo">
            {!! $errors->first('sexo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lugr_nacimiento" class="form-label">{{ __('Lugr Nacimiento') }}</label>
            <input type="text" name="lugr_nacimiento" class="form-control @error('lugr_nacimiento') is-invalid @enderror" value="{{ old('lugr_nacimiento', $victima?->lugr_nacimiento) }}" id="lugr_nacimiento" placeholder="Lugr Nacimiento">
            {!! $errors->first('lugr_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nacimiento" class="form-label">{{ __('Fecha Nacimiento') }}</label>
            <input type="text" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ old('fecha_nacimiento', $victima?->fecha_nacimiento) }}" id="fecha_nacimiento" placeholder="Fecha Nacimiento">
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="edad" class="form-label">{{ __('Edad') }}</label>
            <input type="text" name="edad" class="form-control @error('edad') is-invalid @enderror" value="{{ old('edad', $victima?->edad) }}" id="edad" placeholder="Edad">
            {!! $errors->first('edad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="residencia_habitual" class="form-label">{{ __('Residencia Habitual') }}</label>
            <input type="text" name="residencia_habitual" class="form-control @error('residencia_habitual') is-invalid @enderror" value="{{ old('residencia_habitual', $victima?->residencia_habitual) }}" id="residencia_habitual" placeholder="Residencia Habitual">
            {!! $errors->first('residencia_habitual', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_civil" class="form-label">{{ __('Estado Civil') }}</label>
            <input type="text" name="estado_civil" class="form-control @error('estado_civil') is-invalid @enderror" value="{{ old('estado_civil', $victima?->estado_civil) }}" id="estado_civil" placeholder="Estado Civil">
            {!! $errors->first('estado_civil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="rel_victima_agresor" class="form-label">{{ __('Rel Victima Agresor') }}</label>
            <input type="text" name="rel_victima_agresor" class="form-control @error('rel_victima_agresor') is-invalid @enderror" value="{{ old('rel_victima_agresor', $victima?->rel_victima_agresor) }}" id="rel_victima_agresor" placeholder="Rel Victima Agresor">
            {!! $errors->first('rel_victima_agresor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hijos" class="form-label">{{ __('Hijos') }}</label>
            <input type="text" name="hijos" class="form-control @error('hijos') is-invalid @enderror" value="{{ old('hijos', $victima?->hijos) }}" id="hijos" placeholder="Hijos">
            {!! $errors->first('hijos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="logro_educativo" class="form-label">{{ __('Logro Educativo') }}</label>
            <input type="text" name="logro_educativo" class="form-control @error('logro_educativo') is-invalid @enderror" value="{{ old('logro_educativo', $victima?->logro_educativo) }}" id="logro_educativo" placeholder="Logro Educativo">
            {!! $errors->first('logro_educativo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="actividad" class="form-label">{{ __('Actividad') }}</label>
            <input type="text" name="actividad" class="form-control @error('actividad') is-invalid @enderror" value="{{ old('actividad', $victima?->actividad) }}" id="actividad" placeholder="Actividad">
            {!! $errors->first('actividad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ingreso" class="form-label">{{ __('Ingreso') }}</label>
            <input type="text" name="ingreso" class="form-control @error('ingreso') is-invalid @enderror" value="{{ old('ingreso', $victima?->ingreso) }}" id="ingreso" placeholder="Ingreso">
            {!! $errors->first('ingreso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="monto" class="form-label">{{ __('Monto') }}</label>
            <input type="text" name="monto" class="form-control @error('monto') is-invalid @enderror" value="{{ old('monto', $victima?->monto) }}" id="monto" placeholder="Monto">
            {!! $errors->first('monto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="idioma" class="form-label">{{ __('Idioma') }}</label>
            <input type="text" name="idioma" class="form-control @error('idioma') is-invalid @enderror" value="{{ old('idioma', $victima?->idioma) }}" id="idioma" placeholder="Idioma">
            {!! $errors->first('idioma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="especifique_idioma" class="form-label">{{ __('Especifique Idioma') }}</label>
            <input type="text" name="especifique_idioma" class="form-control @error('especifique_idioma') is-invalid @enderror" value="{{ old('especifique_idioma', $victima?->especifique_idioma) }}" id="especifique_idioma" placeholder="Especifique Idioma">
            {!! $errors->first('especifique_idioma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_domicilio" class="form-label">{{ __('Id Domicilio') }}</label>
            <input type="text" name="id_domicilio" class="form-control @error('id_domicilio') is-invalid @enderror" value="{{ old('id_domicilio', $victima?->id_domicilio) }}" id="id_domicilio" placeholder="Id Domicilio">
            {!! $errors->first('id_domicilio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_documento" class="form-label">{{ __('Id Documento') }}</label>
            <input type="text" name="id_documento" class="form-control @error('id_documento') is-invalid @enderror" value="{{ old('id_documento', $victima?->id_documento) }}" id="id_documento" placeholder="Id Documento">
            {!! $errors->first('id_documento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>-->





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


<div class="row">
    <!-- 🧍 Información Personal -->
    <div class="col-md-6">
        <div class="card card-form mb-4">
            <h5 class="mb-4">🧍 Datos de la victima</h5>
            <div class="row">
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $victima?->nombre) }}">
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
                <div class="col-md-6">
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
                        <label for="residencia_habitual">Residencia Habitual</label>
                        <select name="residencia_habitual" id="residencia_habitual">
                            <option value=""></option>
                            <option value="Este Municipio" {{ old('residencia_habitual', $victima?->residencia_habitual) == 'Este Municipio' ? 'selected' : '' }}>Este Municipio</option>
                            <option value="Otro municipio" {{ old('residencia_habitual', $victima?->residencia_habitual) == 'Otro Municipio' ? 'selected' : '' }}>Otro Municipio</option>
                            <option value="Otro Pais" {{ old('residencia_habitual', $victima?->residencia_habitual) == 'Otro Pais' ? 'selected' : '' }}>Otro Pais</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
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
                            <option value="Enamorado(a)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Enamorado(a)' ? 'selected' : '' }}>Enamorado(a)</option>
                            <option value="Suegro(a)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Suegro(a)' ? 'selected' : '' }}>Suegro(a)</option>
                            <option value="Hemano(a)" {{ old('rel_victima_agresor', $victima?->rel_victima_agresor) == 'Hemano(a)' ? 'selected' : '' }}>Hemano(a)</option>
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
                        <input type="text" name="logro_educativo" id="logro_educativo" value="{{ old('logro_educativo', $victima?->logro_educativo) }}">
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

                <div class="col-md-6">
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

                <div class="col-md-6">
                    <div class="input-float">
                        <label for="monto">Monto</label>
                        <input type="number" name="monto" id="monto" value="{{ old('monto', $victima?->monto) }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-float">
                        <label for="idioma">Idioma</label>
                        <select name="idioma" id="idioma">
                            <option value=""></option>
                            <option value="Español" {{ old('idioma', $victima?->idioma) == 'Español' ? 'selected' : '' }}>Español</option>
                            <option value="Quechua" {{ old('idioma', $victima?->idioma) == 'Quechua' ? 'selected' : '' }}>Quechua</option>
                            <option value="Aymara" {{ old('idioma', $victima?->idioma) == 'Aymara' ? 'selected' : '' }}>Aymara</option>
                            <option value="Otro" {{ old('idioma', $victima?->idioma) == 'Otro' ? 'selected' : '' }}>Otro</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
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
            </div>
        </div>
    </div>
</div>









    <div class="card card-form mb-4">
        <h5 class="mb-4">📅 Domicilio Victima</h5>
        <div class="row">
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
                <label for="telefono_domicilio">Teléfono Domicilio</label>
                <input type="text" name="telefono_domicilio" id="telefono_domicilio" value="{{ old('telefono_domicilio', $victima?->telefono_domicilio) }}">
            </div>
            <div class="col-md-3 input-float">
                <label for="lugar_domicilio">Lugar de Domicilio</label>
                <select name="lugar_domicilio" id="lugar_domicilio">
                    <option value=""></option>
                    <option value="Este Municipio" {{ old('lugar_domicilio', $victima?->lugar_domicilio) == 'Este Municipio' ? 'selected' : '' }}>Este Municipio</option>
                    <option value="Otro Municipio" {{ old('lugar_domicilio', $victima?->lugar_domicilio) == 'Otro Municipio' ? 'selected' : '' }}>Otro Municipio</option>
                    <option value="Zona Sur" {{ old('lugar_domicilio', $victima?->lugar_domicilio) == 'Zona Sur' ? 'selected' : '' }}>Zona Sur</option>
                    <option value="Zona Norte" {{ old('lugar_domicilio', $victima?->lugar_domicilio) == 'Zona Norte' ? 'selected' : '' }}>Zona Norte</option>
                </select>
            </div>
            <div class="col-md-3 input-float">
                <label for="espcifique">Especifique</label>
                <input type="text" name="especifique" id="especifique" value="{{ old('especifique', $victima?->especifique) }}">
            </div>
            
        </div>
    </div>

<!-- Botón de guardar -->
<div class="text-end mt-3">
    <button type="submit" class="btn btn-submit">Iniciar Denuncia</button>
</div>
