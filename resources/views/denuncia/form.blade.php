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

        {{-- Tipo de Violencia --}}
        <div class="col-md-6 input-float">
            <label for="id_tipo_violencia">Tipo de Violencia *</label>
            <select name="id_tipo_violencia" id="id_tipo_violencia" class="form-select-custom">
                <option value="">Seleccione un tipo</option>
                @foreach ($tiposViolencia as $tipo)
                    <option value="{{ $tipo->id }}">{{ $tipo->nombre }}</option>
                @endforeach
            </select>
        </div>

        {{-- Violencia --}}
<div class="col-md-6 input-float">
    <label for="id_violencia">Violencia *</label>
    <select name="id_violencia" id="id_violencia" class="form-select-custom">
        <option value="">Seleccione un tipo</option>
        @foreach ($violencias as $violencia)
            <option value="{{ $violencia->id }}" data-tipo="{{ $violencia->id_tipo_violencia }}">
                {{ $violencia->nombre }}
            </option>
        @endforeach
    </select>
</div>


        {{-- Condición --}}
        <div class="col-md-6 input-float">
            <i class="material-icons">assignment_ind</i>
            <label for="condicion">Condición</label>
            <input type="text" name="condicion" id="condicion"
                   class="@error('condicion') is-invalid @enderror"
                   value="{{ old('condicion', $denuncia?->condicion) }}">
        </div>
    </div>

    <div class="text-end mt-4">
        <button type="submit" class="btn btn-submit">Guardar</button>
    </div>
</div>



{{-- Filtro dinámico sin usar AJAX --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tipoSelect = document.getElementById('id_tipo_violencia');
    const violenciaSelect = document.getElementById('id_violencia');
    const todasLasOpciones = Array.from(violenciaSelect.options);

    tipoSelect.addEventListener('change', function () {
        const tipoId = this.value;

        // Limpiar y agregar solo las que coincidan
        violenciaSelect.innerHTML = '<option value="">Seleccione un accion</option>';

        const opcionesFiltradas = todasLasOpciones.filter(option => {
            return option.dataset.tipo === tipoId;
        });

        opcionesFiltradas.forEach(option => violenciaSelect.appendChild(option));
    });
});
</script>
