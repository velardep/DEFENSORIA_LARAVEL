<!--<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="numero" class="form-label">{{ __('Numero') }}</label>
            <input type="text" name="numero" class="form-control @error('numero') is-invalid @enderror" value="{{ old('numero', $documento?->numero) }}" id="numero" placeholder="Numero">
            {!! $errors->first('numero', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="expedido" class="form-label">{{ __('Expedido') }}</label>
            <input type="text" name="expedido" class="form-control @error('expedido') is-invalid @enderror" value="{{ old('expedido', $documento?->expedido) }}" id="expedido" placeholder="Expedido">
            {!! $errors->first('expedido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_tipo_documento" class="form-label">{{ __('Id Tipo Documento') }}</label>
            <input type="text" name="id_tipo_documento" class="form-control @error('id_tipo_documento') is-invalid @enderror" value="{{ old('id_tipo_documento', $documento?->id_tipo_documento) }}" id="id_tipo_documento" placeholder="Id Tipo Documento">
            {!! $errors->first('id_tipo_documento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
        font-family: 'Poppins', sans-serif;
        background-color: #f9f9f9;
    }

    :root {
        --azul: #003049;
        --rojo: #ff4800;
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
        padding: 0.6rem 0.6rem 0.6rem 2.6rem;
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
        background-color: var(--azul);
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

<!-- Formulario: Documento en una fila -->
<div class="card card-form mb-4 mx-auto px-4 py-3" style="max-width: 100%; overflow-x: auto;">
    <h5 class="mb-4">📄 Datos del Documento</h5>

    <div class="d-flex flex-wrap gap-4 justify-content-start align-items-start">

        <!-- Campo: Número -->
        <div class="input-float" style="min-width: 250px; flex: 1;">
            <i class="material-icons">credit_card</i>
            <label for="numero">Número</label>
            <input type="text" name="numero" id="numero"
                   class="@error('numero') is-invalid @enderror"
                   value="{{ old('numero', $documento?->numero) }}">
            {!! $errors->first('numero', '<div class="invalid-feedback d-block" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <!-- Campo: Expedido -->
        <div class="input-float" style="min-width: 250px; flex: 1;">
            <i class="material-icons">flag</i>
            <label for="expedido">Expedido</label>
            <input type="text" name="expedido" id="expedido"
                   class="@error('expedido') is-invalid @enderror"
                   value="{{ old('expedido', $documento?->expedido) }}">
            {!! $errors->first('expedido', '<div class="invalid-feedback d-block" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <!-- Campo: Tipo de Documento -->
        <div class="input-float" style="min-width: 250px; flex: 1;">
            <i class="material-icons">description</i>
            <label for="id_tipo_documento">Tipo de Documento</label>
            <select name="id_tipo_documento" id="id_tipo_documento"
                    class="@error('id_tipo_documento') is-invalid @enderror">
                <option value="">Seleccione un tipo</option>
                @foreach($tiposDocumento as $tipo)
                    <option value="{{ $tipo->id }}"
                        {{ old('id_tipo_documento', $documento?->id_tipo_documento) == $tipo->id ? 'selected' : '' }}>
                        {{ $tipo->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_tipo_documento', '<div class="invalid-feedback d-block" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>

    <!-- Botón -->
    <div class="text-end mt-4">
        <button type="submit" class="btn btn-submit">{{ __('Guardar') }}</button>
    </div>
</div>
