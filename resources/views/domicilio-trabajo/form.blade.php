<!--<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_empresa" class="form-label">{{ __('Nombre Empresa') }}</label>
            <input type="text" name="nombre_empresa" class="form-control @error('nombre_empresa') is-invalid @enderror" value="{{ old('nombre_empresa', $domicilioTrabajo?->nombre_empresa) }}" id="nombre_empresa" placeholder="Nombre Empresa">
            {!! $errors->first('nombre_empresa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="zona_barrio" class="form-label">{{ __('Zona Barrio') }}</label>
            <input type="text" name="zona_barrio" class="form-control @error('zona_barrio') is-invalid @enderror" value="{{ old('zona_barrio', $domicilioTrabajo?->zona_barrio) }}" id="zona_barrio" placeholder="Zona Barrio">
            {!! $errors->first('zona_barrio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="avenida_calle" class="form-label">{{ __('Avenida Calle') }}</label>
            <input type="text" name="avenida_calle" class="form-control @error('avenida_calle') is-invalid @enderror" value="{{ old('avenida_calle', $domicilioTrabajo?->avenida_calle) }}" id="avenida_calle" placeholder="Avenida Calle">
            {!! $errors->first('avenida_calle', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono_trabajo" class="form-label">{{ __('Telefono Trabajo') }}</label>
            <input type="text" name="telefono_trabajo" class="form-control @error('telefono_trabajo') is-invalid @enderror" value="{{ old('telefono_trabajo', $domicilioTrabajo?->telefono_trabajo) }}" id="telefono_trabajo" placeholder="Telefono Trabajo">
            {!! $errors->first('telefono_trabajo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_edificio" class="form-label">{{ __('Num Edificio') }}</label>
            <input type="text" name="num_edificio" class="form-control @error('num_edificio') is-invalid @enderror" value="{{ old('num_edificio', $domicilioTrabajo?->num_edificio) }}" id="num_edificio" placeholder="Num Edificio">
            {!! $errors->first('num_edificio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>-->






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
</style>

<div class="card card-form mb-4">
    <h5 class="mb-4">🏢 Domicilio de Trabajo</h5>
    <div class="row">

        <!-- Nombre Empresa -->
        <div class="col-md-6 input-float">
            <i class="material-icons">business</i>
            <label for="nombre_empresa">Nombre Empresa</label>
            <input type="text" name="nombre_empresa" id="nombre_empresa"
                   value="{{ old('nombre_empresa', $domicilioTrabajo?->nombre_empresa) }}"
                   class="@error('nombre_empresa') is-invalid @enderror">
            {!! $errors->first('nombre_empresa', '<div class="invalid-feedback d-block" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <!-- Zona/Barrio -->
        <div class="col-md-6 input-float">
            <i class="material-icons">location_on</i>
            <label for="zona_barrio">Zona/Barrio</label>
            <input type="text" name="zona_barrio" id="zona_barrio"
                   value="{{ old('zona_barrio', $domicilioTrabajo?->zona_barrio) }}"
                   class="@error('zona_barrio') is-invalid @enderror">
            {!! $errors->first('zona_barrio', '<div class="invalid-feedback d-block" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <!-- Avenida/Calle -->
        <div class="col-md-6 input-float">
            <i class="material-icons">map</i>
            <label for="avenida_calle">Avenida/Calle</label>
            <input type="text" name="avenida_calle" id="avenida_calle"
                   value="{{ old('avenida_calle', $domicilioTrabajo?->avenida_calle) }}"
                   class="@error('avenida_calle') is-invalid @enderror">
            {!! $errors->first('avenida_calle', '<div class="invalid-feedback d-block" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <!-- Teléfono Trabajo -->
        <div class="col-md-6 input-float">
            <i class="material-icons">phone</i>
            <label for="telefono_trabajo">Teléfono Trabajo</label>
            <input type="text" name="telefono_trabajo" id="telefono_trabajo"
                   value="{{ old('telefono_trabajo', $domicilioTrabajo?->telefono_trabajo) }}"
                   class="@error('telefono_trabajo') is-invalid @enderror">
            {!! $errors->first('telefono_trabajo', '<div class="invalid-feedback d-block" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <!-- Número de Edificio -->
        <div class="col-md-6 input-float">
            <i class="material-icons">apartment</i>
            <label for="num_edificio">Número de Edificio</label>
            <input type="text" name="num_edificio" id="num_edificio"
                   value="{{ old('num_edificio', $domicilioTrabajo?->num_edificio) }}"
                   class="@error('num_edificio') is-invalid @enderror">
            {!! $errors->first('num_edificio', '<div class="invalid-feedback d-block" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="col-md-4 input-float">
            <label for="id_agresor">Agresor</label>
            <select name="id_agresor" id="id_agresor" class="form-control">
                <option value="">Seleccione un agresor</option>
                @foreach ($agresores as $agresor)
                    <option value="{{ $agresor->id }}"
                        {{ old('id_agresor', $domicilioTrabajo->id_agresor ?? '') == $agresor->id ? 'selected' : '' }}>
                        {{ $agresor->nombre }}
                    </option>
                @endforeach
            </select>
        </div>


    </div>

    <div class="text-end mt-4">
        <button type="submit" class="btn btn-submit">{{ __('Guardar') }}</button>
    </div>
</div>

