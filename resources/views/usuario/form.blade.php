<!--<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-2 mb20">
            <label for="password" class="form-label">{{ __('Contraseña') }}</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Ingrese una contraseña segura">
            {!! $errors->first('password', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-2 mb20">
            <label for="ultimo_acceso" class="form-label">{{ __('Ultimo Acceso') }}</label>
            <input type="text" name="ultimo_acceso" class="form-control @error('ultimo_acceso') is-invalid @enderror" value="{{ old('ultimo_acceso', $usuario?->ultimo_acceso) }}" id="ultimo_acceso" placeholder="Ultimo Acceso">
            {!! $errors->first('ultimo_acceso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="super_usuario" class="form-label">{{ __('Super Usuario') }}</label>
            <input type="text" name="super_usuario" class="form-control @error('super_usuario') is-invalid @enderror" value="{{ old('super_usuario', $usuario?->super_usuario) }}" id="super_usuario" placeholder="Super Usuario">
            {!! $errors->first('super_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre_usuario" class="form-label">{{ __('Nombre Usuario') }}</label>
            <input type="text" name="nombre_usuario" class="form-control @error('nombre_usuario') is-invalid @enderror" value="{{ old('nombre_usuario', $usuario?->nombre_usuario) }}" id="nombre_usuario" placeholder="Nombre Usuario">
            {!! $errors->first('nombre_usuario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $usuario?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellidos" class="form-label">{{ __('Apellidos') }}</label>
            <input type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{ old('apellidos', $usuario?->apellidos) }}" id="apellidos" placeholder="Apellidos">
            {!! $errors->first('apellidos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="correo" class="form-label">{{ __('Correo') }}</label>
            <input type="text" name="correo" class="form-control @error('correo') is-invalid @enderror" value="{{ old('correo', $usuario?->correo) }}" id="correo" placeholder="Correo">
            {!! $errors->first('correo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="is_staff" class="form-label">{{ __('Is Staff') }}</label>
            <input type="text" name="is_staff" class="form-control @error('is_staff') is-invalid @enderror" value="{{ old('is_staff', $usuario?->is_staff) }}" id="is_staff" placeholder="Is Staff">
            {!! $errors->first('is_staff', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo', $usuario?->activo) }}" id="activo" placeholder="Activo">
            {!! $errors->first('activo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date_joined" class="form-label">{{ __('Date Joined') }}</label>
            <input type="text" name="date_joined" class="form-control @error('date_joined') is-invalid @enderror" value="{{ old('date_joined', $usuario?->date_joined) }}" id="date_joined" placeholder="Date Joined">
            {!! $errors->first('date_joined', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="acceso" class="form-label">{{ __('Acceso') }}</label>
            <input type="text" name="acceso" class="form-control @error('acceso') is-invalid @enderror" value="{{ old('acceso', $usuario?->acceso) }}" id="acceso" placeholder="Acceso">
            {!! $errors->first('acceso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_oficinas" class="form-label">{{ __('Id Oficinas') }}</label>
            <input type="text" name="id_oficinas" class="form-control @error('id_oficinas') is-invalid @enderror" value="{{ old('id_oficinas', $usuario?->id_oficinas) }}" id="id_oficinas" placeholder="Id Oficinas">
            {!! $errors->first('id_oficinas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="jerarquia" class="form-label">{{ __('Jerarquia') }}</label>
            <input type="text" name="jerarquia" class="form-control @error('jerarquia') is-invalid @enderror" value="{{ old('jerarquia', $usuario?->jerarquia) }}" id="jerarquia" placeholder="Jerarquia">
            {!! $errors->first('jerarquia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
   
</div>-->



<div class="row padding-1 p-1">
    <!-- Primera columna -->
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="password" class="form-label">{{ __('Contraseña') }}</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Ingrese una contraseña segura">
            {!! $errors->first('password', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3">
            <label for="ultimo_acceso" class="form-label">{{ __('Último Acceso') }}</label>
            <input type="text" name="ultimo_acceso" class="form-control @error('ultimo_acceso') is-invalid @enderror" value="{{ old('ultimo_acceso', $usuario?->ultimo_acceso) }}" id="ultimo_acceso" placeholder="Último Acceso">
            {!! $errors->first('ultimo_acceso', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3">
            <label for="super_usuario" class="form-label">{{ __('Super Usuario') }}</label>
            <input type="text" name="super_usuario" class="form-control @error('super_usuario') is-invalid @enderror" value="{{ old('super_usuario', $usuario?->super_usuario) }}" id="super_usuario" placeholder="Super Usuario">
            {!! $errors->first('super_usuario', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>
    </div>

    <!-- Segunda columna -->
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="nombre_usuario" class="form-label">{{ __('Nombre Usuario') }}</label>
            <input type="text" name="nombre_usuario" class="form-control @error('nombre_usuario') is-invalid @enderror" value="{{ old('nombre_usuario', $usuario?->nombre_usuario) }}" id="nombre_usuario" placeholder="Nombre Usuario">
            {!! $errors->first('nombre_usuario', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $usuario?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3">
            <label for="apellidos" class="form-label">{{ __('Apellidos') }}</label>
            <input type="text" name="apellidos" class="form-control @error('apellidos') is-invalid @enderror" value="{{ old('apellidos', $usuario?->apellidos) }}" id="apellidos" placeholder="Apellidos">
            {!! $errors->first('apellidos', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>
    </div>

    <!-- Tercera columna -->
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="correo" class="form-label">{{ __('Correo') }}</label>
            <input type="text" name="correo" class="form-control @error('correo') is-invalid @enderror" value="{{ old('correo', $usuario?->correo) }}" id="correo" placeholder="Correo">
            {!! $errors->first('correo', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3">
            <label for="is_staff" class="form-label">{{ __('Is Staff') }}</label>
            <input type="text" name="is_staff" class="form-control @error('is_staff') is-invalid @enderror" value="{{ old('is_staff', $usuario?->is_staff) }}" id="is_staff" placeholder="Is Staff">
            {!! $errors->first('is_staff', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3">
            <label for="activo" class="form-label">{{ __('Activo') }}</label>
            <input type="text" name="activo" class="form-control @error('activo') is-invalid @enderror" value="{{ old('activo', $usuario?->activo) }}" id="activo" placeholder="Activo">
            {!! $errors->first('activo', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>
    </div>

    <!-- Cuarta columna -->
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="date_joined" class="form-label">{{ __('Fecha de Ingreso') }}</label>
            <input type="text" name="date_joined" class="form-control @error('date_joined') is-invalid @enderror" value="{{ old('date_joined', $usuario?->date_joined) }}" id="date_joined" placeholder="Fecha de Ingreso">
            {!! $errors->first('date_joined', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3">
            <label for="acceso" class="form-label">{{ __('Acceso') }}</label>
            <input type="text" name="acceso" class="form-control @error('acceso') is-invalid @enderror" value="{{ old('acceso', $usuario?->acceso) }}" id="acceso" placeholder="Acceso">
            {!! $errors->first('acceso', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>
    </div>

    <!-- Quinta columna -->
    <div class="col-md-4">
        <div class="form-group mb-3">
            <label for="id_oficinas" class="form-label">{{ __('ID Oficinas') }}</label>
            <input type="text" name="id_oficinas" class="form-control @error('id_oficinas') is-invalid @enderror" value="{{ old('id_oficinas', $usuario?->id_oficinas) }}" id="id_oficinas" placeholder="ID Oficinas">
            {!! $errors->first('id_oficinas', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>

        <div class="form-group mb-3">
            <label for="jerarquia" class="form-label">{{ __('Jerarquía') }}</label>
            <input type="text" name="jerarquia" class="form-control @error('jerarquia') is-invalid @enderror" value="{{ old('jerarquia', $usuario?->jerarquia) }}" id="jerarquia" placeholder="Jerarquía">
            {!! $errors->first('jerarquia', '<div class="invalid-feedback"><strong>:message</strong></div>') !!}
        </div>
    </div>

    
</div>
