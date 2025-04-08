<!--<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="zona_barrio" class="form-label">{{ __('Zona Barrio') }}</label>
            <input type="text" name="zona_barrio" class="form-control @error('zona_barrio') is-invalid @enderror" value="{{ old('zona_barrio', $domicilio?->zona_barrio) }}" id="zona_barrio" placeholder="Zona Barrio">
            {!! $errors->first('zona_barrio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="avenida_calle" class="form-label">{{ __('Avenida Calle') }}</label>
            <input type="text" name="avenida_calle" class="form-control @error('avenida_calle') is-invalid @enderror" value="{{ old('avenida_calle', $domicilio?->avenida_calle) }}" id="avenida_calle" placeholder="Avenida Calle">
            {!! $errors->first('avenida_calle', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nom_edificio" class="form-label">{{ __('Nom Edificio') }}</label>
            <input type="text" name="nom_edificio" class="form-control @error('nom_edificio') is-invalid @enderror" value="{{ old('nom_edificio', $domicilio?->nom_edificio) }}" id="nom_edificio" placeholder="Nom Edificio">
            {!! $errors->first('nom_edificio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono_domicilio" class="form-label">{{ __('Telefono Domicilio') }}</label>
            <input type="text" name="telefono_domicilio" class="form-control @error('telefono_domicilio') is-invalid @enderror" value="{{ old('telefono_domicilio', $domicilio?->telefono_domicilio) }}" id="telefono_domicilio" placeholder="Telefono Domicilio">
            {!! $errors->first('telefono_domicilio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_distrito" class="form-label">{{ __('Num Distrito') }}</label>
            <input type="text" name="num_distrito" class="form-control @error('num_distrito') is-invalid @enderror" value="{{ old('num_distrito', $domicilio?->num_distrito) }}" id="num_distrito" placeholder="Num Distrito">
            {!! $errors->first('num_distrito', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_vivienda" class="form-label">{{ __('Num Vivienda') }}</label>
            <input type="text" name="num_vivienda" class="form-control @error('num_vivienda') is-invalid @enderror" value="{{ old('num_vivienda', $domicilio?->num_vivienda) }}" id="num_vivienda" placeholder="Num Vivienda">
            {!! $errors->first('num_vivienda', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_piso_departamento" class="form-label">{{ __('Num Piso Departamento') }}</label>
            <input type="text" name="num_piso_departamento" class="form-control @error('num_piso_departamento') is-invalid @enderror" value="{{ old('num_piso_departamento', $domicilio?->num_piso_departamento) }}" id="num_piso_departamento" placeholder="Num Piso Departamento">
            {!! $errors->first('num_piso_departamento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_celular" class="form-label">{{ __('Num Celular') }}</label>
            <input type="text" name="num_celular" class="form-control @error('num_celular') is-invalid @enderror" value="{{ old('num_celular', $domicilio?->num_celular) }}" id="num_celular" placeholder="Num Celular">
            {!! $errors->first('num_celular', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lugar_domicilio" class="form-label">{{ __('Lugar Domicilio') }}</label>
            <input type="text" name="lugar_domicilio" class="form-control @error('lugar_domicilio') is-invalid @enderror" value="{{ old('lugar_domicilio', $domicilio?->lugar_domicilio) }}" id="lugar_domicilio" placeholder="Lugar Domicilio">
            {!! $errors->first('lugar_domicilio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="especifique" class="form-label">{{ __('Especifique') }}</label>
            <input type="text" name="especifique" class="form-control @error('especifique') is-invalid @enderror" value="{{ old('especifique', $domicilio?->especifique) }}" id="especifique" placeholder="Especifique">
            {!! $errors->first('especifique', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
    <h5 class="mb-4">📅 Domicilio Victima / Agresor</h5>
    <div class="row">
        <div class="col-md-3 input-float">
            <label for="zona_barrio">Zona/Barrio</label>
            <input type="text" name="zona_barrio" id="zona_barrio" value="{{ old('zona_barrio', $domicilio?->zona_barrio) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="avenida_calle">Avenida/Calle</label>
            <input type="text" name="avenida_calle" id="avenida_calle" value="{{ old('avenida_calle', $domicilio?->avenida_calle) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="nom_edificio">Nombre del Edificio</label>
            <input type="text" name="nom_edificio" id="nom_edificio" value="{{ old('nom_edificio', $domicilio?->nom_edificio) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="num_piso_departamento">Numero Piso, Departamento</label>
            <input type="text" name="num_piso_departamento" id="num_piso_departamento" value="{{ old('num_piso_departamento', $domicilio?->num_piso_departamento) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="num_vivienda">Número de Vivienda</label>
            <input type="text" name="num_vivienda" id="num_vivienda" value="{{ old('num_vivienda', $domicilio?->num_vivienda) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="telefono_domicilio">Teléfono Domicilio</label>
            <input type="text" name="telefono_domicilio" id="telefono_domicilio" value="{{ old('telefono_domicilio', $domicilio?->telefono_domicilio) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="lugar_domicilio">Lugar de Domicilio</label>
            <select name="lugar_domicilio" id="lugar_domicilio">
                <option value=""></option>
                <option value="Este Municipio" {{ old('lugar_domicilio', $domicilio?->lugar_domicilio) == 'Este Municipio' ? 'selected' : '' }}>Este Municipio</option>
                <option value="Otro Municipio" {{ old('lugar_domicilio', $domicilio?->lugar_domicilio) == 'Otro Municipio' ? 'selected' : '' }}>Otro Municipio</option>
                <option value="Zona Sur" {{ old('lugar_domicilio', $domicilio?->lugar_domicilio) == 'Zona Sur' ? 'selected' : '' }}>Zona Sur</option>
                <option value="Zona Norte" {{ old('lugar_domicilio', $domicilio?->lugar_domicilio) == 'Zona Norte' ? 'selected' : '' }}>Zona Norte</option>
            </select>
        </div>
        <div class="col-md-3 input-float">
            <label for="espcifique">Especifique</label>
            <input type="text" name="especifique" id="especifique" value="{{ old('especifique', $domicilio?->especifique) }}">
        </div>
        <div class="col-md-3 input-float">
            <label for="num_distrito">Número de Distrito</label>
            <input type="text" name="num_distrito" id="num_distrito" value="{{ old('num_distrito', $domicilio?->num_distrito) }}">
        </div>

        <div class="col-md-3 input-float">
            <label for="persona">Persona</label>
            <select id="persona" name="persona" onchange="togglePersona()" class="form-control">
                <option value="">Seleccione</option>
                <option value="victima">Víctima</option>
                <option value="agresor">Agresor</option>
            </select>
        </div>

        <div class="col-md-3 input-float" id="select_victima" style="display:none;">
            <label for="id_victima">Seleccionar Víctima</label>
            <select name="id_victima" class="form-control">
                <option value="">Seleccione</option>
                @foreach ($victimas as $victima)
                    <option value="{{ $victima->id }}" {{ old('id_victima', $domicilio->id_victima ?? '') == $victima->id ? 'selected' : '' }}>
                        {{ $victima->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-3 input-float" id="select_agresor" style="display:none;">
            <label for="id_agresor">Seleccionar Agresor</label>
            <select name="id_agresor" class="form-control">
                <option value="">Seleccione</option>
                @foreach ($agresores as $agresor)
                    <option value="{{ $agresor->id }}" {{ old('id_agresor', $domicilio->id_agresor ?? '') == $agresor->id ? 'selected' : '' }}>
                        {{ $agresor->nombre }}
                    </option>
                @endforeach
            </select>
        </div>




    </div>
    <div class="text-end mt-4">
        <button type="submit" class="btn btn-submit">Guardar</button>
    </div>
</div>



<script>
function togglePersona() {
    const tipo = document.getElementById("persona").value;
    document.getElementById("select_victima").style.display = tipo === "victima" ? "block" : "none";
    document.getElementById("select_agresor").style.display = tipo === "agresor" ? "block" : "none";
}
</script>
