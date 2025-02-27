<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="otro_tipo" class="form-label">{{ __('Otro Tipo') }}</label>
            <input type="text" name="otro_tipo" class="form-control @error('otro_tipo') is-invalid @enderror" value="{{ old('otro_tipo', $denunciasTerapia?->otro_tipo) }}" id="otro_tipo" placeholder="Otro Tipo">
            {!! $errors->first('otro_tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="otro_documento" class="form-label">{{ __('Otro Documento') }}</label>
            <input type="text" name="otro_documento" class="form-control @error('otro_documento') is-invalid @enderror" value="{{ old('otro_documento', $denunciasTerapia?->otro_documento) }}" id="otro_documento" placeholder="Otro Documento">
            {!! $errors->first('otro_documento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="derivacion" class="form-label">{{ __('Derivacion') }}</label>
            <input type="text" name="derivacion" class="form-control @error('derivacion') is-invalid @enderror" value="{{ old('derivacion', $denunciasTerapia?->derivacion) }}" id="derivacion" placeholder="Derivacion">
            {!! $errors->first('derivacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="denuncia_id" class="form-label">{{ __('Denuncia Id') }}</label>
            <input type="text" name="denuncia_id" class="form-control @error('denuncia_id') is-invalid @enderror" value="{{ old('denuncia_id', $denunciasTerapia?->denuncia_id) }}" id="denuncia_id" placeholder="Denuncia Id">
            {!! $errors->first('denuncia_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="croquis" class="form-label">{{ __('Croquis') }}</label>
            <input type="text" name="croquis" class="form-control @error('croquis') is-invalid @enderror" value="{{ old('croquis', $denunciasTerapia?->croquis) }}" id="croquis" placeholder="Croquis">
            {!! $errors->first('croquis', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="documento_otro" class="form-label">{{ __('Documento Otro') }}</label>
            <input type="text" name="documento_otro" class="form-control @error('documento_otro') is-invalid @enderror" value="{{ old('documento_otro', $denunciasTerapia?->documento_otro) }}" id="documento_otro" placeholder="Documento Otro">
            {!! $errors->first('documento_otro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="inf_psicologico" class="form-label">{{ __('Inf Psicologico') }}</label>
            <input type="text" name="inf_psicologico" class="form-control @error('inf_psicologico') is-invalid @enderror" value="{{ old('inf_psicologico', $denunciasTerapia?->inf_psicologico) }}" id="inf_psicologico" placeholder="Inf Psicologico">
            {!! $errors->first('inf_psicologico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="inf_social" class="form-label">{{ __('Inf Social') }}</label>
            <input type="text" name="inf_social" class="form-control @error('inf_social') is-invalid @enderror" value="{{ old('inf_social', $denunciasTerapia?->inf_social) }}" id="inf_social" placeholder="Inf Social">
            {!! $errors->first('inf_social', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="violencia_economica" class="form-label">{{ __('Violencia Economica') }}</label>
            <input type="text" name="violencia_economica" class="form-control @error('violencia_economica') is-invalid @enderror" value="{{ old('violencia_economica', $denunciasTerapia?->violencia_economica) }}" id="violencia_economica" placeholder="Violencia Economica">
            {!! $errors->first('violencia_economica', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="violencia_fisica" class="form-label">{{ __('Violencia Fisica') }}</label>
            <input type="text" name="violencia_fisica" class="form-control @error('violencia_fisica') is-invalid @enderror" value="{{ old('violencia_fisica', $denunciasTerapia?->violencia_fisica) }}" id="violencia_fisica" placeholder="Violencia Fisica">
            {!! $errors->first('violencia_fisica', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="violencia_otro" class="form-label">{{ __('Violencia Otro') }}</label>
            <input type="text" name="violencia_otro" class="form-control @error('violencia_otro') is-invalid @enderror" value="{{ old('violencia_otro', $denunciasTerapia?->violencia_otro) }}" id="violencia_otro" placeholder="Violencia Otro">
            {!! $errors->first('violencia_otro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="violencia_psicologica" class="form-label">{{ __('Violencia Psicologica') }}</label>
            <input type="text" name="violencia_psicologica" class="form-control @error('violencia_psicologica') is-invalid @enderror" value="{{ old('violencia_psicologica', $denunciasTerapia?->violencia_psicologica) }}" id="violencia_psicologica" placeholder="Violencia Psicologica">
            {!! $errors->first('violencia_psicologica', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="violencia_sexual" class="form-label">{{ __('Violencia Sexual') }}</label>
            <input type="text" name="violencia_sexual" class="form-control @error('violencia_sexual') is-invalid @enderror" value="{{ old('violencia_sexual', $denunciasTerapia?->violencia_sexual) }}" id="violencia_sexual" placeholder="Violencia Sexual">
            {!! $errors->first('violencia_sexual', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="observaciones" class="form-label">{{ __('Observaciones') }}</label>
            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" value="{{ old('observaciones', $denunciasTerapia?->observaciones) }}" id="observaciones" placeholder="Observaciones">
            {!! $errors->first('observaciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>