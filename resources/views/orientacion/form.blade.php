<!--<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="equipo" class="form-label">{{ __('Equipo') }}</label>
            <input type="text" name="equipo" class="form-control @error('equipo') is-invalid @enderror" value="{{ old('equipo', $orientacion?->equipo) }}" id="equipo" placeholder="Equipo">
            {!! $errors->first('equipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="profesional_asignado" class="form-label">{{ __('Profesional Asignado') }}</label>
            <input type="text" name="profesional_asignado" class="form-control @error('profesional_asignado') is-invalid @enderror" value="{{ old('profesional_asignado', $orientacion?->profesional_asignado) }}" id="profesional_asignado" placeholder="Profesional Asignado">
            {!! $errors->first('profesional_asignado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_ingreso" class="form-label">{{ __('Fecha Ingreso') }}</label>
            <input type="text" name="fecha_ingreso" class="form-control @error('fecha_ingreso') is-invalid @enderror" value="{{ old('fecha_ingreso', $orientacion?->fecha_ingreso) }}" id="fecha_ingreso" placeholder="Fecha Ingreso">
            {!! $errors->first('fecha_ingreso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="orientacion_psicologica" class="form-label">{{ __('Orientacion Psicologica') }}</label>
            <input type="text" name="orientacion_psicologica" class="form-control @error('orientacion_psicologica') is-invalid @enderror" value="{{ old('orientacion_psicologica', $orientacion?->orientacion_psicologica) }}" id="orientacion_psicologica" placeholder="Orientacion Psicologica">
            {!! $errors->first('orientacion_psicologica', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="orientacion_social" class="form-label">{{ __('Orientacion Social') }}</label>
            <input type="text" name="orientacion_social" class="form-control @error('orientacion_social') is-invalid @enderror" value="{{ old('orientacion_social', $orientacion?->orientacion_social) }}" id="orientacion_social" placeholder="Orientacion Social">
            {!! $errors->first('orientacion_social', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="orientacion_legal" class="form-label">{{ __('Orientacion Legal') }}</label>
            <input type="text" name="orientacion_legal" class="form-control @error('orientacion_legal') is-invalid @enderror" value="{{ old('orientacion_legal', $orientacion?->orientacion_legal) }}" id="orientacion_legal" placeholder="Orientacion Legal">
            {!! $errors->first('orientacion_legal', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_persona" class="form-label">{{ __('Nombre Persona') }}</label>
            <input type="text" name="nombre_persona" class="form-control @error('nombre_persona') is-invalid @enderror" value="{{ old('nombre_persona', $orientacion?->nombre_persona) }}" id="nombre_persona" placeholder="Nombre Persona">
            {!! $errors->first('nombre_persona', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="edad" class="form-label">{{ __('Edad') }}</label>
            <input type="text" name="edad" class="form-control @error('edad') is-invalid @enderror" value="{{ old('edad', $orientacion?->edad) }}" id="edad" placeholder="Edad">
            {!! $errors->first('edad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Telefono') }}</label>
            <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $orientacion?->telefono) }}" id="telefono" placeholder="Telefono">
            {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="barrio" class="form-label">{{ __('Barrio') }}</label>
            <input type="text" name="barrio" class="form-control @error('barrio') is-invalid @enderror" value="{{ old('barrio', $orientacion?->barrio) }}" id="barrio" placeholder="Barrio">
            {!! $errors->first('barrio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="motivo" class="form-label">{{ __('Motivo') }}</label>
            <input type="text" name="motivo" class="form-control @error('motivo') is-invalid @enderror" value="{{ old('motivo', $orientacion?->motivo) }}" id="motivo" placeholder="Motivo">
            {!! $errors->first('motivo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="resutado_entrevista" class="form-label">{{ __('Resutado Entrevista') }}</label>
            <input type="text" name="resutado_entrevista" class="form-control @error('resutado_entrevista') is-invalid @enderror" value="{{ old('resutado_entrevista', $orientacion?->resutado_entrevista) }}" id="resutado_entrevista" placeholder="Resutado Entrevista">
            {!! $errors->first('resutado_entrevista', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="num_caso" class="form-label">{{ __('Num Caso') }}</label>
            <input type="text" name="num_caso" class="form-control @error('num_caso') is-invalid @enderror" value="{{ old('num_caso', $orientacion?->num_caso) }}" id="num_caso" placeholder="Num Caso">
            {!! $errors->first('num_caso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
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
    <h5 class="mb-4">📝 Datos de la Orientación</h5>
    <div class="row">

        {{-- Fecha de Ingreso --}}
        <div class="col-md-4 input-float">
            <i class="material-icons">event</i>
            <label for="fecha_ingreso">Fecha de Ingreso *</label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso"
                   class="@error('fecha_ingreso') is-invalid @enderror"
                   value="{{ old('fecha_ingreso') }}">
        </div>

        {{-- Número de Caso --}}
        <div class="col-md-4 input-float">
            <i class="material-icons">confirmation_number</i>
            <label for="num_caso">Número de Caso *</label>
            <input type="text" name="num_caso" id="num_caso"
                   class="@error('num_caso') is-invalid @enderror"
                   value="{{ old('num_caso') }}">
        </div>

        {{-- Nombre de la Persona --}}
        <div class="col-md-4 input-float">
            <i class="material-icons">person</i>
            <label for="nombre_persona">Nombre de la Persona *</label>
            <input type="text" name="nombre_persona" id="nombre_persona"
                   class="@error('nombre_persona') is-invalid @enderror"
                   value="{{ old('nombre_persona') }}">
        </div>

        {{-- Edad --}}
        <div class="col-md-4 input-float">
            <i class="material-icons">calendar_today</i>
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad"
                   class="@error('edad') is-invalid @enderror"
                   value="{{ old('edad') }}">
        </div>

        {{-- Teléfono --}}
        <div class="col-md-4 input-float">
            <i class="material-icons">phone</i>
            <label for="telefono">Teléfono</label>
            <input type="text" name="telefono" id="telefono"
                   class="@error('telefono') is-invalid @enderror"
                   value="{{ old('telefono') }}">
        </div>

        {{-- Barrio --}}
        <div class="col-md-4 input-float">
            <i class="material-icons">home</i>
            <label for="barrio">Barrio</label>
            <input type="text" name="barrio" id="barrio"
                   class="@error('barrio') is-invalid @enderror"
                   value="{{ old('barrio') }}">
        </div>

        {{-- Profesional Asignado --}}
        <div class="col-md-6 input-float">
            <i class="material-icons">assignment_ind</i>
            <label for="profesional_asignado">Profesional Asignado</label>
            <input type="text" name="profesional_asignado" id="profesional_asignado"
                   class="@error('profesional_asignado') is-invalid @enderror"
                   value="{{ old('profesional_asignado') }}">
        </div>

        {{-- Equipo --}}
        <div class="col-md-6 input-float">
            <i class="material-icons">groups</i>
            <label for="equipo">Equipo</label>
            <input type="text" name="equipo" id="equipo"
                   class="@error('equipo') is-invalid @enderror"
                   value="{{ old('equipo') }}">
        </div>

        {{-- Tipo de Orientación (Select) --}}
        <div class="col-md-6 input-float">
            <i class="material-icons">category</i>
            <label for="orientacion">Tipo de Orientación</label>
            <select name="orientacion" id="orientacion"
                    class="@error('orientacion') is-invalid @enderror">
                <option value="">Seleccione una opción</option>
                <option value="Psicologico" {{ old('orientacion') == 'Psicologico' ? 'selected' : '' }}>Psicológico</option>
                <option value="Legal" {{ old('orientacion') == 'Legal' ? 'selected' : '' }}>Legal</option>
                <option value="Social" {{ old('orientacion') == 'Social' ? 'selected' : '' }}>Social</option>
            </select>
        </div>

        {{-- Motivo --}}
        <div class="col-md-6 input-float">
            <i class="material-icons">help_outline</i>
            <label for="motivo">Motivo</label>
            <input type="text" name="motivo" id="motivo"
                   class="@error('motivo') is-invalid @enderror"
                   value="{{ old('motivo') }}">
        </div>

        {{-- Resultado de Entrevista --}}
        <div class="col-12 input-float">
            <i class="material-icons">description</i>
            <label for="resutado_entrevista">Resultado de Entrevista</label>
            <input type="text" name="resutado_entrevista" id="resutado_entrevista"
                   class="@error('resutado_entrevista') is-invalid @enderror"
                   value="{{ old('resutado_entrevista') }}">
        </div>

    </div>
</div>


<script>
document.addEventListener("DOMContentLoaded", function () {
    // Buscar la card que contiene el título "Datos de la Orientación"
    const cards = document.querySelectorAll('.card-form');

    cards.forEach(function (card) {
        const titulo = card.querySelector('h5')?.textContent || '';
        if (titulo.includes("Datos de la Orientación")) {
            const inputs = card.querySelectorAll("input[type='text'], textarea");

            inputs.forEach(function (input) {
                input.style.textTransform = "uppercase"; // visualmente

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
});
</script>
