<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="f_denuncia" class="form-label">{{ __('F Denuncia') }}</label>
            <input type="text" name="f_denuncia" class="form-control @error('f_denuncia') is-invalid @enderror" value="{{ old('f_denuncia', $denunciasDenuncia?->f_denuncia) }}" id="f_denuncia" placeholder="F Denuncia">
            {!! $errors->first('f_denuncia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nro_atencion" class="form-label">{{ __('Nro Atencion') }}</label>
            <input type="text" name="nro_atencion" class="form-control @error('nro_atencion') is-invalid @enderror" value="{{ old('nro_atencion', $denunciasDenuncia?->nro_atencion) }}" id="nro_atencion" placeholder="Nro Atencion">
            {!! $errors->first('nro_atencion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="inhabilitado" class="form-label">{{ __('Inhabilitado') }}</label>
            <input type="text" name="inhabilitado" class="form-control @error('inhabilitado') is-invalid @enderror" value="{{ old('inhabilitado', $denunciasDenuncia?->inhabilitado) }}" id="inhabilitado" placeholder="Inhabilitado">
            {!! $errors->first('inhabilitado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ingreso" class="form-label">{{ __('Ingreso') }}</label>
            <input type="text" name="ingreso" class="form-control @error('ingreso') is-invalid @enderror" value="{{ old('ingreso', $denunciasDenuncia?->ingreso) }}" id="ingreso" placeholder="Ingreso">
            {!! $errors->first('ingreso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="especifica_ingreso" class="form-label">{{ __('Especifica Ingreso') }}</label>
            <input type="text" name="especifica_ingreso" class="form-control @error('especifica_ingreso') is-invalid @enderror" value="{{ old('especifica_ingreso', $denunciasDenuncia?->especifica_ingreso) }}" id="especifica_ingreso" placeholder="Especifica Ingreso">
            {!! $errors->first('especifica_ingreso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $denunciasDenuncia?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="opinion" class="form-label">{{ __('Opinion') }}</label>
            <input type="text" name="opinion" class="form-control @error('opinion') is-invalid @enderror" value="{{ old('opinion', $denunciasDenuncia?->opinion) }}" id="opinion" placeholder="Opinion">
            {!! $errors->first('opinion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="historia" class="form-label">{{ __('Historia') }}</label>
            <input type="text" name="historia" class="form-control @error('historia') is-invalid @enderror" value="{{ old('historia', $denunciasDenuncia?->historia) }}" id="historia" placeholder="Historia">
            {!! $errors->first('historia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="completa" class="form-label">{{ __('Completa') }}</label>
            <input type="text" name="completa" class="form-control @error('completa') is-invalid @enderror" value="{{ old('completa', $denunciasDenuncia?->completa) }}" id="completa" placeholder="Completa">
            {!! $errors->first('completa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="archivada" class="form-label">{{ __('Archivada') }}</label>
            <input type="text" name="archivada" class="form-control @error('archivada') is-invalid @enderror" value="{{ old('archivada', $denunciasDenuncia?->archivada) }}" id="archivada" placeholder="Archivada">
            {!! $errors->first('archivada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="procedencia" class="form-label">{{ __('Procedencia') }}</label>
            <input type="text" name="procedencia" class="form-control @error('procedencia') is-invalid @enderror" value="{{ old('procedencia', $denunciasDenuncia?->procedencia) }}" id="procedencia" placeholder="Procedencia">
            {!! $errors->first('procedencia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="municipio" class="form-label">{{ __('Municipio') }}</label>
            <input type="text" name="municipio" class="form-control @error('municipio') is-invalid @enderror" value="{{ old('municipio', $denunciasDenuncia?->municipio) }}" id="municipio" placeholder="Municipio">
            {!! $errors->first('municipio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="otra_inst" class="form-label">{{ __('Otra Inst') }}</label>
            <input type="text" name="otra_inst" class="form-control @error('otra_inst') is-invalid @enderror" value="{{ old('otra_inst', $denunciasDenuncia?->otra_inst) }}" id="otra_inst" placeholder="Otra Inst">
            {!! $errors->first('otra_inst', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_servicio" class="form-label">{{ __('Nombre Servicio') }}</label>
            <input type="text" name="nombre_servicio" class="form-control @error('nombre_servicio') is-invalid @enderror" value="{{ old('nombre_servicio', $denunciasDenuncia?->nombre_servicio) }}" id="nombre_servicio" placeholder="Nombre Servicio">
            {!! $errors->first('nombre_servicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="orientacion" class="form-label">{{ __('Orientacion') }}</label>
            <input type="text" name="orientacion" class="form-control @error('orientacion') is-invalid @enderror" value="{{ old('orientacion', $denunciasDenuncia?->orientacion) }}" id="orientacion" placeholder="Orientacion">
            {!! $errors->first('orientacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_atencion" class="form-label">{{ __('Tipo Atencion') }}</label>
            <input type="text" name="tipo_atencion" class="form-control @error('tipo_atencion') is-invalid @enderror" value="{{ old('tipo_atencion', $denunciasDenuncia?->tipo_atencion) }}" id="tipo_atencion" placeholder="Tipo Atencion">
            {!! $errors->first('tipo_atencion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="defensoria_id" class="form-label">{{ __('Defensoria Id') }}</label>
            <input type="text" name="defensoria_id" class="form-control @error('defensoria_id') is-invalid @enderror" value="{{ old('defensoria_id', $denunciasDenuncia?->defensoria_id) }}" id="defensoria_id" placeholder="Defensoria Id">
            {!! $errors->first('defensoria_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipologia_id" class="form-label">{{ __('Tipologia Id') }}</label>
            <input type="text" name="tipologia_id" class="form-control @error('tipologia_id') is-invalid @enderror" value="{{ old('tipologia_id', $denunciasDenuncia?->tipologia_id) }}" id="tipologia_id" placeholder="Tipologia Id">
            {!! $errors->first('tipologia_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_denuncia" class="form-label">{{ __('Tipo Denuncia') }}</label>
            <input type="text" name="tipo_denuncia" class="form-control @error('tipo_denuncia') is-invalid @enderror" value="{{ old('tipo_denuncia', $denunciasDenuncia?->tipo_denuncia) }}" id="tipo_denuncia" placeholder="Tipo Denuncia">
            {!! $errors->first('tipo_denuncia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_orientaciones" class="form-label">{{ __('Estado Orientaciones') }}</label>
            <input type="text" name="estado_orientaciones" class="form-control @error('estado_orientaciones') is-invalid @enderror" value="{{ old('estado_orientaciones', $denunciasDenuncia?->estado_orientaciones) }}" id="estado_orientaciones" placeholder="Estado Orientaciones">
            {!! $errors->first('estado_orientaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_actual" class="form-label">{{ __('Estado Actual') }}</label>
            <input type="text" name="estado_actual" class="form-control @error('estado_actual') is-invalid @enderror" value="{{ old('estado_actual', $denunciasDenuncia?->estado_actual) }}" id="estado_actual" placeholder="Estado Actual">
            {!! $errors->first('estado_actual', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="color" class="form-label">{{ __('Color') }}</label>
            <input type="text" name="color" class="form-control @error('color') is-invalid @enderror" value="{{ old('color', $denunciasDenuncia?->color) }}" id="color" placeholder="Color">
            {!! $errors->first('color', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>