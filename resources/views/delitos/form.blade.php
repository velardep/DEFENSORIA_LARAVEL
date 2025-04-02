<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_delito" class="form-label">{{ __('Nombre Delito') }}</label>
            <input type="text" name="nombre_delito" class="form-control @error('nombre_delito') is-invalid @enderror" value="{{ old('nombre_delito', $delito?->nombre_delito) }}" id="nombre_delito" placeholder="Nombre Delito">
            {!! $errors->first('nombre_delito', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>