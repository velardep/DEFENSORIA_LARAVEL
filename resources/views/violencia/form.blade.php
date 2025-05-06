



<!-- Incluir Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Estilos embebidos -->
<style>
    .card-form {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        border-radius: 50px;
        padding: 50px;
        background-color: #fff;
    }

    .input-material {
        position: relative;
        margin-bottom: 24px;
    }

    .input-material label {
        position: absolute;
        top: -10px;
        left: 2.5rem;
        font-size: 0.85rem;
        color: #666;
        background: #fff;
        padding: 0 4px;
        z-index: 2;
    }

    .input-material .material-icons {
        position: absolute;
        top: 50%;
        left: 10px;
        transform: translateY(-50%);
        font-size: 20px;
        color: #666;
        z-index: 1;
    }

    .input-material input {
        border: none;
        border-bottom: 2px solid #ccc;
        border-radius: 0;
        background-color: transparent;
        padding-left: 2.5rem;
        height: 40px;
        width: 100%;
        transition: all 0.3s ease;
    }

    .input-material input:focus {
        outline: none;
        border-bottom: 2px solid #007bff;
        box-shadow: 0 2px 6px rgba(0, 123, 255, 0.2);
    }

    .btn-submit {
        padding: 10px 25px;
        font-size: 16px;
    }
</style>

<!-- Formulario -->
<div class="card card-form mb-4">
    <h5 class="mb-4">Datos del tipo de violencia</h5>
    <div class="row">

        <!-- Nombre -->
        <div class="col-md-6 input-material">
            <i class="material-icons">title</i>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"
                   class="@error('nombre') is-invalid @enderror"
                   value="{{ old('nombre', $violencia?->nombre) }}"
                   id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback d-block" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <!-- ID Tipo Violencia -->
        <div class="col-md-6 input-material">
            <i class="material-icons">tag</i>
            <label for="id_tipo_violencia">Tipo de Violencia</label>
            <select name="id_tipo_violencia" id="id_tipo_violencia" class="form-control @error('id_tipo_violencia') is-invalid @enderror">
                <option value="">Seleccione un tipo</option>
                @foreach ($tiposViolencia as $tipo)
                    <option value="{{ $tipo->id }}" {{ old('id_tipo_violencia', $violencia?->id_tipo_violencia) == $tipo->id ? 'selected' : '' }}>
                        {{ $tipo->nombre }}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('id_tipo_violencia', '<div class="invalid-feedback d-block" role="alert"><strong>:message</strong></div>') !!}
        </div>
    </div>

    <div class="text-end mt-4">
        <button type="submit" class="btn btn-primary btn-submit">Guardar</button>
    </div>
</div>
