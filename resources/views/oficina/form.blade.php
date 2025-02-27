<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_oficina" class="form-label">{{ __('Nombre Oficina') }}</label>
            <input type="text" name="nombre_oficina" class="form-control @error('nombre_oficina') is-invalid @enderror" value="{{ old('nombre_oficina', $oficina?->nombre_oficina) }}" id="nombre_oficina" placeholder="Nombre Oficina">
            {!! $errors->first('nombre_oficina', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $oficina?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="telefono_oficina" class="form-label">{{ __('Telefono Oficina') }}</label>
            <input type="text" name="telefono_oficina" class="form-control @error('telefono_oficina') is-invalid @enderror" value="{{ old('telefono_oficina', $oficina?->telefono_oficina) }}" id="telefono_oficina" placeholder="Telefono Oficina">
            {!! $errors->first('telefono_oficina', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="idtipo_oficina" class="form-label">{{ __('Idtipo Oficina') }}</label>
            <input type="text" name="idtipo_oficina" class="form-control @error('idtipo_oficina') is-invalid @enderror" value="{{ old('idtipo_oficina', $oficina?->idtipo_oficina) }}" id="idtipo_oficina" placeholder="Idtipo Oficina">
            {!! $errors->first('idtipo_oficina', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="condicion" class="form-label">{{ __('Condicion') }}</label>
            <input type="text" name="condicion" class="form-control @error('condicion') is-invalid @enderror" value="{{ old('condicion', $oficina?->condicion) }}" id="condicion" placeholder="Condicion">
            {!! $errors->first('condicion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="direccion" class="form-label">{{ __('Direccion') }}</label>
            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{ old('direccion', $oficina?->direccion) }}" id="direccion" placeholder="Direccion">
            {!! $errors->first('direccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>