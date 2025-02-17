<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="../public/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="../public/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../public/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../public/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="../public/css/pace.min.css" rel="stylesheet" />
	<script src="../public/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="../public/css/bootstrap.min.css" rel="stylesheet">
	<link href="../public/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="../public/css/app.css" rel="stylesheet">
	<link href="../public/css/icons.css" rel="stylesheet">
    <!-- Tema oscuro personalizado -->
    <!--<style>
        body {
            background-color: #1d1f27; /* Fondo oscuro */
            color: #ffffff; /* Color de texto claro */
        }

        .card {
            background-color: #2a2d37; /* Fondo oscuro para las tarjetas */
            border: none;
        }

        .form-control {
            background-color: #2a2d37; /* Fondo oscuro para los inputs */
            border-color: #444851; /* Borde oscuro para los inputs */
            color: #ffffff;
        }

        .form-control::placeholder {
            color: #b5b7bb; /* Color del placeholder */
        }

        .input-group-text {
            background-color: #2a2d37; /* Fondo oscuro para los iconos */
            border-color: #444851; /* Borde oscuro */
            color: #ffffff;
        }

        .btn-primary {
            background-color: #4e5d6c; /* Color del botón */
            border-color: #4e5d6c;
        }

        .btn-primary:hover {
            background-color: #647589; /* Color del botón al pasar el ratón */
            border-color: #647589;
        }

        .form-check-input {
            background-color: #444851;
            border-color: #444851;
        }

        .form-check-label {
            color: #ffffff;
        }

        .text-end a {
            color: #b5b7bb; /* Color para los enlaces */
        }

        .login-separater span {
            background-color: #2a2d37;
            color: #ffffff;
        }

        hr {
            border-color: #444851;
        }
    </style>-->
	<title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="mb-4 text-center">
										<img src="../public/images/descarga.png" width="280" alt="" />
									</div>
									<!--<div class="text-center">
										<h3 class="">Sign in</h3>
										<p>Don't have an account yet? <a href="authentication-signup.html">Sign up here</a>
										</p>
									</div>
									<div class="d-grid">
										<a class="btn my-4 shadow-sm btn-white" href="javascript:;"> <span class="d-flex justify-content-center align-items-center">
                          				<img class="me-2" src="../public/images/icons/search.svg" width="16" alt="Image Description">
                          				<span>Sign in with Google</span>
											</span>
										</a> <a href="javascript:;" class="btn btn-facebook"><i class="bx bxl-facebook"></i>Sign in with Facebook</a>
									</div>-->
									<div class="login-separater text-center mb-4"> <span>Inicia Sesion</span>
										<hr/>
									</div>
									<div class="form-body">
										<form class="row g-3" id="frmAcceso">
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Correo</label>
												<input type="email" class="form-control" id="logina" name="logina" placeholder="Direccion de Correo">
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Contraseña</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" id="clavea" name="clavea" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-danger	"><i class="bx bxs-lock-open"></i>Sign in</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="../public/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="../public/js/jquery.min.js"></script>
	<script src="../public/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="../public/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="../public/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--Password show & hide js -->
	<script>
		$(document).ready(function () {
			$("#show_hide_password a").on('click', function (event) {
				event.preventDefault();
				if ($('#show_hide_password input').attr("type") == "text") {
					$('#show_hide_password input').attr('type', 'password');
					$('#show_hide_password i').addClass("bx-hide");
					$('#show_hide_password i').removeClass("bx-show");
				} else if ($('#show_hide_password input').attr("type") == "password") {
					$('#show_hide_password input').attr('type', 'text');
					$('#show_hide_password i').removeClass("bx-hide");
					$('#show_hide_password i').addClass("bx-show");
				}
			});
		});
	</script>
	<!--app JS-->
	<script src="../public/js/app.js"></script>
	<!--app JS-->
	<script type="text/javascript" src="script/login.js"></script>   
</body>

</html>