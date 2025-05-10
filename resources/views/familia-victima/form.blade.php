<!--<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $familiaVictima?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellidos" class="form-label">{{ __('Apellidos') }}</label>
            <input type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{ old('apellidos', $familiaVictima?->apellidos) }}" id="apellidos" placeholder="Apellidos">
            {!! $errors->first('apellidos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="parentesco" class="form-label">{{ __('Parentesco') }}</label>
            <input type="text" name="parentesco" class="form-control @error('parentesco') is-invalid @enderror" value="{{ old('parentesco', $familiaVictima?->parentesco) }}" id="parentesco" placeholder="Parentesco">
            {!! $errors->first('parentesco', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sexo" class="form-label">{{ __('Sexo') }}</label>
            <input type="text" name="sexo" class="form-control @error('sexo') is-invalid @enderror" value="{{ old('sexo', $familiaVictima?->sexo) }}" id="sexo" placeholder="Sexo">
            {!! $errors->first('sexo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="edad" class="form-label">{{ __('Edad') }}</label>
            <input type="text" name="edad" class="form-control @error('edad') is-invalid @enderror" value="{{ old('edad', $familiaVictima?->edad) }}" id="edad" placeholder="Edad">
            {!! $errors->first('edad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ocupacion" class="form-label">{{ __('Ocupacion') }}</label>
            <input type="text" name="ocupacion" class="form-control @error('ocupacion') is-invalid @enderror" value="{{ old('ocupacion', $familiaVictima?->ocupacion) }}" id="ocupacion" placeholder="Ocupacion">
            {!! $errors->first('ocupacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observacion" class="form-label">{{ __('Observacion') }}</label>
            <input type="text" name="observacion" class="form-control @error('observacion') is-invalid @enderror" value="{{ old('observacion', $familiaVictima?->observacion) }}" id="observacion" placeholder="Observacion">
            {!! $errors->first('observacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="victima_id" class="form-label">{{ __('Victima Id') }}</label>
            <input type="text" name="victima_id" class="form-control @error('victima_id') is-invalid @enderror" value="{{ old('victima_id', $familiaVictima?->victima_id) }}" id="victima_id" placeholder="Victima Id">
            {!! $errors->first('victima_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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

<form id="form-familia-victima" method="POST" action="{{ route('familia-victima.store') }}">
    @csrf
    <div class="card card-form mb-4">
    <h5 class="mb-4">👪 Familiar de la víctima</h5>
    <div class="row">
        <div class="col-md-6 input-float">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" 
                   value="{{ old('nombre', $familiaVictima?->nombre) }}" 
                   style="text-transform: uppercase;" 
                   oninput="this.value = this.value.toUpperCase();">
        </div>

        <div class="col-md-6 input-float">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos" 
                   value="{{ old('apellidos', $familiaVictima?->apellidos) }}" 
                   style="text-transform: uppercase;" 
                   oninput="this.value = this.value.toUpperCase();">
        </div>

        <div class="col-md-6 input-float">
            <label for="parentesco">Parentesco</label>
            <input type="text" name="parentesco" id="parentesco" 
                   value="{{ old('parentesco', $familiaVictima?->parentesco) }}" 
                   style="text-transform: uppercase;" 
                   oninput="this.value = this.value.toUpperCase();">
        </div>

        <div class="col-md-6 input-float">
            <label for="sexo">Sexo</label>
            <select name="sexo" id="sexo">
                <option value=""></option>
                <option value="Femenino" {{ old('sexo', $familiaVictima?->sexo) == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                <option value="Masculino" {{ old('sexo', $familiaVictima?->sexo) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Otro" {{ old('sexo', $familiaVictima?->sexo) == 'Otro' ? 'selected' : '' }}>Otro</option>
            </select>
        </div>

        <div class="col-md-6 input-float">
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" 
                   value="{{ old('edad', $familiaVictima?->edad) }}">
        </div>

        <div class="col-md-6 input-float">
            <label for="ocupacion">Ocupación</label>
            <input type="text" name="ocupacion" id="ocupacion" 
                   value="{{ old('ocupacion', $familiaVictima?->ocupacion) }}" 
                   style="text-transform: uppercase;" 
                   oninput="this.value = this.value.toUpperCase();">
        </div>

        <div class="col-md-12 input-float">
            <label for="observacion">Observación</label>
            <input type="text" name="observacion" id="observacion" 
                   value="{{ old('observacion', $familiaVictima?->observacion) }}" 
                   style="text-transform: uppercase;" 
                   oninput="this.value = this.value.toUpperCase();">
        </div>

        <div class="col-md-6 input-float">
            <label for="victima_id">ID de la Víctima</label>
            <input type="hidden" name="victima_id" 
                   value="{{ old('victima_id', $victima_id ?? $familiaVictima?->victima_id) }}">
        </div>
    </div>
</div>


<div class="text-end mt-3">
    <button type="submit" class="btn btn-submit">Guardar Familiar</button>
</div>
</form>




