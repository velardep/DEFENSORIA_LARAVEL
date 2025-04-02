<head>
    <!-- Otros meta tags, título, etc. -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>

<style>
/* Fondo general */
body {
    background: linear-gradient(135deg, #121212, #1a1a1a);
    min-height: 100vh;
    color: #e0e0e0;
    margin: 0;
    padding: 0;
}

/* Tarjeta de login */
.wrapper .card, .login-wrapper .card {
    border: none;
    border-radius: 20px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.6);
    background-color:rgb(58, 58, 58);
    padding: 2rem;
    margin-top: 100px; /* 🔵 Mover la tarjeta hacia abajo */

}

/* Input fields */
.wrapper .form-control, .login-wrapper .form-control {
    border-radius: 10px;
    background-color:rgb(255, 255, 255);
    border: 1px solidrgb(151, 151, 151);
    color:rgb(10, 10, 10);
    transition: all 0.3s ease;
}

.wrapper .form-control:focus, .login-wrapper .form-control:focus {
    box-shadow: 0 0 5px rgba(255, 99, 132, 0.7);
    border-color: #ff6384;
    background-color:rgb(252, 251, 251);
}

/* Botón Ingresar */
.wrapper .btn-danger, .login-wrapper .btn-danger {
    background: #ff4b5c;
    border: none;
    padding: 12px 20px;
    border-radius: 12px;
    transition: background 0.3s;
    font-weight: bold;
    font-size: 1.1rem;
    color: white;
}

.wrapper .btn-danger:hover, .login-wrapper .btn-danger:hover {
    background: red;
}

/* Icono de mostrar/ocultar contraseña */
#show_hide_password a {
    cursor: pointer;
    color: #f5f5f5;
}

/* Separador de inicio de sesión */
.wrapper .login-separater span, .login-wrapper .login-separater span {
    font-size: 1.5rem;
    font-weight: 600;
    color: #ffffff;
}

/* Pequeño hover a enlaces */
.wrapper a, .login-wrapper a {
    color: #ff6384;
    text-decoration: none;
}

.wrapper a:hover, .login-wrapper a:hover {
    text-decoration: underline;
    color: #ff85a2;
}

/* Imagen del logo */
.wrapper .text-center img, .login-wrapper .text-center img {
    border: 3px solid #ff4b5c;
    padding: 5px;
    background-color:rgb(255, 255, 255);
}

/* Margen para recordarme y olvidaste contraseña */
.wrapper .form-check-label, .login-wrapper .form-check-label, 
.wrapper .text-end a, .login-wrapper .text-end a {
    font-size: 0.9rem;
    color: #dcdcdc;
}



/* Input fields */
.form-control {
    border-radius: 10px;
    background-color: #3a3a3a;
    border: 1px solid #555;
    color: #f1f1f1;
    transition: all 0.3s ease;
}

.form-control:focus {
    box-shadow: 0 0 5px rgba(255, 99, 132, 0.7);
    border-color: #ff6384;
    background-color: #434343;
}

/* 🔵 Texto de los labels (Correo, Contraseña) en blanco */
.form-label {
    color: #ffffff;
}
/* Input fields */
.form-control {
    border-radius: 10px;
    background-color: #e0e0e0; /* Fondo clarito */
    border: 1px solid #555;
    color: #000000; /* 🔵 Texto en NEGRO */
    transition: all 0.3s ease;
}

.form-control::placeholder {
    color: #7a7a7a; /* 🔵 Placeholder gris oscuro, no blanco */
}

.form-control:focus {
    box-shadow: 0 0 5px rgba(255, 99, 132, 0.7);
    border-color: #ff6384;
    background-color: #f5f5f5; /* Un fondo aún más claro al focus */
    color: #000000; /* 🔵 Texto sigue negro incluso al focus */
}

#show_hide_password .input-group-text {
    background: none;
    border: none;
    color: #ffffff; /* Icono blanco */
    font-size: 1.6rem; /* Más grande */
    cursor: pointer;
    display: flex;
    align-items: center;
    padding: 0 10px;
}

#show_hide_password .input-group-text:hover {
    color: #ff6384; /* Rosadito al pasar el mouse */
}
#show_hide_password .form-control {
    border-right: none; /* 🔵 Elimina el borde entre input y ojito */
}

#show_hide_password .input-group-text {
    border-left: 1px solid #555; /* 🔵 Línea separadora sutil */
}



</style>



@extends('layouts.app')

@section('content')
<div class="wrapper login-wrapper">
    <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">

                    <div class="card">
                        <div class="card-body">
                            <div class="border p-4 rounded">
                                
                            <div class="mb-4 text-center">
                                <img src="{{ asset('assets/images/logotarija.png') }}" alt="Logo" width="100" height="100" class="rounded-circle shadow-sm">
                            </div>

                                <div class="login-separater text-center mb-4">
                                    <span>Iniciar Sesión - SLIM</span>
                                    <hr/>
                                </div>

                                <div class="form-body">
                                    <form method="POST" action="{{ route('login') }}" class="row g-3">
                                        @csrf

                                        <!-- Email -->
                                        <div class="col-12">
                                            <label for="email" class="form-label">Correo</label>
                                            <input id="email" type="email" 
                                                   class="form-control @error('email') is-invalid @enderror" 
                                                   name="email" value="{{ old('email') }}" 
                                                   required autocomplete="email" autofocus
                                                   placeholder="Dirección de correo">

                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <!-- Contraseña -->
                                        <div class="col-12">
                                            <label for="password" class="form-label">Contraseña</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input id="password" type="password" 
                                                       class="form-control @error('password') is-invalid @enderror border-end-0" 
                                                       name="password" required autocomplete="current-password"
                                                       placeholder="Ingrese su contraseña">
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>

                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <!-- Recordarme 
                                        <div class="col-md-6">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">Recordarme</label>
                                            </div>
                                        </div>-->

                                        <!-- Olvidaste contraseña 
                                        <div class="col-md-6 text-end">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                                            @endif
                                        </div>-->

                                        <!-- Botón Ingresar -->
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="bx bxs-lock-open"></i> Entrar
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                </div> <!-- form-body -->

                            </div> <!-- border -->
                        </div> <!-- card-body -->
                    </div> <!-- card -->

                </div> <!-- col -->
            </div> <!-- row -->
        </div> <!-- container-fluid -->
    </div> <!-- section-authentication-signin -->
</div> <!-- wrapper -->

@endsection


<script>
document.addEventListener('DOMContentLoaded', function () {
    const togglePassword = document.querySelector('#show_hide_password a');
    const passwordInput = document.querySelector('#show_hide_password input');
    const icon = togglePassword.querySelector('i');

    togglePassword.addEventListener('click', function (e) {
        e.preventDefault();
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove('bx-hide');
            icon.classList.add('bx-show');
        } else {
            passwordInput.type = "password";
            icon.classList.remove('bx-show');
            icon.classList.add('bx-hide');
        }
    });
});
</script>


<script>
    // 🔥 Cuando cargas el login, bloquea navegación hacia atrás
    history.pushState(null, document.title, location.href);
    window.addEventListener('popstate', function (event) {
        history.pushState(null, document.title, location.href);
    });
</script>

