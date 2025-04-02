<!-- Estilos requeridos -->
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

<!-- Estilos requeridos -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-form">

            <div class="input-float">
                <i class="material-icons">edit</i>
                <label for="acciones">Acciones</label>
                <input type="text" name="acciones" id="acciones"
                       class="form-control @error('acciones') is-invalid @enderror"
                       value="{{ old('acciones', $accion?->acciones) }}"
                       placeholder="Acciones"
                       style="text-transform: uppercase;"
                       oninput="this.value = this.value.toUpperCase();">
                {!! $errors->first('acciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>

            <div class="input-float">
                <i class="material-icons">event</i>
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha"
                       class="form-control @error('fecha') is-invalid @enderror"
                       value="{{ old('fecha', $accion?->fecha) }}"
                       placeholder="Fecha">
                {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>

            <div class="input-float">
                <i class="material-icons">person</i>
                <label for="tecnico">Técnico</label>
                <input type="text" name="tecnico" id="tecnico"
                       class="form-control @error('tecnico') is-invalid @enderror"
                       value="{{ old('tecnico', $accion?->tecnico) }}"
                       placeholder="Técnico"
                       style="text-transform: uppercase;"
                       oninput="this.value = this.value.toUpperCase();">
                {!! $errors->first('tecnico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>

            <div class="input-float">
                <i class="material-icons">assignment_ind</i>
                <label for="denuncia_id">Denuncia ID</label>
                <input type="hidden" name="denuncia_id" value="{{ old('denuncia_id', $denuncia_id ?? $accion?->denuncia_id) }}">
            </div>

            <div class="text-end mt-4">
                <button type="submit" class="btn-submit">Guardar</button>
            </div>

        </div>
    </div>
</div>







