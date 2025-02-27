<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_rol" class="form-label">{{ __('Nombre Rol') }}</label>
            <input type="text" name="nombre_rol" class="form-control @error('nombre_rol') is-invalid @enderror" value="{{ old('nombre_rol', $role?->nombre_rol) }}" id="nombre_rol" placeholder="Nombre Rol">
            {!! $errors->first('nombre_rol', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="condicion_rol" class="form-label">{{ __('Condicion Rol') }}</label>
            <input type="text" name="condicion_rol" class="form-control @error('condicion_rol') is-invalid @enderror" value="{{ old('condicion_rol', $role?->condicion_rol) }}" id="condicion_rol" placeholder="Condicion Rol">
            {!! $errors->first('condicion_rol', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>