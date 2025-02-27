<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombres" class="form-label">{{ __('Nombres') }}</label>
            <input type="text" name="nombres" class="form-control @error('nombres') is-invalid @enderror" value="{{ old('nombres', $denunciasPersona?->nombres) }}" id="nombres" placeholder="Nombres">
            {!! $errors->first('nombres', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellidos" class="form-label">{{ __('Apellidos') }}</label>
            <input type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{ old('apellidos', $denunciasPersona?->apellidos) }}" id="apellidos" placeholder="Apellidos">
            {!! $errors->first('apellidos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="actividad" class="form-label">{{ __('Actividad') }}</label>
            <input type="text" name="actividad" class="form-control @error('actividad') is-invalid @enderror" value="{{ old('actividad', $denunciasPersona?->actividad) }}" id="actividad" placeholder="Actividad">
            {!! $errors->first('actividad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="anonimo" class="form-label">{{ __('Anonimo') }}</label>
            <input type="text" name="anonimo" class="form-control @error('anonimo') is-invalid @enderror" value="{{ old('anonimo', $denunciasPersona?->anonimo) }}" id="anonimo" placeholder="Anonimo">
            {!! $errors->first('anonimo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="c_nac" class="form-label">{{ __('C Nac') }}</label>
            <input type="text" name="c_nac" class="form-control @error('c_nac') is-invalid @enderror" value="{{ old('c_nac', $denunciasPersona?->c_nac) }}" id="c_nac" placeholder="C Nac">
            {!! $errors->first('c_nac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_civil" class="form-label">{{ __('Estado Civil') }}</label>
            <input type="text" name="estado_civil" class="form-control @error('estado_civil') is-invalid @enderror" value="{{ old('estado_civil', $denunciasPersona?->estado_civil) }}" id="estado_civil" placeholder="Estado Civil">
            {!! $errors->first('estado_civil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estudia" class="form-label">{{ __('Estudia') }}</label>
            <input type="text" name="estudia" class="form-control @error('estudia') is-invalid @enderror" value="{{ old('estudia', $denunciasPersona?->estudia) }}" id="estudia" placeholder="Estudia">
            {!! $errors->first('estudia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="doc_expedido" class="form-label">{{ __('Doc Expedido') }}</label>
            <input type="text" name="doc_expedido" class="form-control @error('doc_expedido') is-invalid @enderror" value="{{ old('doc_expedido', $denunciasPersona?->doc_expedido) }}" id="doc_expedido" placeholder="Doc Expedido">
            {!! $errors->first('doc_expedido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="edad" class="form-label">{{ __('Edad') }}</label>
            <input type="text" name="edad" class="form-control @error('edad') is-invalid @enderror" value="{{ old('edad', $denunciasPersona?->edad) }}" id="edad" placeholder="Edad">
            {!! $errors->first('edad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="f_nac" class="form-label">{{ __('F Nac') }}</label>
            <input type="text" name="f_nac" class="form-control @error('f_nac') is-invalid @enderror" value="{{ old('f_nac', $denunciasPersona?->f_nac) }}" id="f_nac" placeholder="F Nac">
            {!! $errors->first('f_nac', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="g_instruccion" class="form-label">{{ __('G Instruccion') }}</label>
            <input type="text" name="g_instruccion" class="form-control @error('g_instruccion') is-invalid @enderror" value="{{ old('g_instruccion', $denunciasPersona?->g_instruccion) }}" id="g_instruccion" placeholder="G Instruccion">
            {!! $errors->first('g_instruccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="gestante" class="form-label">{{ __('Gestante') }}</label>
            <input type="text" name="gestante" class="form-control @error('gestante') is-invalid @enderror" value="{{ old('gestante', $denunciasPersona?->gestante) }}" id="gestante" placeholder="Gestante">
            {!! $errors->first('gestante', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hijos" class="form-label">{{ __('Hijos') }}</label>
            <input type="text" name="hijos" class="form-control @error('hijos') is-invalid @enderror" value="{{ old('hijos', $denunciasPersona?->hijos) }}" id="hijos" placeholder="Hijos">
            {!! $errors->first('hijos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="idioma" class="form-label">{{ __('Idioma') }}</label>
            <input type="text" name="idioma" class="form-control @error('idioma') is-invalid @enderror" value="{{ old('idioma', $denunciasPersona?->idioma) }}" id="idioma" placeholder="Idioma">
            {!! $errors->first('idioma', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ingr_eco" class="form-label">{{ __('Ingr Eco') }}</label>
            <input type="text" name="ingr_eco" class="form-control @error('ingr_eco') is-invalid @enderror" value="{{ old('ingr_eco', $denunciasPersona?->ingr_eco) }}" id="ingr_eco" placeholder="Ingr Eco">
            {!! $errors->first('ingr_eco', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lgro_educa" class="form-label">{{ __('Lgro Educa') }}</label>
            <input type="text" name="lgro_educa" class="form-control @error('lgro_educa') is-invalid @enderror" value="{{ old('lgro_educa', $denunciasPersona?->lgro_educa) }}" id="lgro_educa" placeholder="Lgro Educa">
            {!! $errors->first('lgro_educa', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lug_nacimiento" class="form-label">{{ __('Lug Nacimiento') }}</label>
            <input type="text" name="lug_nacimiento" class="form-control @error('lug_nacimiento') is-invalid @enderror" value="{{ old('lug_nacimiento', $denunciasPersona?->lug_nacimiento) }}" id="lug_nacimiento" placeholder="Lug Nacimiento">
            {!! $errors->first('lug_nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lug_residencia" class="form-label">{{ __('Lug Residencia') }}</label>
            <input type="text" name="lug_residencia" class="form-control @error('lug_residencia') is-invalid @enderror" value="{{ old('lug_residencia', $denunciasPersona?->lug_residencia) }}" id="lug_residencia" placeholder="Lug Residencia">
            {!! $errors->first('lug_residencia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="lugar_trabajo" class="form-label">{{ __('Lugar Trabajo') }}</label>
            <input type="text" name="lugar_trabajo" class="form-control @error('lugar_trabajo') is-invalid @enderror" value="{{ old('lugar_trabajo', $denunciasPersona?->lugar_trabajo) }}" id="lugar_trabajo" placeholder="Lugar Trabajo">
            {!! $errors->first('lugar_trabajo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="monto" class="form-label">{{ __('Monto') }}</label>
            <input type="text" name="monto" class="form-control @error('monto') is-invalid @enderror" value="{{ old('monto', $denunciasPersona?->monto) }}" id="monto" placeholder="Monto">
            {!! $errors->first('monto', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nro_documento" class="form-label">{{ __('Nro Documento') }}</label>
            <input type="text" name="nro_documento" class="form-control @error('nro_documento') is-invalid @enderror" value="{{ old('nro_documento', $denunciasPersona?->nro_documento) }}" id="nro_documento" placeholder="Nro Documento">
            {!! $errors->first('nro_documento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="sexo" class="form-label">{{ __('Sexo') }}</label>
            <input type="text" name="sexo" class="form-control @error('sexo') is-invalid @enderror" value="{{ old('sexo', $denunciasPersona?->sexo) }}" id="sexo" placeholder="Sexo">
            {!! $errors->first('sexo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo_doc" class="form-label">{{ __('Tipo Doc') }}</label>
            <input type="text" name="tipo_doc" class="form-control @error('tipo_doc') is-invalid @enderror" value="{{ old('tipo_doc', $denunciasPersona?->tipo_doc) }}" id="tipo_doc" placeholder="Tipo Doc">
            {!! $errors->first('tipo_doc', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>