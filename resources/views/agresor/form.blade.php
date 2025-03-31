<!--<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $agresor?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ap_paterno" class="form-label">{{ __('Ap Paterno') }}</label>
            <input type="text" name="ap_paterno" class="form-control @error('ap_paterno') is-invalid @enderror" value="{{ old('ap_paterno', $agresor?->ap_paterno) }}" id="ap_paterno" placeholder="Ap Paterno">
            {!! $errors->first('ap_paterno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ap_materno" class="form-label">{{ __('Ap Materno') }}</label>
            <input type="text" name="ap_materno" class="form-control @error('ap_materno') is-invalid @enderror" value="{{ old('ap_materno', $agresor?->ap_materno) }}" id="ap_materno" placeholder="Ap Materno">
            {!! $errors->first('ap_materno', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_documento" class="form-label">{{ __('Id Documento') }}</label>
            <input type="text" name="id_documento" class="form-control @error('id_documento') is-invalid @enderror" value="{{ old('id_documento', $agresor?->id_documento) }}" id="id_documento" placeholder="Id Documento">
            {!! $errors->first('id_documento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sexo" class="form-label">{{ __('Sexo') }}</label>
            <input type="text" name="sexo" class="form-control @error('sexo') is-invalid @enderror" value="{{ old('sexo', $agresor?->sexo) }}" id="sexo" placeholder="Sexo">
            {!! $errors->first('sexo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lugr_nacimiento" class="form-label">{{ __('Lugr Nacimiento') }}</label>
            <input type="text" name="lugr_nacimiento" class="form-control @error('lugr_nacimiento') is-invalid @enderror" value="{{ old('lugr_nacimiento', $agresor?->lugr_nacimiento) }}" id="lugr_nacimiento" placeholder="Lugr Nacimiento">
            {!! $errors->first('lugr_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_nacimiento" class="form-label">{{ __('Fecha Nacimiento') }}</label>
            <input type="text" name="fecha_nacimiento" class="form-control @error('fecha_nacimiento') is-invalid @enderror" value="{{ old('fecha_nacimiento', $agresor?->fecha_nacimiento) }}" id="fecha_nacimiento" placeholder="Fecha Nacimiento">
            {!! $errors->first('fecha_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="edad" class="form-label">{{ __('Edad') }}</label>
            <input type="text" name="edad" class="form-control @error('edad') is-invalid @enderror" value="{{ old('edad', $agresor?->edad) }}" id="edad" placeholder="Edad">
            {!! $errors->first('edad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="residencia_habitual" class="form-label">{{ __('Residencia Habitual') }}</label>
            <input type="text" name="residencia_habitual" class="form-control @error('residencia_habitual') is-invalid @enderror" value="{{ old('residencia_habitual', $agresor?->residencia_habitual) }}" id="residencia_habitual" placeholder="Residencia Habitual">
            {!! $errors->first('residencia_habitual', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_civil" class="form-label">{{ __('Estado Civil') }}</label>
            <input type="text" name="estado_civil" class="form-control @error('estado_civil') is-invalid @enderror" value="{{ old('estado_civil', $agresor?->estado_civil) }}" id="estado_civil" placeholder="Estado Civil">
            {!! $errors->first('estado_civil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="logro_educativo" class="form-label">{{ __('Logro Educativo') }}</label>
            <input type="text" name="logro_educativo" class="form-control @error('logro_educativo') is-invalid @enderror" value="{{ old('logro_educativo', $agresor?->logro_educativo) }}" id="logro_educativo" placeholder="Logro Educativo">
            {!! $errors->first('logro_educativo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ultimo_curso" class="form-label">{{ __('Ultimo Curso') }}</label>
            <input type="text" name="ultimo_curso" class="form-control @error('ultimo_curso') is-invalid @enderror" value="{{ old('ultimo_curso', $agresor?->ultimo_curso) }}" id="ultimo_curso" placeholder="Ultimo Curso">
            {!! $errors->first('ultimo_curso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="actividad" class="form-label">{{ __('Actividad') }}</label>
            <input type="text" name="actividad" class="form-control @error('actividad') is-invalid @enderror" value="{{ old('actividad', $agresor?->actividad) }}" id="actividad" placeholder="Actividad">
            {!! $errors->first('actividad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="especifique" class="form-label">{{ __('Especifique') }}</label>
            <input type="text" name="especifique" class="form-control @error('especifique') is-invalid @enderror" value="{{ old('especifique', $agresor?->especifique) }}" id="especifique" placeholder="Especifique">
            {!! $errors->first('especifique', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ingreso" class="form-label">{{ __('Ingreso') }}</label>
            <input type="text" name="ingreso" class="form-control @error('ingreso') is-invalid @enderror" value="{{ old('ingreso', $agresor?->ingreso) }}" id="ingreso" placeholder="Ingreso">
            {!! $errors->first('ingreso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="monto" class="form-label">{{ __('Monto') }}</label>
            <input type="text" name="monto" class="form-control @error('monto') is-invalid @enderror" value="{{ old('monto', $agresor?->monto) }}" id="monto" placeholder="Monto">
            {!! $errors->first('monto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="idioma" class="form-label">{{ __('Idioma') }}</label>
            <input type="text" name="idioma" class="form-control @error('idioma') is-invalid @enderror" value="{{ old('idioma', $agresor?->idioma) }}" id="idioma" placeholder="Idioma">
            {!! $errors->first('idioma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="especifique_idioma" class="form-label">{{ __('Especifique Idioma') }}</label>
            <input type="text" name="especifique_idioma" class="form-control @error('especifique_idioma') is-invalid @enderror" value="{{ old('especifique_idioma', $agresor?->especifique_idioma) }}" id="especifique_idioma" placeholder="Especifique Idioma">
            {!! $errors->first('especifique_idioma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="id_domicilio_trabajo" class="form-label">{{ __('Id Domicilio Trabajo') }}</label>
            <input type="text" name="id_domicilio_trabajo" class="form-control @error('id_domicilio_trabajo') is-invalid @enderror" value="{{ old('id_domicilio_trabajo', $agresor?->id_domicilio_trabajo) }}" id="id_domicilio_trabajo" placeholder="Id Domicilio Trabajo">
            {!! $errors->first('id_domicilio_trabajo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>-->




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





<div class="card card-form mb-4">
    <h5 class="mb-4">🧍‍♂️ Datos del Agresor</h5>
    <div class="row">
        <!-- Nombre -->
        <div class="col-md-4 input-float">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $agresor?->nombre) }}">
        </div>

        <!-- Apellido Paterno -->
        <div class="col-md-4 input-float">
            <label for="ap_paterno">Apellido Paterno</label>
            <input type="text" name="ap_paterno" id="ap_paterno" value="{{ old('ap_paterno', $agresor?->ap_paterno) }}">
        </div>

        <!-- Apellido Materno -->
        <div class="col-md-4 input-float">
            <label for="ap_materno">Apellido Materno</label>
            <input type="text" name="ap_materno" id="ap_materno" value="{{ old('ap_materno', $agresor?->ap_materno) }}">
        </div>

       <!-- Sexo -->
       <div class="col-md-4 input-float">
            <label for="sexo">Sexo</label>
            <select name="sexo" id="sexo">
                <option value=""></option>
                <option value="Femenino" {{ old('sexo', $agresor?->sexo) == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                <option value="Masculino" {{ old('sexo', $agresor?->sexo) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            </select>
        </div>

        <!-- Lugar de nacimiento -->
        <div class="col-md-4 input-float">
            <label for="lugr_nacimiento">Lugar de Nacimiento</label>
            <select name="lugr_nacimiento" id="lugr_nacimiento">
                <option value=""></option>
                <option value="Este Municipio" {{ old('lugr_nacimiento', $agresor?->lugr_nacimiento) == 'Este Municipio' ? 'selected' : '' }}>Este Municipio</option>
                <option value="Otro municipio" {{ old('lugr_nacimiento', $agresor?->lugr_nacimiento) == 'Otro Municipio' ? 'selected' : '' }}>Otro Municipio</option>
                <option value="Otro Pais" {{ old('lugr_nacimiento', $agresor?->lugr_nacimiento) == 'Otro Pais' ? 'selected' : '' }}>Otro Pais</option>
            </select>
        </div>

        <!-- Especifique Lugar -->
        <div class="col-md-4 input-float">
            <label for="especifique_lugar">Especifique lugar</label>
            <input type="text" name="especifique_lugar" id="especifique_lugar" value="{{ old('especifique_lugar', $agresor?->especifique_lugar) }}">
        </div>

        <!-- Fecha nacimiento -->
        <div class="col-md-4 input-float">
            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ old('fecha_nacimiento', $agresor?->fecha_nacimiento) }}">
        </div>

        <!-- Edad -->
        <div class="col-md-4 input-float">
            <label for="edad">Edad</label>
            <input type="text" name="edad" id="edad" value="{{ old('edad', $agresor?->edad) }}">
        </div>

        <!-- Residencia habitual -->
        <div class="col-md-4 input-float">
            <label for="residencia_habitual">Residencia Habitual</label>
            <select name="residencia_habitual" id="residencia_habitual">
                <option value=""></option>
                <option value="Este Municipio" {{ old('residencia_habitual', $agresor?->residencia_habitual) == 'Este Municipio' ? 'selected' : '' }}>Este Municipio</option>
                <option value="Otro municipio" {{ old('residencia_habitual', $agresor?->residencia_habitual) == 'Otro Municipio' ? 'selected' : '' }}>Otro Municipio</option>
                <option value="Otro Pais" {{ old('residencia_habitual', $agresor?->residencia_habitual) == 'Otro Pais' ? 'selected' : '' }}>Otro Pais</option>
            </select>
        </div>

        <!-- Especifique Residencia -->
        <div class="col-md-4 input-float">
            <label for="especifique_residencia">Especifique residencia</label>
            <input type="text" name="especifique_residencia" id="especifique_residencia" value="{{ old('especifique_residencia', $agresor?->especifique_residencia) }}">
        </div>

       <!-- Estado civil -->
       <div class="col-md-4 input-float">
            <label for="estado_civil">Estado Civil</label>
            <select name="estado_civil" id="estado_civil">
                <option value=""></option>
                <option value="Soltero(a)" {{ old('estado_civil', $agresor?->estado_civil) == 'Soltero(a)' ? 'selected' : '' }}>Soltero(a)</option>
                <option value="Casado(a)" {{ old('estado_civil', $agresor?->estado_civil) == 'Casado(a)' ? 'selected' : '' }}>Casado(a)</option>
                <option value="Divorciado(a)" {{ old('estado_civil', $agresor?->estado_civil) == 'Divorciado(a)' ? 'selected' : '' }}>Divorciado(a)</option>
                <option value="Viudo(a)" {{ old('estado_civil', $agresor?->estado_civil) == 'Viudo(a)' ? 'selected' : '' }}>Viudo(a)</option>
            </select>
        </div>

        <!-- Logro Educativo -->
        <div class="col-md-4 input-float">
            <label for="logro_educativo">Logro Educativo</label>
            <input type="text" name="logro_educativo" id="logro_educativo" value="{{ old('logro_educativo', $agresor?->logro_educativo) }}">
        </div>

        <!-- Último Curso -->
        <div class="col-md-4 input-float">
            <label for="ultimo_curso">Último Curso</label>
            <input type="text" name="ultimo_curso" id="ultimo_curso" value="{{ old('ultimo_curso', $agresor?->ultimo_curso) }}">
        </div>

        <!-- Actividad -->
        <div class="col-md-4 input-float">
            <label for="actividad">Actividad</label>
            <input type="text" name="actividad" id="actividad" value="{{ old('actividad', $agresor?->actividad) }}">
        </div>


        <!-- Especifique Actividad -->
        <div class="col-md-4 input-float">
            <label for="especifique_actividad">Especifique Actividad</label>
            <input type="text" name="especifique_actividad" id="especifique_actividad" value="{{ old('especifique_actividad', $agresor?->especifique_actividad) }}">
        </div>

        
        <!-- Ingreso -->
        <div class="col-md-4 input-float">
            <label for="ingreso">Ingreso</label>
            <input type="text" name="ingreso" id="ingreso" value="{{ old('ingreso', $agresor?->ingreso) }}">
        </div>

        <!-- Monto -->
        <div class="col-md-4 input-float">
            <label for="monto">Monto</label>
            <input type="text" name="monto" id="monto" value="{{ old('monto', $agresor?->monto) }}">
        </div>

        <!-- Idioma -->
        <div class="col-md-4 input-float">
            <label for="idioma">Idioma</label>
            <select name="idioma" id="idioma">
                <option value="">Seleccione</option>
                <option value="Español" {{ old('idioma', $agresor?->idioma) == 'Español' ? 'selected' : '' }}>Español</option>
                <option value="Quechua" {{ old('idioma', $agresor?->idioma) == 'Quechua' ? 'selected' : '' }}>Quechua</option>
                <option value="Aymara" {{ old('idioma', $agresor?->idioma) == 'Aymara' ? 'selected' : '' }}>Aymara</option>
                <option value="Otro" {{ old('idioma', $agresor?->idioma) == 'Otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        <!-- Especifique Idioma -->
        <div class="col-md-4 input-float">
            <label for="especifique_idioma">Especifique Idioma</label>
            <input type="text" name="especifique_idioma" id="especifique_idioma" value="{{ old('especifique_idioma', $agresor?->especifique_idioma) }}">
        </div>

          <!-- Num Documento -->
        <div class="col-md-4 input-float">
            <label for="num_documento">Numero de Documento</label>
            <input type="text" name="num_documento" id="num_documento" value="{{ old('num_documento', $agresor?->num_documento) }}">
        </div>

    </div>

    <div class="text-end mt-4">
        <button type="submit" class="btn btn-submit">Guardar</button>
    </div>
</div>
