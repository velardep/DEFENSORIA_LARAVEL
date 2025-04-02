<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Boltz : Crypto Admin Template" />
	<meta property="og:title" content="Boltz : Crypto Admin Template" />
	<meta property="og:description" content="Boltz : Crypto Admin Template" />
	<meta property="og:image" content="https://boltz.dexignzone.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

	<!-- PAGE TITLE HERE -->
	<title>SLIM TARIJA</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('assets/images/favicon.png')}}" />
	<link href="{{asset('assets/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<!-- Style css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .deznav {
            max-height: 100vh;
            overflow-y: auto;
        }

        .deznav-scroll {
            max-height: 100%;
            overflow-y: auto;
            padding-bottom: 20px; 
        }
    </style>
	
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
			<span>SLIM</span>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <!-- Reemplazo del primer SVG por una imagen -->
                <img src="assets/images/logotarija.png" alt="Logo" class="logo-abbr" width="54" height="54">
                
                <!-- Reemplazo del segundo SVG por un texto -->
                <span class="brand-title">SLIM</span>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">

					<!-- Botón para alternar el Modo Oscuro -->
					<button id="toggleDarkMode" class="btn btn-outline-light">
						<i class="fas fa-moon"></i> Modo Oscuro
					</button>
                        <ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="#" role="button" data-bs-toggle="dropdown">
                                   <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#342E59"/>
									</svg>

                                    <span class="badge light text-white bg-primary rounded-circle"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!--NOTIFICACIONES-->
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
                                        <ul class="timeline" id="notificaciones-slim">
                                            <!-- Aquí se insertarán las notificaciones con JS -->
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-end"></i></a>
                                </div>
                            </li>
							
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
					<li class="dropdown header-profile">
						<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
							<!--<img src="assets/images/usuario.png" width="20" alt=""/>-->
							<div class="header-info ms-3">
                                <span class="font-w600">
                                    <b>{{ Auth::user()->nombre }}</b> <!-- Nombre del usuario -->
                                </span>
                                <small class="text-end font-w400">
                                    {{ Auth::user()->email }} <!-- Email del usuario -->
                                </small>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
                            <!--<a href="./app-profile.html" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ms-2" style="color: black;">Perfil</span>
                            </a>

                            <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                <span class="ms-2" style="color: black;">Inbox</span>
                            </a> -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            <a href="{{ route('logout') }}" 
                            class="dropdown-item ai-icon" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg>
                                <span class="ms-2" style="color: black;">Cerrar Sesión</span>
                            </a>
                        </div>
					</li>
                    
                    <li>
                        <a href="javascript:void(0);" id="btn-inicio">
                            <i class="fas fa-home"></i> 
                            <span class="nav-text">Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-formularios">
                            <i class="fas fa-file-alt"></i>
                            <span class="nav-text">Iniciar Denuncia</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-orientacion">
                            <i class="fas fa-comments"></i>
                            <span class="nav-text">Orientaciones</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-intervencion">
                            <i class="fas fa-hands-helping"></i>
                            <span class="nav-text">Intervenciones</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" id="btn-buscar-victimas">
                            <i class="fas fa-search"></i>
                            <span class="nav-text">Buscar Victima</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="btn-buscar-denuncias">
                            <i class="fas fa-search-location"></i>
                            <span class="nav-text">Explorar Denuncias</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-denuncias">
                            <i class="fas fa-folder-open"></i>
                            <span class="nav-text">Mis Casos</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-archivados">
                            <i class="fas fa-archive"></i>
                            <span class="nav-text">Archivados</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-emblematicos">
                            <i class="fas fa-star"></i>
                            <span class="nav-text">Emblematicos</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-incompletos">
                            <i class="fas fa-exclamation-triangle"></i>
                            <span class="nav-text">Incompletos</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-reportes">
                            <i class="fas fa-chart-bar"></i>
                            <span class="nav-text">Reportes</span>
                        </a>
                    </li> 
                </ul>

				<div class="copyright">
					<p><strong>Sistema de Denuncias</strong></p>
				</div>
			</div>
        </div> 
        <!--**********************************
            Sidebar end
        ***********************************-->
        <!-- Contenido principal de la vista -->
        <div class="content-body">
            <div class="container-fluid">
                
            <!-- Sección de formularios principales: víctima, agresor y denuncia -->
                <div id="formularios-container" style="display: none;">
                        <div class="card-body">

                            <!-- Agrupación de los formularios iniciales -->
                            <div id="tramo1-victima-agresor">

                                {{-- VÍCTIMA --}}
                                <div id="victima-section">
                                    <!-- Formulario para registrar datos de la víctima -->
                                    <form id="form-victima">
                                    @csrf
                                        @include('victima.form', [
                                            'victima' => $victima,
                                        ])
                                        <div id="victima-table-container" class="mt-4"></div>
                                    </form>
                                    <hr>
                                </div>

                                {{-- AGRESOR --}}
                                <div id="agresor-section" style="display: none;">
                                    <!-- Formulario para registrar los datos del agresor -->
                                    <form id="form-agresor">
                                    @csrf
                                        @include('agresor.form', ['agresor' => $agresor
                                        ])
                                        <!-- Botón para continuar al siguiente paso -->
                                        <div class="text-end mt-3">
                                            <button type="submit" class="btn btn-submit">Continuar</button>
                                        </div>
                                        <div id="agresor-table-container" class="mt-4"></div>
                                    </form>
                                    <hr>
                                </div>

                                {{-- DENUNCIA --}}
                                <div id="denuncia-section" style="display: none;">
                                    <!-- Formulario para registrar la denuncia -->
                                    <form id="form-denuncia">
                                    @csrf
                                        @include('denuncia.form', [
                                            'denuncia' => $denuncia,
                                            'victimas' => $victimas,
                                            'agresores' => $agresores,
                                            'tiposViolencia' => $tiposViolencia,
                                            'violencias' => $violencias
                                        ])
                                        <!-- Botón que se muestra al final del registro para guardar todo -->
                                        <div class="text-end mt-3" id="btn-finalizar-wrapper" style="display: none;">
                                            <button type="submit" class="btn btn-submit">Finalizar</button>
                                        </div>
                                    </form>
                                </div>
                                    <div id="denuncia-table-container" class="mt-4"></div>
                            </div>                          
                        </div>
                    </div>
                </div>


                <!-- Botón para cancelar todo el proceso actual -->
                <div class="text-end mt-3" id="btn-cancelar-denuncia" style="display: none;">
                    <button type="button" class="btn btn-danger">Cancelar</button>
                </div>

                <!-- Muestra el resumen completo del caso luego de guardarlo -->
                <div id="resumen-section" style="display: none;"></div>

                <!-- Sección para ver los detalles de una víctima específica -->
                <div id="detalle-victima-section" style="display: none;"></div>

                <!-- Contenedor para mostrar denuncias "Mis Casos" -->
                <div id="contenedor-tabla-denuncias" style="display: none;"></div>

                <!-- Contenedor para mostrar los casos Archivadoss-->
                <div id="contenedor-tabla-archivados-denuncias" style="display: none;"></div>
    
                <!-- Contenedor para mostrar los casos Incompletos -->
                <div id="contenedor-tabla-incompletos-denuncias" style="display: none;"></div>

                <!-- Buscador de denuncias con filtros-->
                <div id="formulario-busqueda-denuncias" style="display: none;" class="card p-4">
                    <h4 style="margin-left: 16px; font-size: 2rem;"> Buscar Caso</h4>
                    <form id="form-buscar-denuncias">
                        <div class="row">
                            <div class="col-md-3">
                             <label>Codigo SLIM</label>
                                <input type="text" name="cod_slim" class="form-control" placeholder="S1.2.3.4 - codigo de caso">
                            </div>
                            <div class="col-md-3">
                             <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Buscar por nombre">
                            </div>
                            <div class="col-md-3">
                                <label>Desde</label>
                                <input type="date" name="fecha_inicio" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label>Hasta</label>
                                <input type="date" name="fecha_fin" class="form-control">
                            </div>
                            <div class="col-md-3 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary w-100">Buscar</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Tabla resultado del buscador de denuncias con filtros-->
                <div id="resultados-busqueda-denuncias" style="display: none;" class="mt-4"></div>

                <!-- Buscador de victimas con filtros-->
                <div id="formulario-busqueda-victimas" style="display: none;" class="card p-4">
                    <h4 style="margin-left: 16px; font-size: 2rem;"> Buscar Victima</h4>
                    <form id="form-buscar-victimas">
                        <div class="row">    
                            <div class="col-md-4">
                             <label>Nombre</label>
                                <input type="text" name="nombre" class="form-control" placeholder="Buscar por nombre">
                            </div>
                            <div class="col-md-4">
                             <label>Codigo</label>
                                <input type="text" name="cod_slim" class="form-control" placeholder="Buscar por Codigo SLIM">
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary w-100">Ver victimas</button>
                                </div>
                                <div class="col-md-6 d-flex align-items-end">
                                    <button type="button" id="btn-ver-sin-denuncia" class="btn btn-warning w-100">
                                        Ver víctimas sin denuncia
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Tabla resultado del buscador de victimas con filtros-->
                <div id="resultados-busqueda-victimas" style="display: none;" class="mt-4"></div>

                <!-- Sección para generar reportes PDF y Excel -->
                <div id="seccion-reportes" style="display: none;" class="card p-4">
                    <h4>Generar Reportes</h4>
                    <!-- Contenedor de Reportes PDF -->
                    <a href="{{ route('reportes.emblematicos.pdf') }}" class="btn btn-danger mt-3" target="_blank">
                        <i class="fas fa-file-pdf"></i> Generar Reporte PDF - Casos Emblemáticos
                    </a>
                    <a href="{{ route('reporte.victimas.pdf') }}" target="_blank" class="btn btn-danger mt-3">
                        <i class="fas fa-file-pdf"></i> Generar PDF de Victimas
                    </a>
                    <!-- Contenedor de Reportes EXCEL -->
                    <a href="{{ route('reportes.excel') }}" class="btn btn-success mt-3" target="_blank">
                        <i class="fas fa-file-excel"></i> Generar Excel - Casos Emblemáticos
                    </a>
                </div>

                <!-- Contenedor de Orientaciones -->
                <div id="formularios-orientacion-container" style="display: none;">

                    <!-- Botón para iniciar una nueva orientación -->
                    <div class="mb-4">
                        <button id="btn-abrir-orientacion" class="btn btn-primary">
                            ABRIR ORIENTACIÓN
                        </button>
                    </div>

                    <!-- Aquí se cargará la tabla con todas las orientaciones registradas -->
                    <div id="tabla-orientaciones" class="table-responsive bg-white p-3 rounded shadow-sm"></div>

                    <!-- Formulario oculto para registrar una nueva orientación -->
                    <div id="formulario-orientacion" style="display: none;">
                        <form id="form-orientacion">
                         @csrf
                            @include('orientacion.form', [
                              'orientacion' => $orientacion ?? null,  // Se envía valor si es edición
                              'victimas' => $victimas ?? [],
                              'agresores' => $agresores ?? []
                            ])

                            <!-- Botón para guardar los datos de la orientación -->div>
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-submit">Guardar Orientación</button>
                            </div>

                            <!-- Botón para cancelar el registro de orientación -->
                            <div class="text-end mt-2" id="btn-cancelar-orientacion" style="display: block;">
                                <button type="button" class="btn btn-danger">Cancelar</button>
                            </div>
                        </form>
                    </div>

                    <!-- Contenedor donde se mostrará el detalle de una orientación seleccionada -->
                    <div id="detalle-orientacion-section" style="display: none;"></div>
               
                    <!-- Resultado del buscador de orientaciones (inicialmente oculto) -->
                    <div id="resultado-orientaciones" style="display: none;"></div>

                </div>

                <!-- Contenedor de Intervenciones (similar al de orientación) -->
                <div id="formularios-intervencion-container" style="display: none;">

                    <!-- Botón para crear una nueva intervención -->
                    <button id="btn-abrir-intervencion" class="btn btn-primary">ABRIR INTERVENCIÓN</button>

                    <!-- Tabla con las intervenciones ya registradas -->
                    <div id="tabla-intervenciones" class="table-responsive bg-white p-3 rounded shadow-sm"></div>

                    <!-- Formulario para registrar una intervención (oculto inicialmente) -->
                    <div id="formulario-intervencion" style="display: none;">
                        <form id="form-intervencion">@csrf
                            @include('intervencion.form', ['intervencion' => $intervencion ?? null])

                            <!-- Botón para guardar la intervención -->
                            <div class="text-end mt-3">
                                <button type="submit" class="btn btn-submit">Guardar Intervención</button>
                            </div>

                            <!-- Botón para cancelar -->
                            <div class="text-end mt-2" id="btn-cancelar-intervencion">
                                <button type="button" class="btn btn-danger">Cancelar</button>
                            </div>
                        </form>
                    </div>

                    <!-- Muestra el detalle de una intervención seleccionada -->
                    <div id="detalle-intervencion-section" style="display: none;"></div>

                    <!-- Resultado del buscador (inicialmente oculto) -->
                    <div id="resultado-intervenciones" style="display: none;"></div>
                </div>

                <!-- Sección de bienvenida que se muestra al iniciar sesión -->
                <div id="bienvenida-section" style="display: none;">
                    <h1 class="text-center mt-5">¡Bienvenido al Sistema SLIM!</h2>
                    <p class="text-center">Selecciona una opción del menú para comenzar.</p>
                </div>

            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="copyright text-center">
            </div>
        </div>
    </div> <!-- /main-wrapper -->

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    // ------------------------------ORIENTACIONES-----------------------------------
    // Mostrar contenedor principal de orientaciones y cargar la tabla
    document.addEventListener('DOMContentLoaded', function () {
        const btnMostrarOrientacion = document.getElementById('btn-mostrar-orientacion');
        btnMostrarOrientacion?.addEventListener('click', function (e) {
            e.preventDefault();
            ocultarTodosLosContenedores();
            document.getElementById('formularios-orientacion-container').style.display = 'block';
            cargarTablaOrientaciones(); // para que se muestre algo al abrir
        });
    });

    // Oculta la tabla y muestra el formulario para registrar una nueva orientación
    document.addEventListener('DOMContentLoaded', function() {
        const btnAbrir = document.getElementById('btn-abrir-orientacion');
        btnAbrir.addEventListener('click', function() {
            document.getElementById('tabla-orientaciones').style.display = 'none';
            document.getElementById('formulario-orientacion').style.display = 'block';
        });
    });

    // Cancela el formulario de orientación y regresa a la tabla
    document.addEventListener('DOMContentLoaded', () => {
        const btnCancelar = document.querySelector('#btn-cancelar-orientacion button');
        if (btnCancelar) {
            btnCancelar.addEventListener('click', () => {
                document.getElementById('form-orientacion').reset();
                document.getElementById('formulario-orientacion').style.display = 'none';
                document.getElementById('tabla-orientaciones').style.display = 'block';
            });
        }
    });

    // Envía los datos del formulario por AJAX y vuelve a la tabla si se guarda correctamente
    document.addEventListener('DOMContentLoaded', function() {
        const formOrientacion = document.getElementById('form-orientacion');
        formOrientacion.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch("{{ route('orientacion.store') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: formData
            })
            .then(res => {
                if (res.ok) {
                    return res.json();
                } else {
                    throw new Error('Error al guardar');
                }
            })
            .then(() => {
                Swal.fire({
                    icon: 'success',
                    title: 'Orientación guardada correctamente',
                    showConfirmButton: false,
                    timer: 1500
                });

                formOrientacion.reset();
                document.getElementById('formulario-orientacion').style.display = 'none';
                document.getElementById('tabla-orientaciones').style.display = 'block';
                cargarTablaOrientaciones();
            })
            .catch(() => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error al guardar la orientación'
                });
            });
        });
    });

    // Carga el contenido HTML de la tabla de orientaciones vía fetch
    function cargarTablaOrientaciones() {
        fetch("{{ route('orientacion.index') }}")
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error al cargar la tabla de orientaciones');
                }
                return response.text();
            })
            .then(html => {
                document.getElementById('tabla-orientaciones').innerHTML = html;
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'No se pudo cargar la tabla de orientaciones'
                });
            });
    }

    // Muestra el detalle de una orientación al hacer clic en "Ver más"
    document.addEventListener("DOMContentLoaded", () => {
        document.addEventListener("click", function (e) {
            const boton = e.target.closest(".btn-ver-orientacion");
            if (!boton) return;

            const orientacionId = boton.dataset.id;
            // Ocultar todo lo demás
            [
                'formularios-container', 'victima-section', 'agresor-section', 
                'denuncia-section', 'contenedor-tabla-denuncias', 'contenedor-tabla-archivados-denuncias', 
                'contenedor-tabla-incompletos-denuncias', 'formulario-busqueda-denuncias', 'resultados-busqueda-denuncias', 
                'formulario-busqueda-victimas', 'resultados-busqueda-victimas', 'seccion-reportes', 
                'bienvenida-section', 'resumen-section', 'detalle-victima-section', 'tabla-orientaciones', 
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            // Mostrar el contenedor detalle de orientación
            const contenedorDetalle = document.getElementById("detalle-orientacion-section");
            contenedorDetalle.style.display = "block";
            contenedorDetalle.innerHTML = '<div class="p-4 text-center">Cargando orientación...</div>';

            history.pushState({ vista: 'detalle_orientacion' }, '', `#orientacion-${orientacionId}`);

            fetch(`/orientacion/${orientacionId}`)
                .then(res => res.text())
                .then(html => {
                    contenedorDetalle.innerHTML = html;
                })
                .catch(() => {
                    contenedorDetalle.innerHTML = '<div class="alert alert-danger">❌ Error al cargar orientación</div>';
                });
        });
    });

    // Regresa desde el detalle de una orientación hacia la tabla principal
    document.addEventListener("DOMContentLoaded", () => {
        // Escuchar clic en cualquier botón con ID "btn-volver-orientaciones"
        document.addEventListener('click', function (e) {
            if (e.target && e.target.id === 'btn-volver-orientaciones') {
                // Ocultar el contenedor detalle
                const contenedorDetalle = document.getElementById("detalle-orientacion-section");
                if (contenedorDetalle) {
                    contenedorDetalle.style.display = "none";
                }
                // Mostrar nuevamente la tabla de orientaciones
                const contenedorTabla = document.getElementById("tabla-orientaciones");
                if (contenedorTabla) {
                    contenedorTabla.style.display = "block";
                }
                // Cambiar la URL en el historial
                history.pushState({ vista: 'tabla_orientaciones' }, '', '#orientaciones');
            }
        });
    });

    // Muestra la tabla de orientaciones desde cualquier otro punto, ocultando lo demás
    function mostrarTablaOrientaciones() {
        ocultarTodosLosContenedores();
        const tabla = document.getElementById('tabla-orientaciones');
        if (tabla) {
            tabla.style.display = 'block';
        }
        history.pushState({ vista: 'tabla-orientaciones' }, '', '#orientaciones');
    }

    // Función reutilizable para realizar búsqueda de orientaciones por AJAX
    function buscarOrientaciones() {
        const form = document.getElementById('form-buscar-orientacion');
        const formData = new FormData(form);
        const params = new URLSearchParams(formData).toString();

        fetch(form.action + '?' + params, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(res => res.text())
        .then(html => {
            document.getElementById('tabla-orientaciones').innerHTML = html;
        })
        .catch(() => {
            Swal.fire({
                icon: 'error',
                title: 'No se pudo cargar resultados'
            });
        });
    }

    // Muestra la tabla completa de orientaciones y oculta los resultados de búsqueda
    function verTodasLasOrientaciones() {
        document.getElementById('resultado-orientaciones').style.display = 'none';
        document.getElementById('tabla-orientaciones').style.display = 'block';
    }

    // Oculta todas las secciones del sistema, incluyendo formularios, tablas y detalles
    function ocultarTodosLosContenedores() {
        [
            // Secciones de Denuncia
            'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
            'domicilio-section-victima', 'domicilio-section-agresor', 'domicilio-trabajo-section',
            'resumen-section', 'contenedor-tabla-denuncias', 'formulario-busqueda-denuncias',
            'resultados-busqueda-denuncias', 'formulario-busqueda-victimas', 'resultados-busqueda-victimas',
            'seccion-reportes', 'bienvenida-section', 'contenedor-tabla-archivados-denuncias',
            'contenedor-tabla-incompletos-denuncias', 'detalle-victima-section', 'btn-cancelar-denuncia', 

            // Secciones de Orientación 
            'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section',
            
            // Seccion de Intervencion
            'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section'

        ].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.style.display = 'none';
        });
    }

    // ------------------------------INTERVENCIONES-----------------------------------
    // Mostrar contenedor principal de intervenciones y cargar la tabla
    document.addEventListener('DOMContentLoaded', function () {
        const btnMostrarIntervencion = document.getElementById('btn-mostrar-intervencion');
        btnMostrarIntervencion?.addEventListener('click', function (e) {
            e.preventDefault();
            ocultarTodosLosContenedores();
            document.getElementById('formularios-intervencion-container').style.display = 'block';
            cargarTablaIntervenciones(); // para que se muestre algo al abrir
        });
    });

    // Oculta la tabla y muestra el formulario para registrar una nueva intervención
    document.addEventListener('DOMContentLoaded', function() {
        const btnAbrir = document.getElementById('btn-abrir-intervencion');
        btnAbrir.addEventListener('click', function() {
            document.getElementById('tabla-intervenciones').style.display = 'none';
            document.getElementById('formulario-intervencion').style.display = 'block';
        });
    });

    // Cancela el formulario de intervención y regresa a la tabla
    document.addEventListener('DOMContentLoaded', () => {
        const btnCancelar = document.querySelector('#btn-cancelar-intervencion button');
        if (btnCancelar) {
            btnCancelar.addEventListener('click', () => {
                document.getElementById('form-intervencion').reset();
                document.getElementById('formulario-intervencion').style.display = 'none';
                document.getElementById('tabla-intervenciones').style.display = 'block';
            });
        }
    });

    // Envía los datos del formulario por AJAX y vuelve a la tabla si se guarda correctamente
    document.addEventListener('DOMContentLoaded', function() {
        const formIntervencion = document.getElementById('form-intervencion');
        formIntervencion.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);

            fetch("{{ route('intervencion.store') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: formData
            })
            .then(res => {
                if (res.ok) {
                    return res.json();
                } else {
                    throw new Error('Error al guardar');
                }
            })
            .then(() => {
                Swal.fire({
                    icon: 'success',
                    title: 'Intervención guardada correctamente',
                    showConfirmButton: false,
                    timer: 1500
                });

                formIntervencion.reset();
                document.getElementById('formulario-intervencion').style.display = 'none';
                document.getElementById('tabla-intervenciones').style.display = 'block';
                cargarTablaIntervenciones();
            })
            .catch(() => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error al guardar la intervención'
                });
            });
        });
    });

    // Carga el contenido HTML de la tabla de intervenciones vía fetch
    function cargarTablaIntervenciones() {
        fetch("{{ route('intervencion.index') }}")
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error al cargar la tabla de intervenciones');
                }
                return response.text();
            })
            .then(html => {
                document.getElementById('tabla-intervenciones').innerHTML = html;
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'No se pudo cargar la tabla de intervenciones'
                });
            });
    }

    // Muestra el detalle de una intervención al hacer clic en "Ver más"
    document.addEventListener("DOMContentLoaded", () => {
        document.addEventListener("click", function (e) {
            const boton = e.target.closest(".btn-ver-intervencion");
            if (!boton) return;

            const intervencionId = boton.dataset.id;
            // Ocultar todo lo demás
            [
                'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
                'contenedor-tabla-denuncias', 'contenedor-tabla-archivados-denuncias', 
                'contenedor-tabla-incompletos-denuncias', 'formulario-busqueda-denuncias', 'resultados-busqueda-denuncias', 
                'formulario-busqueda-victimas', 'resultados-busqueda-victimas', 'seccion-reportes', 
                'bienvenida-section', 'resumen-section', 'detalle-victima-section','tabla-intervenciones'
            ]

            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            // Mostrar el contenedor detalle de intervención
            const contenedorDetalle = document.getElementById("detalle-intervencion-section");
            contenedorDetalle.style.display = "block";
            contenedorDetalle.innerHTML = '<div class="p-4 text-center">Cargando intervención...</div>';

            history.pushState({ vista: 'detalle_intervencion' }, '', `#intervencion-${intervencionId}`);

            fetch(`/intervencion/${intervencionId}`)
                .then(res => res.text())
                .then(html => {
                    contenedorDetalle.innerHTML = html;
                })
                .catch(() => {
                    contenedorDetalle.innerHTML = '<div class="alert alert-danger">❌ Error al cargar intervención</div>';
                });
        });
    });

    // Regresa desde el detalle de una intervención hacia la tabla principal
    document.addEventListener("DOMContentLoaded", () => {
        // Escuchar clic del botón con ID "btn-volver-intervenciones"
        document.addEventListener('click', function (e) {
            if (e.target && e.target.id === 'btn-volver-intervenciones') {
                // Ocultar el contenedor detalle
                const contenedorDetalle = document.getElementById("detalle-intervencion-section");
                if (contenedorDetalle) {
                    contenedorDetalle.style.display = "none";
                }
                // Mostrar nuevamente la tabla de intervenciones
                const contenedorTabla = document.getElementById("tabla-intervenciones");
                if (contenedorTabla) {
                    contenedorTabla.style.display = "block";
                }
                // Cambiar la URL en el historial
                history.pushState({ vista: 'tabla_intervenciones' }, '', '#intervenciones');
            }
        });
    });

    // Muestra la tabla de intervenciones desde cualquier otro punto, ocultando lo demás
    function mostrarTablaIntervenciones() {
        ocultarTodosLosContenedores();
        const tabla = document.getElementById('tabla-intervenciones');
        if (tabla) {
            tabla.style.display = 'block';
        }
        history.pushState({ vista: 'tabla-intervenciones' }, '', '#intervenciones');
    }

    // Oculta todas las secciones del sistema, incluyendo formularios, tablas y detalles
    function ocultarTodosLosContenedores() {
        [
            // Secciones de Denuncia
            'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
            'domicilio-section-victima', 'domicilio-section-agresor', 'domicilio-trabajo-section',
            'resumen-section', 'contenedor-tabla-denuncias', 'formulario-busqueda-denuncias',
            'resultados-busqueda-denuncias', 'formulario-busqueda-victimas', 'resultados-busqueda-victimas',
            'seccion-reportes', 'bienvenida-section', 'contenedor-tabla-archivados-denuncias',
            'contenedor-tabla-incompletos-denuncias', 'detalle-victima-section', 'btn-cancelar-denuncia', 

            // Secciones de Intervención
            'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section',

            // Secciones de Orientacion
            'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section'


        ].forEach(id => {
            const el = document.getElementById(id);
            if (el) el.style.display = 'none';
        });
    }

    // Función reutilizable para realizar búsqueda de intervenciones por AJAX
    function buscarIntervenciones() {
        const form = document.getElementById('form-buscar-intervencion');
        const formData = new FormData(form);
        const params = new URLSearchParams(formData).toString();

        fetch(form.action + '?' + params, {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(res => res.text())
        .then(html => {
            document.getElementById('tabla-intervenciones').innerHTML = html;
        })
        .catch(() => {
            Swal.fire({
                icon: 'error',
                title: 'No se pudo cargar resultados'
            });
        });
    }

    // Muestra la tabla completa de intervenciones y oculta los resultados de búsqueda
    function verTodasLasIntervenciones() {
        document.getElementById('resultado-intervenciones').style.display = 'none';
        document.getElementById('tabla-intervenciones').style.display = 'block';
    }



    // ------------------------------BOTON INICIAR DENUNCIA ---------------------------------------------------------------------------
    // Boton de inicio
    document.addEventListener("DOMContentLoaded", () => {
        const btnInicio = document.getElementById('btn-inicio');
        const bienvenida = document.getElementById('bienvenida-section');

        btnInicio.addEventListener("click", () => {
            // Ocultar todo lo demás
            [
                // Secciones de Denuncia
                'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
                'btn-cancelar-denuncia', 'domicilio-section-victima', 'domicilio-section-agresor', 
                'domicilio-trabajo-section', 'resumen-section', 'contenedor-tabla-denuncias', 
                'detalle-victima-section', 'formulario-busqueda-denuncias', 'resultados-busqueda-denuncias',
                'formulario-busqueda-victimas', 'resultados-busqueda-victimas', 'seccion-reportes', 
                'contenedor-tabla-archivados-denuncias', 'contenedor-tabla-incompletos-denuncias',
                "resultados-busqueda-victimas", "detalle-victima-section",

                // Secciones de Orientacion
                'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section',

                // Secciones de Intervención
                'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section'
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            // Mostrar bienvenida
            bienvenida.style.display = 'block';

            // Actualizar URL sin recargar
            history.pushState({ vista: 'inicio' }, '', '#inicio');
        });
    });

    //Muestra el botón "Cancelar" al iniciar una denuncia y, al hacer clic en él
    document.addEventListener("DOMContentLoaded", () => {
        const btnCancelar = document.getElementById('btn-cancelar-denuncia');
        const btnIniciar = document.getElementById('btn-mostrar-formularios');

        // Mostrar botón cancelar al iniciar denuncia
        btnIniciar.addEventListener('click', () => {
            btnCancelar.style.display = 'block';
        });

        // Al hacer clic en cancelar
        btnCancelar.querySelector('button').addEventListener('click', () => {
            // Ocultar formularios
            [
                'formularios-container', 'victima-section', 'agresor-section', 
                'denuncia-section', 'domicilio-section-victima', 'domicilio-section-agresor', 
                'domicilio-trabajo-section', 'bienvenida-section','formulario-orientacion',
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            // Limpiar formularios (opcional)
            ['form-victima', 'form-agresor', 'form-denuncia'].forEach(formId => {
                const f = document.getElementById(formId);
                if (f) f.reset();
            });

            // Ocultar botón cancelar
            btnCancelar.style.display = 'none';
        });
    });

    // Muestra el contenedor de formularios y solo la sección de la víctima, 
    document.addEventListener("DOMContentLoaded", () => {
        const btn = document.getElementById('btn-mostrar-formularios');

        btn.addEventListener('click', () => {
            // Ocultar todas las demás secciones
            [
                // Seccion de Denuncia
                'formularios-container', 'victima-section','agresor-section', 'denuncia-section',
                'domicilio-section-victima', 'domicilio-section-agresor', 'domicilio-trabajo-section',
                'resumen-section', 'contenedor-tabla-denuncias', 'formulario-busqueda-denuncias',
                'resultados-busqueda-denuncias', 'formulario-busqueda-victimas', 'resultados-busqueda-victimas',
                'seccion-reportes', 'bienvenida-section', 'contenedor-tabla-archivados-denuncias',
                'contenedor-tabla-incompletos-denuncias', "resultados-busqueda-victimas", "detalle-victima-section",

                // Seccion de Orientacion
                'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section',

                // Seccion de Intervencion
                'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section'
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            // Mostrar contenedor principal y tramo 1
            document.getElementById('formularios-container').style.display = 'block';
            document.getElementById('victima-section').style.display = 'block';

            // Historial para navegación
            history.pushState({ vista: 'formulario' }, '', '#formulario');
        });
    });

    // Muestra sección de víctima, ocultando específicamente la de agresor y tabla de denuncias.
    document.addEventListener("DOMContentLoaded", () => {
        const btnMostrar = document.getElementById('btn-mostrar-formularios');
        btnMostrar.addEventListener('click', () => {
            document.getElementById('formularios-container').style.display = 'block';
            document.getElementById('victima-section').style.display = 'block';
            document.getElementById('agresor-section').style.display = 'none';
            document.getElementById('contenedor-tabla-denuncias').style.display = 'none';
        });
    });

    // Envía el formulario de víctima por AJAX. Si se guarda correctamente, limpia el formulario 
    // oculta la sección víctima y muestra la del agresor.*/ 
    document.addEventListener("DOMContentLoaded", () => {
        const formVictima = document.getElementById('form-victima');
        if (!formVictima) return;

        formVictima.addEventListener('submit', e => {
            e.preventDefault();

            const formData = new FormData(formVictima);

            fetch("{{ route('victimas.store') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': formVictima.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(res => {
                if (res.ok) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Víctima guardada correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    });

                    formVictima.reset();

                    // Ocultar víctima y mostrar agresor
                    document.getElementById('victima-section').style.display = 'none';
                    document.getElementById('agresor-section').style.display = 'block';
                } else {
                    throw new Error('Error de respuesta');
                }
            })
            .catch(() => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error de conexión',
                    text: 'Intenta nuevamente más tarde.'
                });
            });
        });
    });

    // Envía el formulario del agresor y muestra el formulario de denuncia y actualiza los selects de las victimas y agresores
    document.addEventListener("DOMContentLoaded", () => {
        const form = document.getElementById('form-agresor');
        if (!form) return;

        form.addEventListener('submit', e => {
            e.preventDefault();

            // ✅ Validar que el campo nombre no esté vacío
            const nombre = form.querySelector('[name="nombre"]');
            if (!nombre || nombre.value.trim() === '') {
                Swal.fire({
                    icon: 'warning',
                    title: 'Campo requerido',
                    text: 'Por favor, ingrese el nombre del agresor. Si no se cuenta con el nombre llenar con "Agresor"'
                });
                return; // No continúa si el campo está vacío
            }

            const formData = new FormData(form);        
            fetch("{{ route('agresor.store') }}", {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(async res => {
                if (res.ok) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Agresor guardado correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    });

                    form.reset();
                    document.getElementById('btn-finalizar-wrapper').style.display = 'block';

                    // Ocultar víctima y agresor, mostrar denuncia
                    document.getElementById('victima-section').style.display = 'none';
                    document.getElementById('agresor-section').style.display = 'none';
                    document.getElementById('denuncia-section').style.display = 'block';

                    // ACTUALIZAR SELECTS DE DENUNCIA
                    actualizarSelectsVictimaAgresor();
                } else {
                    throw new Error("Respuesta no válida");
                }
            });
        });
    });

    // Actualizar selects de víctima y agresor
    function actualizarSelectsVictimaAgresor() {
        fetch('/api/victimas-y-agresores')
            .then(res => res.json())
            .then(data => {
                const selectVictima = document.getElementById('id_victima');
                const selectAgresor = document.getElementById('id_agresor');

                if (!selectVictima || !selectAgresor) return;

                // Limpiar opciones
                selectVictima.innerHTML = '<option value="">Seleccione una víctima</option>';
                selectAgresor.innerHTML = '<option value="">Seleccione un agresor</option>';

                let ultimaVictimaId = null;
                let ultimoAgresorId = null;

                // Insertar nuevas víctimas
                data.victimas.forEach(v => {
                    const opt = document.createElement('option');
                    opt.value = v.id;
                    opt.textContent = `${v.nombre} ${v.ap_paterno}`;
                    selectVictima.appendChild(opt);
                    ultimaVictimaId = v.id;
                });

                // Insertar nuevos agresores
                data.agresores.forEach(a => {
                    const opt = document.createElement('option');
                    opt.value = a.id;
                    opt.textContent = `${a.nombre} ${a.ap_paterno}`;
                    selectAgresor.appendChild(opt);
                    ultimoAgresorId = a.id;
                });

                // Seleccionar automáticamente los últimos insertados
                if (ultimaVictimaId) selectVictima.value = ultimaVictimaId;
                if (ultimoAgresorId) selectAgresor.value = ultimoAgresorId;
            });
    }

    // Guardar denuncia vía AJAX y muestra resumen
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById('form-denuncia');
        if (!form) return;

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(form);

            fetch("{{ route('denuncia.store') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(res => {
                if (!res.ok) throw new Error('Error en el guardado');
                return res.json();
            })
            .then(data => {
                Swal.fire({
                    icon: 'success',
                    title: '📄 Denuncia guardada correctamente',
                    showConfirmButton: false,
                    timer: 1500
                });

                form.reset();

                document.getElementById('btn-cancelar-denuncia').style.display = 'none';
                document.getElementById('btn-finalizar-wrapper').style.display = 'none';

                // Ocultar todos los formularios
                [
                    'victima-section', 'agresor-section', 'denuncia-section', 'tramo2-domicilio', 'domicilio-section-victima', 
                    'domicilio-section-agresor', 'domicilio-trabajo-section', 'bienvenida-section'
                ]
                .forEach(id => {
                    const el = document.getElementById(id);
                    if (el) el.style.display = 'none';
                });

                // Mostrar resumen del caso recién creado
                fetch(`/denuncias/resumen/${data.id}`)
                    .then(res => res.text())
                    .then(html => {
                        const resumen = document.getElementById('resumen-section');
                        if (resumen) {
                            resumen.innerHTML = html;
                            resumen.style.display = 'block';
                        }
                    });
            })
            .catch(() => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error al guardar la denuncia',
                    text: 'Revisa los campos obligatorios o vuelve a intentarlo.'
                });
            });
        });
    });

    /*Inicializar el plugin Select2 en los campos select para seleccionar múltiples 
    tipos de violencia de forma elegante y funcional.*/
    document.addEventListener("DOMContentLoaded", () => {
        $('.select2').select2({
            tags: true,
            placeholder: "Seleccione o escriba...",
            width: '100%'
        });
    });

    // ---------------------------------MIS CASOS--------------------------------------------------------------------------------
    // Mostrar tabla de denuncias registradas
    document.addEventListener("DOMContentLoaded", () => {
        const btnMisCasos = document.getElementById('btn-mostrar-denuncias');
        btnMisCasos.addEventListener('click', () => {
            // Ocultar todos los formularios y secciones extra
            [
                // Seccion de Denuncia
                'formularios-container', 'victima-section',  'agresor-section', 'denuncia-section',
                'domicilio-section-victima', 'domicilio-section-agresor', 'domicilio-trabajo-section',
                'resumen-section', 'btn-cancelar-denuncia', 'formulario-busqueda-denuncias',
                'formulario-busqueda-denuncias', 'resultados-busqueda-denuncias', 'formulario-busqueda-victimas', 
                'resultados-busqueda-victimas', 'seccion-reportes', 'bienvenida-section', 
                'contenedor-tabla-archivados-denuncias', 'contenedor-tabla-incompletos-denuncias',
                "resultados-busqueda-victimas", "detalle-victima-section",
            
                // Seccion de Orientacion
                'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section',
                
                // Seccion de Intervencion
                'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section'
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            // Mostrar contenedor de denuncias
            const contenedor = document.getElementById('contenedor-tabla-denuncias');
            contenedor.style.display = 'block';

            // Cambiar la URL y estado del historial
            history.pushState({ vista: 'tabla' }, '', '#mis-casos');

            // Cargar contenido desde el index de denuncias
            fetch("{{ route('denuncia.index') }}")
                .then(res => res.text())
                .then(html => {
                    contenedor.innerHTML = html;
                });
        });
    });


    //-------------------------EXPLORAR DENUNCIAS ----------------------------------------------------------------------------------------
    // Muestra el formulario de búsqueda de denuncias y su contenedor de resultados, 
    document.addEventListener("DOMContentLoaded", () => {
        const btnBuscarDenuncias = document.getElementById('btn-buscar-denuncias');
        const formulario = document.getElementById('formulario-busqueda-denuncias');
        const resultados = document.getElementById('resultados-busqueda-denuncias');

        btnBuscarDenuncias.addEventListener('click', () => {
            // Oculta lo demás
            [
                // Seccion de Denuncia
                'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
                'domicilio-section-victima', 'domicilio-section-agresor', 'domicilio-trabajo-section',
                'resumen-section', 'contenedor-tabla-denuncias', 'btn-cancelar-denuncia', 'formulario-busqueda-victimas', 
                'resultados-busqueda-victimas', 'seccion-reportes', 'bienvenida-section',
                'contenedor-tabla-archivados-denuncias', 'contenedor-tabla-incompletos-denuncias',
                "resultados-busqueda-victimas", "detalle-victima-section",
                
                // Seccion de Orientacion
                'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section',

                // Seccion de Intervencion
                'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section'
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            // Muestra solo el buscador
            formulario.style.display = 'block';
            resultados.style.display = 'block';
            resultados.innerHTML = ''; // limpia antes de buscar

            history.pushState({ vista: 'buscar' }, '', '#buscar');

        });

        // Manejador del submit de búsqueda
        const form = document.getElementById('form-buscar-denuncias');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(form);

            fetch("{{ route('denuncia.buscar') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: formData
            })
            .then(res => res.text())
            .then(html => {
                resultados.innerHTML = html;
            })
            .catch(() => {
                resultados.innerHTML = `<div class="alert alert-danger">Error al buscar denuncias.</div>`;
            });
        });
    });


    // --------------------------------BUSCAR VICTIMAS-----------------------------------------------------------------------------------
    // Muestra el formulario de búsqueda de victimas y su contenedor de resultados, 
    document.addEventListener("DOMContentLoaded", () => {
        const btnBuscarVictimas = document.getElementById('btn-buscar-victimas');
        const formulario = document.getElementById('formulario-busqueda-victimas');
        const resultados = document.getElementById('resultados-busqueda-victimas');

        btnBuscarVictimas.addEventListener('click', () => {
            // Oculta lo demás
            [
                // Seccion de Denuncia
                'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
                'domicilio-section-victima', 'domicilio-section-agresor',  'domicilio-trabajo-section',
                'resumen-section', 'contenedor-tabla-denuncias', 'btn-cancelar-denuncia',
                'formulario-busqueda-denuncias', 'resultados-busqueda-denuncias', 'seccion-reportes', 
                'bienvenida-section', 'contenedor-tabla-archivados-denuncias', 
                'contenedor-tabla-incompletos-denuncias', "detalle-victima-section",

                // Sector de Orientacion
                'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section',

                // Sector de Intervencion
                'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section'
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            // Muestra solo el buscador
            formulario.style.display = 'block';
            resultados.style.display = 'block';
            resultados.innerHTML = ''; // limpia antes de buscar

            history.pushState({ vista: 'buscar_victima' }, '', '#buscar_victima');

        });

        // Manejador del submit de búsqueda
        const form = document.getElementById('form-buscar-victimas');
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(form);

            fetch("{{ route('victima.buscar') }}", {
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: formData
            })
            .then(res => res.text())
            .then(html => {
                resultados.innerHTML = html;
            })
            .catch(() => {
                resultados.innerHTML = `<div class="alert alert-danger">Error al buscar victimas.</div>`;
            });
        });

        // Mostrar víctimas sin denuncia (por AJAX)
        const btnSinDenuncia = document.getElementById('btn-ver-sin-denuncia');
        if (btnSinDenuncia) {
            btnSinDenuncia.addEventListener('click', () => {
                fetch('/victimas/sin-denuncia', {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(res => res.text())
                .then(html => {
                    // Oculta lo demás
                    [
                        'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
                        'formulario-busqueda-denuncias', 'resultados-busqueda-denuncias', 'bienvenida-section',
                        'contenedor-tabla-denuncias', 'contenedor-tabla-archivados-denuncias',
                        'contenedor-tabla-incompletos-denuncias', 'resumen-section', 'detalle-victima-section',
                        'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section'

                    ].forEach(id => {
                        const el = document.getElementById(id);
                        if (el) el.style.display = 'none';
                    });

                    // Muestra el contenedor de resultados
                    const resultados = document.getElementById('resultados-busqueda-victimas');
                    resultados.innerHTML = html;
                    resultados.style.display = 'block';

                    // Actualiza el historial
                    history.pushState({ vista: 'victimas_sin_denuncia' }, '', '#victimas_sin_denuncia');
                })
                .catch(() => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al buscar víctimas sin denuncia'
                    });
                });
            });
        }
    });


    //---------------------------------------EMBLEMATICOS--------------------------------------------------------------------------
    // Oculta todos los formularios y secciones y muestra la tabla de denuncias filtradas por emblemáticas, 
    document.addEventListener("DOMContentLoaded", () => {
        const btn = document.getElementById('btn-mostrar-emblematicos');
        btn.addEventListener('click', () => {
            // Ocultar todos los formularios y otras secciones
            [
                // Seccion de Denuncia
                'formularios-container', 'victima-section', 'agresor-section',  'denuncia-section',
                'domicilio-section-victima', 'domicilio-section-agresor', 'domicilio-trabajo-section',
                'resumen-section', 'btn-cancelar-denuncia', 'formulario-busqueda-denuncias',
                'resultados-busqueda-denuncias', 'formulario-busqueda-victimas', 'resultados-busqueda-victimas', 
                'seccion-reportes','bienvenida-section', 'contenedor-tabla-archivados-denuncias', 
                'contenedor-tabla-incompletos-denuncias', "resultados-busqueda-victimas", "detalle-victima-section",
            
                // Sector de Orientacion
                'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section',

                // Sector de Intervencion
                'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section'
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            const contenedor = document.getElementById('contenedor-tabla-denuncias');
            contenedor.style.display = 'block';

            history.pushState({ vista: 'emblematicos' }, '', '#emblematicos');

            fetch("{{ route('denuncia.emblematicos') }}")
                .then(res => res.text())
                .then(html => {
                    contenedor.innerHTML = html;
                });
        });
    });


    // ---------------------------------ARCHIVADOS----------------------------------------------------------------------------------
    // Oculta todos los formularios y secciones y muestra la tabla de denuncias filtradas por archivados
    document.addEventListener("DOMContentLoaded", () => {
        const btn = document.getElementById('btn-mostrar-archivados');
        btn.addEventListener('click', () => {
            // Ocultar todos los formularios y otras secciones
            [
                // Sector de Denuncia
                'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
                'domicilio-section-victima', 'domicilio-section-agresor', 'domicilio-trabajo-section',
                'resumen-section', 'btn-cancelar-denuncia', 'formulario-busqueda-denuncias',
                'resultados-busqueda-denuncias', 'formulario-busqueda-victimas', 'resultados-busqueda-victimas', 
                'seccion-reportes', 'bienvenida-section', 'contenedor-tabla-denuncias',
                'contenedor-tabla-incompletos-denuncias',"resultados-busqueda-victimas", "detalle-victima-section",
                    
                // Sector de Orientaciones
                'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section',

                // Sector de Intervencion
                'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section'
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            const contenedor = document.getElementById('contenedor-tabla-archivados-denuncias');
            contenedor.style.display = 'block';

            history.pushState({ vista: 'archivados' }, '', '#archivados');

            fetch("{{ route('denuncia.archivados') }}")
                .then(res => res.text())
                .then(html => {
                    contenedor.innerHTML = html;
                });
        });
    });


    //------------------------------------VER RESUMEN DE CADA DENUNCIA----------------------------------------------------------------
    // Al hacer clic en el botón de resumen, oculta todo, carga y muestra el resumen de una denuncia específica 
    document.addEventListener("DOMContentLoaded", () => {
        document.addEventListener("click", function (e) {
            const boton = e.target.closest(".btn-ver-resumen");
            if (!boton) return;

            const denunciaId = boton.dataset.id;

            // Ocultar todo lo demás
            [
                // Sector de IntDenuncia
                'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
                'contenedor-tabla-denuncias', 'resumen-section', 'btn-cancelar-denuncia', 
                'formulario-busqueda-denuncias', 'resultados-busqueda-denuncias', 'seccion-reportes', 
                'bienvenida-section', 'contenedor-tabla-incompletos-denuncias', "resultados-busqueda-victimas",
                "detalle-victima-section",
                
                // Sector de Orientacion
                'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section',

                 // Sector de Intervencion
                'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section'
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            // Mostrar el resumen
            const contenedorResumen = document.getElementById("resumen-section");
            contenedorResumen.style.display = "block";
            contenedorResumen.innerHTML = '<div class="p-4 text-center">Cargando resumen...</div>';

            history.pushState({ vista: 'resumen' }, '', '#resumen');

            fetch(`/denuncias/resumen/${denunciaId}`)
                .then(res => res.text())
                .then(html => {
                    contenedorResumen.innerHTML = html;
                })
                .catch(() => {
                    contenedorResumen.innerHTML = '<div class="alert alert-danger"> Error al cargar el resumen</div>';
                });
        });
    });

    // Mostrar resumen de una victima
    document.addEventListener("DOMContentLoaded", () => {
        document.addEventListener("click", function (e) {
            const boton = e.target.closest(".btn-ver-detalle-victima");
            if (!boton) return;
            const victimaId = boton.dataset.id;
            // Ocultar todo lo demás
            [
                'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
                'contenedor-tabla-denuncias', 'resumen-section', 'btn-cancelar-denuncia', 
                'formulario-busqueda-denuncias', 'resultados-busqueda-denuncias', 'formulario-busqueda-victimas',
                'resultados-busqueda-victimas', 'seccion-reportes', 'bienvenida-section', 
                'contenedor-tabla-incompletos-denuncias'
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            // Mostrar el resumen
            const contenedorDetalle = document.getElementById("detalle-victima-section");
            contenedorDetalle.style.display = "block";
            contenedorDetalle.innerHTML = '<div class="p-4 text-center">Cargando detalle...</div>';

            history.pushState({ vista: 'detalle_victima' }, '', '#detalle_victima');

            fetch(`/victimas/detalle/${victimaId}`)
                .then(res => res.text())
                .then(html => {
                    contenedorDetalle.innerHTML = html;
                })
                .catch(() => {
                    contenedorDetalle.innerHTML = '<div class="alert alert-danger"> Error al cargar el detalle</div>';
                });
        });
        // 🔙 Al volver atrás con el navegador
        window.addEventListener("popstate", function () {
            const detalle = document.getElementById("detalle-victima-section");
            if (detalle) detalle.style.display = 'none';        
        });
    });


    // ---------------------------------------------REGISTRAR ACCIONES --------------------------------------------------------
    // Muestra el formulario para registrar acciones relacionadas a la denuncia actual.
    document.addEventListener("DOMContentLoaded", () => {
        document.addEventListener("click", function (e) {
            const btnAcciones = e.target.closest("#btn-ver-acciones");
            if (!btnAcciones) return;

            const denunciaId = btnAcciones.dataset.id;

            fetch(`/acciones/formulario/${denunciaId}`)
                .then(response => response.text())
                .then(html => {
                    // Insertar el formulario debajo del resumen
                    const resumen = document.getElementById("resumen-section");

                    // Elimina cualquier formulario anterior si ya existe
                    const existente = document.getElementById("acciones-form-container");
                    if (existente) existente.remove();

                    // Crear contenedor
                    const contenedor = document.createElement("div");
                    contenedor.id = "acciones-form-container";
                    contenedor.innerHTML = html;
                    resumen.appendChild(contenedor);

                    // Scroll al formulario
                    contenedor.scrollIntoView({ behavior: "smooth" });
                })
                .catch(() => {
                    alert(" Error al cargar el formulario de acciones.");
                });
        });
    });

    // Guarda una nueva acción mediante AJAX, y recarga automáticamente el resumen actualizado sin recargar la página
    document.addEventListener("DOMContentLoaded", () => {
        document.addEventListener("submit", function (e) {
            const form = e.target.closest("form");
            if (!form || !form.action.includes("/accions")) return;

            e.preventDefault(); // Evitamos la redirección por defecto

            const formData = new FormData(form);
            const denunciaId = form.querySelector('input[name="denuncia_id"]')?.value;

            fetch(form.action, {
                method: "POST",
                headers: {
                    "X-CSRF-TOKEN": form.querySelector('input[name="_token"]').value
                },
                body: formData
            })
            .then(res => {
                if (!res.ok) throw new Error();
                return res.text(); // Porque tu store redirige, no devuelve JSON
            })
            .then(() => {
                Swal.fire({
                    icon: 'success',
                    title: 'Acción guardada',
                    showConfirmButton: false,
                    timer: 1200
                });

                // Recargar la vista de resumen
                return fetch(`/denuncias/resumen/${denunciaId}`);
            })
            .then(res => res.text())
            .then(html => {
                const resumen = document.getElementById("resumen-section");
                if (resumen) {
                    resumen.innerHTML = html;
                    resumen.scrollIntoView({ behavior: "smooth" });
                }
            })
            .catch(() => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'No se pudo guardar la acción. Intenta nuevamente.'
                });
            });
        });
    });


    //--------------------------------ACTUALIZAR EL ESTADO DE LA DENUNCIA------------------------------------------------------------
    // BOTON Y FORM PARA ACTUALIZAR EL ESTADO DE LA DENUNCIA
    function mostrarFormularioEstado(id, estadoActual) {
        const contenedor = document.getElementById('formulario-estado-container');
        contenedor.innerHTML = `
            <form id="form-editar-estado" style="background: #f8f9fa; padding: 15px; border: 1px solid #ddd;">
                @csrf
                <input type="hidden" name="id" value="${id}">
                <label for="estado-select">Nuevo estado:</label>
                <select name="estado" id="estado-select" class="form-control mb-2">
                    <option value="Recepcion" ${estadoActual === 'Recepcion' ? 'selected' : ''}>Recepción</option>
                    <option value="Investigación" ${estadoActual === 'Investigación' ? 'selected' : ''}>Investigación</option>
                    <option value="Concluido" ${estadoActual === 'Concluido' ? 'selected' : ''}>Concluido</option>
                    <option value="Archivado" ${estadoActual === 'Archivado' ? 'selected' : ''}>Archivado</option>
                </select>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        `;
        contenedor.style.display = 'block';

        document.getElementById('form-editar-estado').addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);
            const id = formData.get('id');

            fetch(`/denuncia/estado/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
                body: formData
            })
            .then(res => {
                if (!res.ok) throw new Error();
                return res.text();
            })
            .then(() => {
                Swal.fire({
                    icon: 'success',
                    title: 'Estado actualizado correctamente',
                    showConfirmButton: false,
                    timer: 1500
                });

                // Recargar resumen
                return fetch(`/denuncias/resumen/${id}`);
            })
            .then(res => res.text())
            .then(html => {
                document.getElementById("resumen-section").innerHTML = html;
            })
            .catch(() => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error al actualizar el estado',
                });
            });
        });
    }


    //------------------------------ACTUALIZAR EL TESTIMONIO------------------------------------------------------------------------
    // BOTON Y FORM PARA ACTUALIZAR EL TESTIMONIO DE LA DENUNCIA
    function mostrarFormularioTestimonio(id, testimonioActual) {
        const contenedor = document.getElementById('formulario-testimonio-container');
        contenedor.innerHTML = `
            <form id="form-editar-testimonio" style="background: #f8f9fa; padding: 15px; border: 1px solid #ddd;">
                @csrf
                <input type="hidden" name="id" value="${id}">
                <label for="testimonio-select">Nuevo testimonio:</label>
                <input type="text" name="testimonio" class="form-control mb-2" value="${testimonioActual}" style="text-transform: uppercase;">
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        `;

        document.getElementById('form-editar-testimonio').addEventListener('submit', function (e) {
            e.preventDefault();

            // 🔠 Forzar a mayúsculas antes de enviar
            this.testimonio.value = this.testimonio.value.toUpperCase();

            const formData = new FormData(this);
            const id = formData.get('id');


            fetch(`/denuncia/testimonio/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
                body: formData
            })
            .then(res => {
                if (!res.ok) throw new Error();
                return res.text();
            })
            .then(() => {
                Swal.fire({
                    icon: 'success',
                    title: 'Testimonio actualizado',
                    showConfirmButton: false,
                    timer: 1500
                });

                // Recargar solo la parte del resumen
                return fetch(`/denuncias/resumen/${id}`);
            })
            .then(res => res.text())
            .then(html => {
                document.getElementById("resumen-section").innerHTML = html;
            })
            .catch(() => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error al actualizar testimonio',
                });
            });
        });
    }


    //----------------------------------------------ACTUALIZAR DELITOS -------------------------------------------------------------
    // BOTON Y FORM DE DELITOS
    function mostrarFormularioDelitos(id, delitosActualesJson) {
        let delitosActuales = [];
        try {
            delitosActuales = JSON.parse(delitosActualesJson);
        } catch (e) {
            console.warn("No se pudo pasar delitos actuales:", e);
        }

        fetch('/api/delitos')
            .then(res => res.json())
            .then(delitos => {
                const contenedor = document.getElementById('formulario-delitos-container');
                const options = delitos.map(d => {
                    const selected = delitosActuales.includes(d.nombre_delito) ? 'selected' : '';
                    return `<option value="${d.nombre_delito}" ${selected}>${d.nombre_delito}</option>`;
                }).join('');

                contenedor.innerHTML = `
                    <form id="form-editar-delitos" style="background: #f1f1f1; padding: 15px; border: 1px solid #ccc; border-radius: 6px;">
                        <input type="hidden" name="id" value="${id}">
                        <label for="delitos_penales">Delitos Penales</label>
                        <select name="delitos_penales[]" id="delitos_penales" class="form-select" multiple>
                            ${options}
                        </select>
                        <button type="submit" class="btn btn-success mt-2">Guardar</button>
                    </form>
                `;

                // Inicializar select2 (asegúrate que esté incluido en tu HTML)
                $('#delitos_penales').select2();
                contenedor.style.display = 'block';

                // Submit del formulario
                document.getElementById('form-editar-delitos').addEventListener('submit', function (e) {
                    e.preventDefault();
                    const formData = new FormData(this);
                    const id = formData.get('id');

                    fetch(`/denuncia/delitos/${id}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        },
                        body: formData
                    })
                    .then(res => {
                        if (!res.ok) throw new Error();
                        return res.text();
                    })
                    .then(() => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Delitos actualizados',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        // Recargar todo el resumen
                        return fetch(`/denuncias/resumen/${id}`);
                    })
                    .then(res => res.text())
                    .then(html => {
                        document.getElementById("resumen-section").innerHTML = html;
                    });
                    
                });
            });
    }


    //------------------------------------ACTUALIZAR VIOLENCIAS----------------------------------------------------------------
    // Mostrar y editar las violencias de un caso
    function mostrarFormularioViolencias(id, economicaJson, psicologicaJson, sexualJson, fisicaJson, feminicidaJson) {
        // Convertimos los datos JSON recibidos en arrays de JavaScript o usamos un array vacío si vienen vacíos
        const economica = JSON.parse(economicaJson || '[]');
        const psicologica = JSON.parse(psicologicaJson || '[]');
        const sexual = JSON.parse(sexualJson || '[]');
        const fisica = JSON.parse(fisicaJson || '[]');
        const feminicida = JSON.parse(feminicidaJson || '[]');

        // Pedimos al servidor la lista de violencias disponibles
        fetch('/api/violencias')
            .then(res => res.json())
            .then(data => {

                // Función para generar un campo select múltiple para cada tipo de violencia
                const generarSelect = (nombre, datos, seleccionados) => {
                    return `
                        <label for="${nombre}">${nombre.replace('_', ' ')}</label>
                        <select name="${nombre}[]" id="${nombre}" class="form-select select2 mb-2" multiple>
                            ${datos.map(v => {
                                const selected = seleccionados.includes(v.nombre) ? 'selected' : '';
                                return `<option value="${v.nombre}" ${selected}>${v.nombre}</option>`;
                            }).join('')}
                        </select>
                    `;
                };

                // Mostramos el formulario dentro del contenedor específico
                const contenedor = document.getElementById('formulario-violencias-container');
                contenedor.innerHTML = `
                    <form id="form-editar-violencias" style="background: #f8f9fa; padding: 15px; border: 1px solid #ddd;">
                        <input type="hidden" name="id" value="${id}">
                        ${generarSelect('violencia_economica', data.economica, economica)}
                        ${generarSelect('violencia_psicologica', data.psicologica, psicologica)}
                        ${generarSelect('violencia_sexual', data.sexual, sexual)}
                        ${generarSelect('violencia_fisica', data.fisica, fisica)}
                        ${generarSelect('violencia_feminicida', data.feminicida, feminicida)}

                        <button type="submit" class="btn btn-success mt-2">Guardar</button>
                    </form>
                `;

                // Activamos los selects con estilo Select2
                $('.select2').select2();

                // Mostramos el contenedor
                contenedor.style.display = 'block';

                // Al enviar el formulario, hacemos la actualización por AJAX
                document.getElementById('form-editar-violencias').addEventListener('submit', function (e) {
                    e.preventDefault();
                    const form = e.target;
                    const formData = new FormData(form);
                    const id = formData.get('id');

                    // Enviamos los datos al servidor para guardarlos
                    fetch(`/denuncia/violencias/${id}`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        },
                        body: formData
                    })
                    .then(res => {
                        if (!res.ok) throw new Error();
                        return res.text();
                    })
                    .then(() => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Violencias actualizadas',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        // Luego recargamos el resumen para que refleje los cambios
                        return fetch(`/denuncias/resumen/${id}`);
                    })
                    .then(res => res.text())
                    .then(html => {
                        document.getElementById("resumen-section").innerHTML = html;
                    })
                    .catch(() => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al actualizar violencias',
                        });
                    });
                });
            });
    }


    //--------------------------------------------------GENERAR REPORTES--------------------------------------------------------------
    // ESPACIO PARA PONER Y CREAR REPORTES 
    document.addEventListener("DOMContentLoaded", () => {
        const btnMostrarReportes = document.getElementById('btn-mostrar-reportes');
        btnMostrarReportes.addEventListener('click', () => {
            // Ocultar todo lo demás
            [
                // Seccion de Denuncia
                'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
                'domicilio-section-victima', 'domicilio-section-agresor', 'domicilio-trabajo-section',
                'resumen-section', 'contenedor-tabla-denuncias', 'detalle-victima-section',
                'formulario-busqueda-denuncias', 'resultados-busqueda-denuncias','formulario-busqueda-victimas', 
                'resultados-busqueda-victimas', 'btn-cancelar-denuncia', 'bienvenida-section', 
                'contenedor-tabla-incompletos-denuncias', "resultados-busqueda-victimas", "detalle-victima-section",

                // Seccion de Orientacion
                'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section',
                // Seccion de Intervencion
                'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section'
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            const reportes = document.getElementById('seccion-reportes');
            reportes.style.display = 'block';
            history.pushState({ vista: 'reportes' }, '', '#reportes');
        });
    });


    //-----------------------------------------EDITAR O COMPLEMENTAR DATOS DE UN AGRESOR-------------------------------------------------
    // Funcion para poder desplegar el form para editar al agresor
    function mostrarFormularioEditarAgresor(idAgresor, idDenuncia) {
        const contenedor = document.getElementById("formulario-agresor-container");
        contenedor.innerHTML = '<div class="p-2 text-center">Cargando...</div>';
        contenedor.style.display = "block";

        fetch(`/agresor/${idAgresor}/editar-resumen`)
            .then(res => res.text())
            .then(html => {
                contenedor.innerHTML = html;

                const form = document.getElementById("form-editar-agresor");
                if (form) {
                    const inputs = form.querySelectorAll("input[type='text'], textarea");
                    inputs.forEach(input => {
                        input.style.textTransform = "uppercase"; // Visual
                        input.addEventListener("input", () => {
                            input.value = input.value.toUpperCase(); // Lógica real
                        });
                    });
                } 
                form.addEventListener("submit", function (e) {
                    e.preventDefault();
                    const formData = new FormData(this);

                    fetch(`/agresor/${idAgresor}`, {
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: formData
                    })
                    .then(res => {
                        if (!res.ok) throw new Error();
                        return res.json();
                    })
                    .then(() => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Datos del agresor actualizados',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        // Volver a cargar el resumen
                        return fetch(`/denuncias/resumen/${idDenuncia}`);
                    })
                    .then(res => res.text())
                    .then(html => {
                        document.getElementById('resumen-section').innerHTML = html;
                        history.pushState({ vista: 'resumen' }, '', '#resumen');
                    })
                    .catch(() => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al actualizar los datos del agresor',
                        });
                    });
                });
            })
            .catch(() => {
                contenedor.innerHTML = '<div class="alert alert-danger">Error al cargar el formulario.</div>';
            });
     
    }


    //-----------------------------------------EDITAR O COMPLEMENTAR DATOS DE UNA VICTIMA-------------------------------------------------
    // Funcion para poder desplegar el form para editar al victima
    function mostrarFormularioEditarVictima(idVictima, idDenuncia) {
    const contenedor = document.getElementById("formulario-victima-container");
    contenedor.innerHTML = '<div class="p-2 text-center">Cargando...</div>';
    contenedor.style.display = "block";

    fetch(`/victima/${idVictima}/editar-resumen`)
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;

            const form = document.getElementById("form-editar-victima");
            if (form) {
                const inputs = form.querySelectorAll("input[type='text'], textarea");
                inputs.forEach(input => {
                    input.style.textTransform = "uppercase"; // Visual
                    input.addEventListener("input", () => {
                        input.value = input.value.toUpperCase(); // Lógica real
                    });
                });
            }            

            form.addEventListener("submit", function (e) {
                e.preventDefault();
                const formData = new FormData(this);

                fetch(`/victima/${idVictima}`, {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                })
                    .then(res => {
                        if (!res.ok) throw new Error();
                        return res.json();
                    })
                    .then(() => {
                        Swal.fire({
                            icon: 'success',
                            title: 'Datos de la víctima actualizados',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        return fetch(`/denuncias/resumen/${idDenuncia}`);
                    })
                    .then(res => res.text())
                    .then(html => {
                        document.getElementById('resumen-section').innerHTML = html;
                        history.pushState({ vista: 'resumen' }, '', '#resumen');
                    })
                    .catch(() => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error al actualizar los datos de la víctima',
                        });
                    });
            });
        })
        .catch(() => {
            contenedor.innerHTML = '<div class="alert alert-danger">Error al cargar el formulario.</div>';
        });
    }

    //-----------------------------------------AGREGAR FAMILIA DE LA VICTIMA----------------------------------------------------------
    // Funcion para agregar familiares a una victima
    function mostrarFormularioFamiliarVictima(victimaId, denunciaId) {
    const contenedor = document.getElementById("formulario-familiar-container");
    contenedor.innerHTML = '<div class="p-2 text-center">Cargando...</div>';
    contenedor.style.display = "block";

    fetch(`/familia-victima/create?victima_id=${victimaId}`)
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;

            const form = document.querySelector("#form-familia-victima");

            form.addEventListener("submit", function (e) {
                e.preventDefault();
                const formData = new FormData(this);

                fetch("/familia-victima", {
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData
                })
                .then(() => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Familiar guardado correctamente',
                        showConfirmButton: false,
                        timer: 1500
                    });

                    return fetch(`/denuncias/resumen/${denunciaId}`);
                })
                .then(res => res.text())
                .then(html => {
                    document.getElementById("resumen-section").innerHTML = html;
                    history.pushState({ vista: 'resumen' }, '', '#resumen');
                })
                .catch(() => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al guardar el familiar',
                    });
                });

            });
        })
        .catch(() => {
            contenedor.innerHTML = '<div class="alert alert-danger">Error al cargar el formulario.</div>';
        });
    }


    //-------------------------------------------------INCOMPLETOS-----------------------------------------------------------
    // Boton para mostrar casos incompletos
    document.addEventListener("DOMContentLoaded", () => {
        const btnIncompletos = document.getElementById('btn-mostrar-incompletos');
        btnIncompletos.addEventListener('click', () => {
            // Ocultar todos los formularios y otras secciones
            [
                // Seccion de Denuncia
                'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
                'domicilio-section-victima', 'domicilio-section-agresor', 'domicilio-trabajo-section',
                'resumen-section', 'btn-cancelar-denuncia', 'formulario-busqueda-denuncias',
                'resultados-busqueda-denuncias', 'formulario-busqueda-victimas', 'resultados-busqueda-victimas', 
                'seccion-reportes', 'bienvenida-section', 'contenedor-tabla-denuncias', 'contenedor-tabla-archivados-denuncias',
                "resultados-busqueda-victimas", "detalle-victima-section",

                // Seccion de Orientacion
                'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section',

                // Seccion de Intervencion
                'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section'
            ]
            .forEach(id => {
                const el = document.getElementById(id);
                if (el) el.style.display = 'none';
            });

            const contenedor = document.getElementById('contenedor-tabla-incompletos-denuncias');
            contenedor.style.display = 'block';

            history.pushState({ vista: 'incompletos' }, '', '#incompletos');

            fetch("{{ route('denuncia.incompletos') }}")
                .then(res => res.text())
                .then(html => {
                    contenedor.innerHTML = html;
                });
        });
    });

    //Marcar si el caso ya esta completo
    function marcarDenunciaCompleta(id) {
        Swal.fire({
            title: '¿Está seguro?',
            text: "¡Esta denuncia será marcada como COMPLETA!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, marcar como completa'
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(`/denuncia/provisional/${id}`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                })
                .then(res => {
                    if (!res.ok) throw new Error();
                    return res.text();
                })
                .then(() => {
                    Swal.fire({
                        icon: 'success',
                        title: '¡Denuncia marcada como completa!',
                        showConfirmButton: false,
                        timer: 1500
                    });

                    // 👉 Recargar SOLO el resumen
                    return fetch(`/denuncias/resumen/${id}`);
                })
                .then(res => res.text())
                .then(html => {
                    document.getElementById('resumen-section').innerHTML = html;
                    document.getElementById('resumen-section').style.display = 'block';
                    history.pushState({ vista: 'resumen' }, '', '#resumen');
                })
                .catch(() => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al marcar la denuncia',
                    });
                });
            }
        });
    }

    // Mostrar formulario para comletar
    function mostrarFormularioCompletar(id) {
        fetch(`/api/denuncia/resumen/${id}`)
            .then(res => res.json())
            .then(data => {
                const resumenHtml = `
                    <p><strong>Víctima:</strong> ${data.victima}</p>
                    <p><strong>Agresor:</strong> ${data.agresor}</p>
                    <p><strong>Número de Caso:</strong> ${data.num_caso}</p>
                    <p><strong>Codigo:</strong> ${data.cod_slim}</p>
                    <p><strong>Estado Actual:</strong> ${data.estado}</p>
                    <p><strong>Testimonio:</strong> ${data.testimonio}</p>
                    <p><strong>Violencia Fisica:</strong> ${data.violencia_fisica}</p>
                    <p><strong>Violencia Sexual:</strong> ${data.violencia_sexual}</p>
                    <p><strong>Violencia Economica:</strong> ${data.violencia_economica}</p>
                    <p><strong>Violencia Psicologica:</strong> ${data.violencia_psicologica}</p>
                    <p><strong>Violencia Feminicida:</strong> ${data.violencia_feminicida}</p>
                `;
                Swal.fire({
                    title: '¿Confirmar que la denuncia está COMPLETA?',
                    html: resumenHtml,
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: '✅ Sí, Completar',
                    cancelButtonText: '❌ Cancelar',
                    focusConfirm: false,
                    preConfirm: () => {
                        return fetch(`/denuncia/provisional/${id}`, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            }
                        })
                        .then(res => {
                            if (!res.ok) throw new Error();
                            return res.text();
                        });
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            icon: 'success',
                            title: '✅ Denuncia marcada como completa',
                            showConfirmButton: false,
                            timer: 1500
                        });

                        // Recargar solo el resumen
                        fetch(`/denuncias/resumen/${id}`)
                            .then(res => res.text())
                            .then(html => {
                                document.getElementById("resumen-section").innerHTML = html;
                                document.getElementById("resumen-section").style.display = "block";
                                history.pushState({ vista: 'resumen' }, '', '#resumen');
                            });
                    }
                });
            })
            .catch(() => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error al cargar datos de la denuncia',
                });
            });
    }

    /*Navegación entre vistas con historial. Detecta cuando el usuario usa el botón "atrás" del navegador (popstate) y muestra u 
    oculta las secciones correspondientes según el estado almacenado en la URL. */
    window.addEventListener('popstate', (event) => {
        const vista = event.state?.vista || '';

        // Ocultar todo
        [
            // Seccion de Denuncia
            'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
            'domicilio-section-victima', 'domicilio-section-agresor', 'domicilio-trabajo-section',
            'resumen-section', 'btn-cancelar-denuncia', 'formulario-busqueda-denuncias',
            'resultados-busqueda-denuncias', 'formulario-busqueda-victimas', 'resultados-busqueda-victimas', 
            'seccion-reportes', 'bienvenida-section', 'contenedor-tabla-denuncias', 'contenedor-tabla-archivados-denuncias',
            "resultados-busqueda-victimas", "detalle-victima-section",

            // Seccion de Orientacion
            'formularios-orientacion-container', 'formulario-orientacion', 'detalle-orientacion-section',

            // Seccion de Intervencion
            'formularios-intervencion-container', 'formulario-intervencion', 'detalle-intervencion-section'
        ]
        .forEach(id => {
            const el = document.getElementById(id);
            if (el) el.style.display = 'none';
        });

        switch (vista) {
            case 'formulario':
                document.getElementById('formularios-container').style.display = 'block';
                document.getElementById('victima-section').style.display = 'block';
                break;
            case 'buscar':
            case 'buscar_denuncia':
                document.getElementById('formulario-busqueda-denuncias').style.display = 'block';
                document.getElementById('resultados-busqueda-denuncias').style.display = 'block';
                break;
            case 'buscar_victima':
                document.getElementById('formulario-busqueda-victimas').style.display = 'block';
                document.getElementById('resultados-busqueda-victimas').style.display = 'block';
                break;
            case 'mis-casos':
            case 'tabla':
                document.getElementById('contenedor-tabla-denuncias').style.display = 'block';
                break;
            case 'resumen':
                document.getElementById('resumen-section').style.display = 'block';
                break;
            case 'detalle_victima':
                document.getElementById('detalle-victima-section').style.display = 'block';
                break;
            case 'emblematicos':
                document.getElementById('contenedor-tabla-denuncias').style.display = 'block';
                break;
            case 'tabla_orientaciones':
                document.getElementById('formularios-orientacion-container').style.display = 'block';
                break;    
            case 'tabla_intervenciones':
                document.getElementById('formularios-intervencion-container').style.display = 'block';
                break;
        
            case 'reportes':
                document.getElementById('seccion-reportes').style.display = 'block';
                break;

            default:
                break;
        }
    });

</script>

<!-- jQuery (necesario para Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<!--------------------TIEMPO DE EXPERACION DE SESION-------------------->
<form id="logout-form" action="{{ route('login') }}" method="POST" style="display: none;">
    @csrf
</form>

<script>
    // Tiempo máximo de inactividad permitido (en milisegundos)
    const INACTIVITY_LIMIT = 3000000; // // 5 minutos (cambia según necesidad)
    
    // const INACTIVITY_LIMIT = 60000;    // 1 minuto
    // const INACTIVITY_LIMIT = 300000;   // 5 minutos
    // const INACTIVITY_LIMIT = 600000;   // 10 minutos
    // const INACTIVITY_LIMIT = 1800000;  // 30 minutos
    // const INACTIVITY_LIMIT = 3600000;  // 60 minutos

    let inactivityTimeout;

    // Cierra sesión automáticamente
    function logoutPorInactividad() {
        console.log('Cerrando sesión por inactividad');
        document.getElementById('logout-form').submit(); // Hace POST real
    }

    // Reinicia el temporizador al detectar actividad
    function resetInactivityTimer() {
        clearTimeout(inactivityTimeout);
        inactivityTimeout = setTimeout(logoutPorInactividad, INACTIVITY_LIMIT);
    }

    // Eventos que reinician el contador (actividad del usuario)
    ['mousemove', 'keydown', 'click', 'scroll', 'touchstart'].forEach(event => {
        document.addEventListener(event, resetInactivityTimer, false);
    });

    // Inicia el contador al cargar la página
    resetInactivityTimer();
</script>

<!-------------------- BLOQUEO BOTÓN "ATRÁS" DEL NAVEGADOR -------------------->
<script>
    // Evita navegación hacia atrás desde el login
    if (window.history && window.history.pushState) {
        window.history.pushState('', null, './');
        window.addEventListener('popstate', function() {
            window.history.pushState('', null, './');
        });
    }
</script>

</body>
</html>