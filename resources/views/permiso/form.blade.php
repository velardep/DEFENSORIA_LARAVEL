<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_permiso" class="form-label">{{ __('Nombre Permiso') }}</label>
            <input type="text" name="nombre_permiso" class="form-control @error('nombre_permiso') is-invalid @enderror" value="{{ old('nombre_permiso', $permiso?->nombre_permiso) }}" id="nombre_permiso" placeholder="Nombre Permiso">
            {!! $errors->first('nombre_permiso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="condicion_permiso" class="form-label">{{ __('Condicion Permiso') }}</label>
            <input type="text" name="condicion_permiso" class="form-control @error('condicion_permiso') is-invalid @enderror" value="{{ old('condicion_permiso', $permiso?->condicion_permiso) }}" id="condicion_permiso" placeholder="Condicion Permiso">
            {!! $errors->first('condicion_permiso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>