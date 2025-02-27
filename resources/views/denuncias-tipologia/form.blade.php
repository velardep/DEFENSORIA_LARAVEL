<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="tipologia_id" class="form-label">{{ __('Tipologia Id') }}</label>
            <input type="text" name="tipologia_id" class="form-control @error('tipologia_id') is-invalid @enderror" value="{{ old('tipologia_id', $denunciasTipologia?->tipologia_id) }}" id="tipologia_id" placeholder="Tipologia Id">
            {!! $errors->first('tipologia_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>