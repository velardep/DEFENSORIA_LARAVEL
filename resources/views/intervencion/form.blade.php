<!--<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="num_ficha" class="form-label">{{ __('Num Ficha') }}</label>
            <input type="text" name="num_ficha" class="form-control @error('num_ficha') is-invalid @enderror" value="{{ old('num_ficha', $intervencion?->num_ficha) }}" id="num_ficha" placeholder="Num Ficha">
            {!! $errors->first('num_ficha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_equipo" class="form-label">{{ __('Num Equipo') }}</label>
            <input type="text" name="num_equipo" class="form-control @error('num_equipo') is-invalid @enderror" value="{{ old('num_equipo', $intervencion?->num_equipo) }}" id="num_equipo" placeholder="Num Equipo">
            {!! $errors->first('num_equipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_tar" class="form-label">{{ __('Num Tar') }}</label>
            <input type="text" name="num_tar" class="form-control @error('num_tar') is-invalid @enderror" value="{{ old('num_tar', $intervencion?->num_tar) }}" id="num_tar" placeholder="Num Tar">
            {!! $errors->first('num_tar', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_usuaria" class="form-label">{{ __('Nombre Usuaria') }}</label>
            <input type="text" name="nombre_usuaria" class="form-control @error('nombre_usuaria') is-invalid @enderror" value="{{ old('nombre_usuaria', $intervencion?->nombre_usuaria) }}" id="nombre_usuaria" placeholder="Nombre Usuaria">
            {!! $errors->first('nombre_usuaria', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>-->


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





<div class="card card-form mb-4">
    <h5 class="mb-4">📋 Datos de la Intervención</h5>
    <div class="row">

        {{-- Num Ficha --}}
        <div class="col-md-6 input-float">
            <i class="material-icons">confirmation_number</i>
            <label for="num_ficha">N° Ficha *</label>
            <input type="text" name="num_ficha" id="num_ficha"
                   class="@error('num_ficha') is-invalid @enderror"
                   value="{{ old('num_ficha', $intervencion?->num_ficha) }}">
        </div>

        {{-- Num Equipo --}}
        <div class="col-md-6 input-float">
            <i class="material-icons">groups</i>
            <label for="num_equipo">N° Equipo</label>
            <input type="text" name="num_equipo" id="num_equipo"
                   class="@error('num_equipo') is-invalid @enderror"
                   value="{{ old('num_equipo', $intervencion?->num_equipo) }}">
        </div>

        {{-- Num Tar --}}
        <div class="col-md-6 input-float">
            <i class="material-icons">badge</i>
            <label for="num_tar">N° TAR</label>
            <input type="text" name="num_tar" id="num_tar"
                   class="@error('num_tar') is-invalid @enderror"
                   value="{{ old('num_tar', $intervencion?->num_tar) }}">
        </div>

        {{-- Nombre Usuaria --}}
        <div class="col-md-6 input-float">
            <i class="material-icons">person</i>
            <label for="nombre_usuaria">Nombre Usuaria</label>
            <input type="text" name="nombre_usuaria" id="nombre_usuaria"
                   class="@error('nombre_usuaria') is-invalid @enderror"
                   value="{{ old('nombre_usuaria', $intervencion?->nombre_usuaria) }}">
        </div>

    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function () {
    // Solo afecta los inputs de texto dentro de la card de intervención
    const cardIntervencion = document.querySelector('.card-form h5')?.textContent.includes('Intervención')
        ? document.querySelector('.card-form')
        : null;

    if (cardIntervencion) {
        const inputs = cardIntervencion.querySelectorAll("input[type='text'], textarea");

        inputs.forEach(function (input) {
            input.style.textTransform = "uppercase"; // visual

            input.addEventListener("input", function () {
                const start = this.selectionStart;
                const end = this.selectionEnd;
                const upper = this.value.toUpperCase();
                if (this.value !== upper) {
                    this.value = upper;
                    this.setSelectionRange(start, end);
                }
            });
        });
    }
});
</script>
