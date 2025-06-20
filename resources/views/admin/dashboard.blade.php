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
            padding-bottom: 20px; /* para evitar que lo último quede cortado */
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
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3" style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											
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
                            </a>-->
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
                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-oficinas">
                            <i class="fas fa-building"></i> Oficinas
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-roles">
                            <i class="fas fa-user-shield"></i> Roles
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-users">
                            <i class="fas fa-users"></i> Usuarios
                        </a>
                    </li>

                    <!--<li>
                        <a href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i> Nuevo Usuario
                        </a>
                    </li>-->

                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-denuncia">
                            <i class="fas fa-folder-open"></i> Denuncias
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-derivar">
                            <i class="fas fa-random"></i> Derivar Denuncias
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-asignar">
                            <i class="fas fa-share-alt"></i> Asignar Denuncias
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-violencias">
                            <i class="fas fa-bolt"></i> Violencias
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-tipo-violencias">
                            <i class="fas fa-layer-group"></i> Tipos de Violencia
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" id="btn-mostrar-delitos">
                            <i class="fas fa-gavel"></i> Delitos
                        </a>
                    </li>
                </ul>

				<div class="copyright">
					<p><strong>Administrador</strong></p>
				</div>
			</div>
        </div> 
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!-- Contenido -->
        <div class="content-body">
            <div class="container-fluid">

                <!-- Contenedores oficinas -->
                <div id="contenedor-tabla-oficinas" style="display: none;"></div><!-- Aquí se va a cargar el listado de oficinas -->
                <div id="contenedor-formulario-oficina" style="display: none;"></div><!-- Aquí se va a cargar el formulario de crear/editar -->
                <div id="contenedor-show-oficina" style="display: none;"></div><!-- Aquí se va a cargar el detalle de la oficina -->
                    

                <!-- Contenedores roles -->
                <div id="contenedor-tabla-roles" style="display: none;"></div><!-- Aquí se va a cargar el listado de roles -->
                <div id="contenedor-formulario-rol" style="display: none;"></div><!-- Aquí se va a cargar el formulario de crear/editar -->
                <div id="contenedor-show-rol" style="display: none;"></div><!-- Aquí se va a cargar el detalle del rol -->
                    
                
                <!-- Contenedores Users -->
                <div id="contenedor-tabla-users" style="display: none;"></div><!-- Aquí se carga el listado de usuarios -->
                <div id="contenedor-formulario-user" style="display: none;"></div><!-- Aquí se carga el formulario de crear/editar usuario -->
                <div id="contenedor-show-user" style="display: none;"></div><!-- Aquí se carga el detalle del usuario -->
                    
                
                <!-- Contenedores Derivar -->
                <div id="contenedor-tabla-derivar" style="display: none;"></div><!-- Aquí se carga el listado de denuncias para derivar -->
                   
                
                <!-- Contenedores Asignar -->
                <div id="contenedor-tabla-asignar" style="display: none;"></div><!-- Aquí se carga el listado de denuncias para asignar -->


                <!-- Violencia -->
                <div id="contenedor-tabla-violencias" style="display: none;"></div><!-- Aquí se carga el listado de violencias -->
                <div id="contenedor-formulario-violencia" style="display: none;"></div><!-- Aquí se carga el formulario de crear/editar violencia -->
                <div id="contenedor-show-violencia" style="display: none;"></div><!-- Aquí se carga el detalle de una violencia -->


                <!-- Tipos de Violencia -->
                <div id="contenedor-tabla-tipo-violencias" style="display: none;"></div><!-- Aquí se carga el listado de tipos de violencia -->
                <div id="contenedor-formulario-tipo-violencia" style="display: none;"></div><!-- Aquí se carga el formulario de crear/editar tipo de violencia -->
                <div id="contenedor-show-tipo-violencia" style="display: none;"></div><!-- Aquí se carga el detalle del tipo de violencia -->


                <!-- Contenedores delitos -->
                <div id="contenedor-tabla-delitos" style="display: none;"></div><!-- Aquí se carga el listado de delitos -->
                <div id="contenedor-formulario-delito" style="display: none;"></div><!-- Aquí se carga el formulario de crear/editar delito -->
                <div id="contenedor-show-delito" style="display: none;"></div><!-- Aquí se carga el detalle del delito -->


                <!--Contenedor de Denuncias-->
                <div id="contenedor-tabla-denuncias" style="display: none;"></div>
                <div id="contenedor-detalle-denuncia" style="display: none;"></div>


            </div>
        </div>

        <!-- Footer -->
        
        <div class="footer">
            <div class="copyright text-center">
            </div>
        </div>

    </div> <!-- /main-wrapper -->



    <!-- Modal Asignar Denuncia -->
    <div class="modal fade" id="modalAsignar" tabindex="-1" aria-labelledby="modalAsignarLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
            <form id="form-asignar-denuncia">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Asignar Denuncia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="denuncia_id" id="asignarDenunciaId">
                    <input type="hidden" name="oficina_id" id="asignarOficinaId">
                    <div class="form-group mb-2">
                        <label for="tecnicos">Seleccionar técnicos</label>
                        <select name="user_id[]" id="tecnicos" class="form-select" multiple required></select>
                        <small class="text-muted">Puede seleccionar más de uno</small>
                    </div>
                    <div class="form-group mb-2">
                        <label for="fecha">Fecha de asignación</label>
                        <input type="date" name="fecha" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Asignar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/deznav-init.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- jQuery (necesario para Select2) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



<script>
document.getElementById('btn-mostrar-denuncia').addEventListener('click', function () {
    const contenedor = document.getElementById('contenedor-tabla-denuncias');

    // Ocultar otros contenedores si los hay
    document.querySelectorAll('[id^="contenedor-"]').forEach(div => div.style.display = 'none');

    // Mostrar el contenedor y cargar contenido
    contenedor.innerHTML = '<div class="p-3">Cargando denuncias...</div>';
    contenedor.style.display = 'block';

    fetch('/admin/tabla-denuncias')
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
            history.pushState({ vista: 'tabla-denuncias' }, '', '#tabla-denuncias');
        })
        .catch(() => {
            contenedor.innerHTML = '<div class="alert alert-danger">Error al cargar la tabla.</div>';
        });
});


document.addEventListener('DOMContentLoaded', function () {

    // Mostrar resumen de denuncia
    document.addEventListener('click', function (e) {
        if (e.target.closest('.btn-ver-detalles')) {
            const id = e.target.closest('.btn-ver-detalles').dataset.id;
            const contenedor = document.getElementById('contenedor-detalle-denuncia');
            contenedor.innerHTML = '<div class="p-2 text-center">Cargando detalles...</div>';
            contenedor.style.display = 'block';

            fetch(`/denuncias/resumen/${id}`)
                .then(res => res.text())
                .then(html => {
                    contenedor.innerHTML = html;
                    history.pushState({ vista: 'detalle-denuncia' }, '', `#detalle-${id}`);
                })
                .catch(() => {
                    contenedor.innerHTML = '<div class="alert alert-danger">Error al cargar los detalles.</div>';
                });
        }
    });

    // Eliminar denuncia
    document.addEventListener('click', function (e) {
        if (e.target.closest('.btn-eliminar-denuncia')) {
            const id = e.target.closest('.btn-eliminar-denuncia').dataset.id;

            Swal.fire({
                title: '¿Eliminar esta denuncia?',
                text: 'Esta acción no se puede deshacer.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then(result => {
                if (result.isConfirmed) {
                    fetch(`/denuncias/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        }
                    })
                    .then(res => {
                        if (!res.ok) throw new Error();
                        return res.json();
                    })
                    .then(() => {
                        Swal.fire('Eliminado', 'La denuncia fue eliminada.', 'success');
                        // Opcional: recargar tabla
                        return fetch('/admin/tabla-denuncias');
                    })
                    .then(res => res.text())
                    .then(html => {
                        document.querySelector('.tabla-denuncias-admin').innerHTML = html;
                    })
                    .catch(() => {
                        Swal.fire('Error', 'No se pudo eliminar la denuncia.', 'error');
                    });
                }
            });
        }
    });

});






//--------------------SCRIPTS PARA MANEJAR ASIGNACIONES------------------
document.addEventListener("DOMContentLoaded", () => {

    // Cuando se hace clic en el botón "Asignar Denuncias"
    document.getElementById('btn-mostrar-asignar')?.addEventListener('click', () => {
        ocultarTodo(); // Oculta todas las secciones visibles
        const contenedor = document.getElementById('contenedor-tabla-asignar');
        contenedor.style.display = 'block'; // Muestra la sección de asignaciones

        // Se solicita la vista HTML de la tabla de asignaciones desde el servidor
        fetch("/admin/asignar")
            .then(res => {
                // Si la sesión expiró, redirige al login
                if (res.redirected) {
                    window.location.href = res.url;
                    return;
                }
                return res.text(); // Convierte la respuesta en HTML
            })
            .then(html => {
                if (html) contenedor.innerHTML = html; // Inserta el HTML en el contenedor
            })
            .catch(() => Swal.fire('Error', 'Error al cargar asignaciones.', 'error'));
    });

    // Maneja el envío del formulario de asignación (POST)
    document.addEventListener('submit', function (e) {
        if (e.target.id === 'form-asignar-denuncia') {
            e.preventDefault(); // Evita el comportamiento por defecto del formulario

            const form = e.target;
            const formData = new FormData(form);
            const id = formData.get('denuncia_id'); // Obtiene el ID de la denuncia

            // Envía la solicitud para asignar técnicos a la denuncia
            fetch(`/denuncias/asignar/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    Swal.fire('¡Éxito!', 'Denuncia asignada correctamente.', 'success');
                    // Cierra el modal de asignación
                    bootstrap.Modal.getInstance(document.getElementById('modalAsignar')).hide();
                    // Vuelve a cargar la tabla de asignaciones
                    document.getElementById('btn-mostrar-asignar').click();
                } else {
                    Swal.fire('Error', data.message || 'No se pudo asignar.', 'error');
                }
            })
            .catch(() => Swal.fire('Error', 'Error de servidor.', 'error'));
        }
    });
});

// Función para abrir el modal de asignación y cargar los técnicos disponibles
function abrirModalAsignar(id, numCaso, oficinaId) {
    // Carga los valores necesarios en los campos ocultos del formulario
    document.getElementById('asignarDenunciaId').value = id;
    document.getElementById('asignarOficinaId').value = oficinaId;

    const select = document.getElementById('tecnicos');
    select.innerHTML = '<option disabled>Cargando...</option>'; // Mensaje temporal

    // Consulta a la API los técnicos disponibles en la oficina seleccionada
    fetch(`/api/tecnicos-oficina/${oficinaId}`)
        .then(res => res.json())
        .then(data => {
            select.innerHTML = ''; // Limpia el select
            data.forEach(user => {
                // Agrega cada técnico como opción en el select
                const opt = document.createElement('option');
                opt.value = user.id;
                opt.textContent = `${user.nombre} (${user.rol})`;
                select.appendChild(opt);
            });
        });

     // Muestra el modal con el formulario de asignación
    new bootstrap.Modal(document.getElementById('modalAsignar')).show();
}





//-----------------------SCRIPTS PARA MANEJAR OFICINAS---------------------------------------------
// MOstrar Oficinas
document.addEventListener("DOMContentLoaded", () => {
    // Al hacer clic en el botón "Oficinas"
    const btnOficinas = document.getElementById('btn-mostrar-oficinas');
    btnOficinas.addEventListener('click', () => {
        ocultarTodo(); // // Oculta las demás secciones del sistema

        // Mostrar el contenedor de oficinas
        const contenedor = document.getElementById('contenedor-tabla-oficinas');
        contenedor.style.display = 'block'; // Muestra la tabla de oficinas

        // Solicita al servidor el listado HTML de oficinas
        fetch("{{ route('oficinas.index') }}")
            .then(res => res.text())
            .then(html => {
                contenedor.innerHTML = html; // Inserta el HTML en el contenedor
            });
    });
});

// Muestra el formulario para crear una nueva oficina
function cargarFormularioCrearOficina() {
    const contenedor = document.getElementById('contenedor-formulario-oficina');
    contenedor.style.display = 'block'; // Muestra formulario
    document.getElementById('contenedor-tabla-oficinas').style.display = 'none'; // Oculta la tabla

    fetch("{{ route('oficinas.create') }}")
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html; // Inserta el HTML del formulario
        });
}

// Muestra el formulario de edición de una oficina específica
function cargarFormularioEditarOficina(id) {
    const contenedor = document.getElementById('contenedor-formulario-oficina');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-oficinas').style.display = 'none';

    fetch(`/oficinas/${id}/edit`)
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Muestra el detalle (modo lectura) de una oficina
function mostrarDetalleOficina(id) {
    const contenedor = document.getElementById('contenedor-show-oficina');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-oficinas').style.display = 'none';

    fetch(`/oficinas/${id}`)
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Cuando se envía el formulario de crear oficina
document.addEventListener('submit', function (e) {
    const formCrear = e.target.closest("#form-crear-oficina");
    if (!formCrear) return;

    e.preventDefault(); // Evita que se recargue la página

    const formData = new FormData(formCrear);

    // Enviar la solicitud al servidor (POST)
    fetch("{{ route('oficinas.store') }}", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) throw new Error();
        return response.text();
    })
    .then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Oficina creada correctamente',
            timer: 1500,
            showConfirmButton: false
        });

        // Vuelve a cargar la tabla de oficinas
        cargarListadoOficinas();
    })
    .catch(() => {
        Swal.fire({
            icon: 'error',
            title: 'Error al crear la oficina'
        });
    });
});

// Cuando se envía el formulario de editar oficina
document.addEventListener('submit', function (e) {
    const formEditar = e.target.closest("#form-editar-oficina");
    if (!formEditar) return;

    e.preventDefault();

    const idOficina = formEditar.querySelector('input[name="id"]')?.value || formEditar.action.split('/').pop();
    const formData = new FormData(formEditar);

    fetch(`/oficinas/${idOficina}`, {
        method: "POST", // Laravel espera POST + _method=PUT
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) throw new Error();
        return response.text();
    })
    .then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Oficina actualizada correctamente',
            timer: 1500,
            showConfirmButton: false
        });

        cargarListadoOficinas(); // recarga listado
    })
    .catch(() => {
        Swal.fire({
            icon: 'error',
            title: 'Error al actualizar la oficina'
        });
    });
});

// Función para eliminar una oficina
function eliminarOficina(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "Esta acción no se puede deshacer",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6'
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById(`form-eliminar-oficina-${id}`);
            const formData = new FormData();
            formData.append('_method', 'DELETE'); // Laravel espera DELETE
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

            fetch(`/oficinas/${id}`, {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: data.message,
                        timer: 1500,
                        showConfirmButton: false
                    });
                    cargarListadoOficinas(); // recarga tabla
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: data.message || 'Error al eliminar'
                    });
                }
            })
            .catch(() => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error al eliminar'
                });
            });
        }
    });
}

// Carga nuevamente el listado de oficinas (útil después de crear/editar/eliminar)
function cargarListadoOficinas() {
    document.getElementById('contenedor-formulario-oficina').style.display = 'none';
    document.getElementById('contenedor-show-oficina').style.display = 'none';
    const contenedor = document.getElementById('contenedor-tabla-oficinas');
    contenedor.style.display = 'block';

    fetch("{{ route('oficinas.index') }}")
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Cuando se hace clic en "Cancelar" o "Volver" dentro de formularios/detalles
document.addEventListener('click', function(e) {
    if (e.target.matches('#btn-cancelar-oficina') || e.target.matches('#btn-volver-oficina')) {
        // Oculta formularios y muestra de nuevo la tabla
        document.getElementById('contenedor-formulario-oficina').style.display = 'none';
        document.getElementById('contenedor-show-oficina').style.display = 'none';
        document.getElementById('contenedor-tabla-oficinas').style.display = 'block';
    }
});


//-----------------------SCRIPTS PARA MANEJAR ROLES---------------------------------------------

// Esperar a que cargue todo el DOM
document.addEventListener("DOMContentLoaded", () => {
    // Al hacer clic en el botón "Roles"
    const btnRoles = document.getElementById('btn-mostrar-roles');
    btnRoles.addEventListener('click', () => {
        ocultarTodo(); // Oculta las demás secciones del sistema

        const contenedor = document.getElementById('contenedor-tabla-roles');
        contenedor.style.display = 'block'; // Muestra el listado de roles

        // Solicita al servidor el listado HTML de roles
        fetch("{{ route('roles.index') }}")
            .then(res => res.text())
            .then(html => {
                contenedor.innerHTML = html; // Inserta el HTML en el contenedor
            });
    });
});

// Crear rol
function cargarFormularioCrearRol() {
    const contenedor = document.getElementById('contenedor-formulario-rol');
    contenedor.style.display = 'block'; // Muestra el formulario
    document.getElementById('contenedor-tabla-roles').style.display = 'none'; // Oculta la tabla

    fetch("{{ route('roles.create') }}")
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html; // Carga el HTML del formulario
        });
}

// Editar rol
function cargarFormularioEditarRol(id) {
    const contenedor = document.getElementById('contenedor-formulario-rol');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-roles').style.display = 'none';

    fetch(`/roles/${id}/edit`)
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Mostrar detalle de rol
function mostrarDetalleRol(id) {
    const contenedor = document.getElementById('contenedor-show-rol');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-roles').style.display = 'none';

    fetch(`/roles/${id}`)
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Enviar formulario para crear rol
document.addEventListener('submit', function (e) {
    const formCrear = e.target.closest("#form-crear-rol");
    if (!formCrear) return;

    e.preventDefault(); // Evita que recargue la página

    const formData = new FormData(formCrear);

    fetch("/roles", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) throw new Error();
        return response.text();
    })
    .then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Rol creado correctamente',
            timer: 1500,
            showConfirmButton: false
        });
        cargarListadoRoles(); // Recarga la tabla
    })
    .catch(() => {
        Swal.fire({
            icon: 'error',
            title: 'Error al crear el rol'
        });
    });
});

// Enviar formulario para editar rol
document.addEventListener('submit', function (e) {
    const formEditar = e.target.closest("#form-editar-rol");
    if (!formEditar) return;

    e.preventDefault();

    // Obtener ID del rol desde el input o desde la URL
    const idRol = formEditar.querySelector('input[name="id"]')?.value || formEditar.action.split('/').pop();
    const formData = new FormData(formEditar);

    formData.append('_method', 'PATCH'); // Laravel necesita saber que es PATCH

    fetch(`/roles/${idRol}`, {
        method: "POST", 
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) throw new Error();
        return response.text();
    })
    .then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Rol actualizado correctamente',
            timer: 1500,
            showConfirmButton: false
        });
        cargarListadoRoles(); // Recarga la tabla
    })
    .catch(() => {
        Swal.fire({
            icon: 'error',
            title: 'Error al actualizar el rol'
        });
    });
});

// Eliminar rol
function eliminarRol(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "Esta acción no se puede deshacer",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6'
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById(`form-eliminar-rol-${id}`);
            const formData = new FormData();
            formData.append('_method', 'DELETE'); // Método DELETE
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

            fetch(`/roles/${id}`, {
                method: "POST",
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: data.message,
                        timer: 1500,
                        showConfirmButton: false
                    });
                    cargarListadoRoles();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: data.message || 'No se pudo eliminar el rol'
                    });
                }
            })
            .catch(() => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error al eliminar'
                });
            });
        }
    });
}

// Recargar tabla de roles
function cargarListadoRoles() {
    document.getElementById('contenedor-formulario-rol').style.display = 'none';
    document.getElementById('contenedor-show-rol').style.display = 'none';
    const contenedor = document.getElementById('contenedor-tabla-roles');
    contenedor.style.display = 'block';

    fetch("{{ route('roles.index') }}")
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Botones "Cancelar" o "Volver" dentro del módulo de roles
document.addEventListener('click', function(e) {
    if (e.target.matches('#btn-cancelar-rol') || e.target.matches('#btn-volver-rol')) {
        document.getElementById('contenedor-formulario-rol').style.display = 'none';
        document.getElementById('contenedor-show-rol').style.display = 'none';
        document.getElementById('contenedor-tabla-roles').style.display = 'block';
    }
});




//-----------------------SCRIPTS PARA MANEJAR USERS -------------------------------
// Mostrar Uasuarios
document.addEventListener("DOMContentLoaded", () => {
    const btnUsers = document.getElementById('btn-mostrar-users');
    btnUsers.addEventListener('click', () => {
        
        ocultarTodo(); // Oculta las demás secciones del sistema

        const contenedor = document.getElementById('contenedor-tabla-users');
        contenedor.style.display = 'block'; // Muestra la tabla de usuarios

        // Solicita al servidor el HTML del listado
        fetch("{{ route('users.index') }}")
            .then(res => res.text())
            .then(html => {
                contenedor.innerHTML = html;
            });
    });
});

function cargarFormularioCrearUser() {
    const contenedor = document.getElementById('contenedor-formulario-user');
    contenedor.style.display = 'block'; // Mostrar el formulario de registro
    document.getElementById('contenedor-tabla-users').style.display = 'none'; // Ocultar tabla

    fetch("{{ route('register') }}")  // Usa la ruta de registro que proporsiona Laravel
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Enviar formulario de registro
document.addEventListener('submit', function (e) {
    const formRegister = e.target.closest("#form-register-user"); 
    if (!formRegister) return; // Solo si es el form de registro

    e.preventDefault(); // Evitar envío tradicional

    const formData = new FormData(formRegister);

    fetch("{{ route('register') }}", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) throw new Error();
        return response.text();
    })
    .then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Usuario creado correctamente',
            timer: 1500,
            showConfirmButton: false
        });

        cargarListadoUsers(); // Recargamos la tabla de usuarios
    })
    .catch(() => {
        Swal.fire({
            icon: 'error',
            title: 'Error al registrar el usuario'
        });
    });
});

// Cargar formulario para editar usuario
function cargarFormularioEditarUser(id) {
    const contenedor = document.getElementById('contenedor-formulario-user');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-users').style.display = 'none';

    fetch(`/users/${id}/edit`)
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Enviar formulario de edición de usuario
document.addEventListener('submit', function (e) {
    const formEditar = e.target.closest("#form-editar-user");
    if (!formEditar) return;

    e.preventDefault();

    const idUser = formEditar.querySelector('input[name="id"]')?.value || formEditar.action.split('/').pop();
    const formData = new FormData(formEditar);

    formData.append('_method', 'PATCH');

    fetch(`/users/${idUser}`, {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) throw new Error();
        return response.text();
    })
    .then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Usuario actualizado correctamente',
            timer: 1500,
            showConfirmButton: false
        });

        cargarListadoUsers(); // Volver a cargar la tabla de usuarios
    })
    .catch(() => {
        Swal.fire({
            icon: 'error',
            title: 'Error al actualizar el usuario'
        });
    });
});

// Ver detalle del usuario
function mostrarDetalleUser(id) {
    const contenedor = document.getElementById('contenedor-show-user');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-users').style.display = 'none';

    fetch(`/users/${id}`)
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Eliminar User
document.addEventListener('submit', function (e) {
    const formEliminar = e.target.closest("#form-eliminar-user");
    if (!formEliminar) return;

    e.preventDefault();

    Swal.fire({
        title: '¿Estás seguro?',
        text: "No podrás revertir esto",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            const formData = new FormData();
            formData.append('_method', 'DELETE');
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

            fetch(formEliminar.action, {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        icon: 'success',
                        title: data.message,
                        timer: 1500,
                        showConfirmButton: false
                    });

                    cargarListadoUsers();

                } else {
                    Swal.fire({
                        icon: 'error',
                        title: data.message
                    });
                }
            })
            .catch(() => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error al eliminar'
                });
            });
        }
    });
});

// Recargar tabla de usuarios
function cargarListadoUsers() {
    document.getElementById('contenedor-formulario-user').style.display = 'none';
    document.getElementById('contenedor-show-user').style.display = 'none';
    const contenedor = document.getElementById('contenedor-tabla-users');
    contenedor.style.display = 'block';

    fetch("{{ route('users.index') }}")
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Botones "Cancelar" o "Volver" en User
document.addEventListener('click', function(e) {
    if (e.target.matches('#btn-cancelar-user') || e.target.matches('#btn-volver-user')) {
        document.getElementById('contenedor-formulario-user').style.display = 'none';
        document.getElementById('contenedor-show-user').style.display = 'none';
        document.getElementById('contenedor-tabla-users').style.display = 'block';
    }
});


//-----------------------SCRIPST PARA MANEJAR DERIVACIONES--------------------------------------------
// Mostrar Tabla de denuncias para derivar
document.addEventListener("DOMContentLoaded", () => {
    const btnDerivar = document.getElementById('btn-mostrar-derivar');
    if (btnDerivar) {
        btnDerivar.addEventListener('click', () => {
           
            ocultarTodo(); // Oculta todo el contenido actual

            // Si no existe el contenedor, lo creamos dinámicamente
            let contenedor = document.getElementById('contenedor-tabla-derivar');
            if (!contenedor) {
                contenedor = document.createElement('div');
                contenedor.id = 'contenedor-tabla-derivar';
                document.querySelector('.container-fluid').appendChild(contenedor);
            }

            contenedor.style.display = 'block'; // Mostramos el contenedor

            // // Cargamos el listado de denuncias que se pueden derivar
            fetch("{{ route('denuncia.tabla-derivar') }}")
                .then(res => res.text())
                .then(html => {
                    contenedor.innerHTML = html;
                });
        });
    }
});

// Abrir modal de derivación
function abrirModalDerivar(id, num_caso) {
    // // Seteamos los valores ocultos para usar al guardar
    document.getElementById('idDenunciaDerivar').value = id;
    document.getElementById('numCasoOriginal').value = num_caso;

    // // Limpiamos los selects
    const oficinaSelect = document.getElementById('oficina');
    oficinaSelect.innerHTML = '<option value="">Seleccione oficina</option>';
    const userSelect = document.getElementById('user');
    userSelect.innerHTML = '<option value="">Seleccione abogado</option>';

    // Cargar oficinas disponibles
    fetch('/api/oficinas')
        .then(res => res.json())
        .then(data => {
            data.forEach(oficina => {
                const option = document.createElement('option');
                option.value = oficina.id;
                option.textContent = oficina.nombre;
                oficinaSelect.appendChild(option);
            });
        });

    // Cuando cambia la oficina, cargar abogados disponibles
    oficinaSelect.addEventListener('change', function() {
        const oficinaId = this.value;
        if (oficinaId) {
            fetch(`/api/abogados-por-oficina/${oficinaId}`)
                .then(res => res.json())
                .then(data => {
                    userSelect.innerHTML = '<option value="">Seleccione abogado</option>';
                    data.forEach(user => {
                        const option = document.createElement('option');
                        option.value = user.id;
                        option.textContent = user.nombre;
                        userSelect.appendChild(option);
                    });
                });
        }
    });

    // Mostrar modal
    const modal = new bootstrap.Modal(document.getElementById('modalDerivar'));
    modal.show();
}

// Enviar formulario de derivación
document.addEventListener('submit', function(e) {
    const form = e.target.closest('#form-derivar-denuncia');
    if (!form) return;

    e.preventDefault();

    const idDenuncia = document.getElementById('idDenunciaDerivar').value;
    const numCasoOriginal = document.getElementById('numCasoOriginal').value;
    const oficinaId = document.getElementById('oficina').value;
    const userId = document.getElementById('user').value;

    fetch(`/denuncias/derivar/${idDenuncia}`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: JSON.stringify({
            oficina_id: oficinaId,
            abogado_id: userId,
            num_caso: numCasoOriginal
        })
    })
    .then(res => {
        if (!res.ok) throw new Error('Error en la respuesta del servidor.');
        return res.json();
    })
    .then(data => {
        if (data.success) {
            Swal.fire('¡Éxito!', 'Denuncia derivada correctamente.', 'success')
                .then(() => {
                    const contenedor = document.getElementById('contenedor-tabla-derivar');
                    if (contenedor) {
                        fetch('/denuncias/derivar')
                            .then(res => res.text())
                            .then(html => {
                                contenedor.innerHTML = html;
                            });
                    } else {
                        location.reload();
                    }

                    const modal = bootstrap.Modal.getInstance(document.getElementById('modalDerivar'));
                    modal.hide();
                });
        } else {
            Swal.fire('Error', data.message || 'Hubo un problema al derivar.', 'error');
        }
    })
    .catch(error => {
        console.error(error);
        Swal.fire('Error', 'No se pudo conectar con el servidor.', 'error');
    });
});



//-----------------------SCRIPTS PARA MANEJAR VIOLENCIAS---------------------------------------------
// Mostrar Violencias
document.addEventListener("DOMContentLoaded", () => {
    const btnViolencias = document.getElementById('btn-mostrar-violencias');
    btnViolencias.addEventListener('click', () => {
        
        ocultarTodo(); // Oculta todos los módulos

        const contenedor = document.getElementById('contenedor-tabla-violencias');
        contenedor.style.display = 'block'; // Muestra el listado de violencias

        // Carga la tabla desde el backend
        fetch("{{ route('violencia.index') }}")
            .then(res => res.text())
            .then(html => {
                contenedor.innerHTML = html;
            });
    });
});

// Formulario de creación
function cargarFormularioCrearViolencia() {
    const contenedor = document.getElementById('contenedor-formulario-violencia');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-violencias').style.display = 'none';

    fetch("{{ route('violencia.create') }}")
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Formulario de edición
function cargarFormularioEditarViolencia(id) {
    const contenedor = document.getElementById('contenedor-formulario-violencia');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-violencias').style.display = 'none';

    fetch(`/violencia/${id}/edit`)
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Mostrar detalle
function mostrarDetalleViolencia(id) {
    const contenedor = document.getElementById('contenedor-show-violencia');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-violencias').style.display = 'none';

    fetch(`/violencia/${id}`)
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Crear violencia
document.addEventListener('submit', function (e) {
    const formCrear = e.target.closest("#form-crear-violencia");
    if (!formCrear) return;

    e.preventDefault();

    const formData = new FormData(formCrear);

    fetch("/violencia", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    })
        .then(response => {
            if (!response.ok) throw new Error();
            return response.text();
        })
        .then(() => {
            Swal.fire({
                icon: 'success',
                title: 'Violencia creada correctamente',
                timer: 1500,
                showConfirmButton: false
            });
            cargarListadoViolencias();
        })
        .catch(() => {
            Swal.fire({
                icon: 'error',
                title: 'Error al crear'
            });
        });
});

// Editar violencia (submit)
document.addEventListener('submit', function (e) {
    const formEditar = e.target.closest("#form-editar-violencia");
    if (!formEditar) return;

    e.preventDefault();

    const idViolencia = formEditar.querySelector('input[name="id"]')?.value || formEditar.action.split('/').pop();
    const formData = new FormData(formEditar);
    formData.append('_method', 'PATCH');

    fetch(`/violencia/${idViolencia}`, {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    })
    .then(response => response.text())
    .then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Violencia actualizada correctamente',
            timer: 1500,
            showConfirmButton: false
        });
        cargarListadoViolencias();
    })
    .catch(() => {
        Swal.fire({
            icon: 'error',
            title: 'Error al actualizar'
        });
    });
});

// Eliminar violencia
function eliminarViolencia(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "Esta acción no se puede deshacer",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6'
    }).then((result) => {
        if (result.isConfirmed) {
            const formData = new FormData();
            formData.append('_method', 'DELETE');
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

            fetch(`/violencia/${id}`, {
                method: "POST",
                body: formData
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: data.message,
                            timer: 1500,
                            showConfirmButton: false
                        });
                        cargarListadoViolencias();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: data.message || 'No se pudo eliminar'
                        });
                    }
                })
                .catch(() => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al eliminar'
                    });
                });
        }
    });
}

// Recargar listado de violencias
function cargarListadoViolencias() {
    document.getElementById('contenedor-formulario-violencia').style.display = 'none';
    document.getElementById('contenedor-show-violencia').style.display = 'none';
    const contenedor = document.getElementById('contenedor-tabla-violencias');
    contenedor.style.display = 'block';

    fetch("{{ route('violencia.index') }}")
        .then(res => res.text())
        .then(html => {
            contenedor.innerHTML = html;
        });
}

// Botones de cancelar o volver
document.addEventListener('click', function (e) {
    if (e.target.matches('#btn-cancelar-violencia') || e.target.matches('#btn-volver-violencia')) {
        cargarListadoViolencias();
    }
});


//-----------------------SCRIPTS PARA MANEJAR TIPO VIOLENCIAS---------------------------------------------
// Mostrar tabla principal
document.addEventListener("DOMContentLoaded", () => {
    const btnTipoViolencias = document.getElementById('btn-mostrar-tipo-violencias');
    btnTipoViolencias.addEventListener('click', () => {
        
        ocultarTodo(); // Oculta todos los contenedores activos

        const contenedor = document.getElementById('contenedor-tabla-tipo-violencias');
        contenedor.style.display = 'block'; // Muestra la tabla

        // // Cargar la vista con el listado de tipos de violencia
        fetch("{{ route('tipo-violencia.index') }}")
            .then(res => res.text())
            .then(html => contenedor.innerHTML = html);
    });
});

// Formulario de creación
function cargarFormularioCrearTipoViolencia() {
    const contenedor = document.getElementById('contenedor-formulario-tipo-violencia');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-tipo-violencias').style.display = 'none';

    fetch("{{ route('tipo-violencia.create') }}")
        .then(res => res.text())
        .then(html => contenedor.innerHTML = html);
}

// Formulario de edición
function cargarFormularioEditarTipoViolencia(id) {
    const contenedor = document.getElementById('contenedor-formulario-tipo-violencia');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-tipo-violencias').style.display = 'none';

    fetch(`/tipo-violencia/${id}/edit`)
        .then(res => res.text())
        .then(html => contenedor.innerHTML = html);
}

// Mostrar detalle
function mostrarDetalleTipoViolencia(id) {
    const contenedor = document.getElementById('contenedor-show-tipo-violencia');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-tipo-violencias').style.display = 'none';

    fetch(`/tipo-violencia/${id}`)
        .then(res => res.text())
        .then(html => contenedor.innerHTML = html);
}

// Eliminar tipo de violencia
function eliminarTipoViolencia(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "Esta acción no se puede deshacer",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6'
    }).then((result) => {
        if (result.isConfirmed) {
            const formData = new FormData();
            formData.append('_method', 'DELETE');
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

            fetch(`/tipo-violencia/${id}`, {
                method: "POST",
                body: formData
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: data.message,
                            timer: 1500,
                            showConfirmButton: false
                        });
                        cargarListadoTipoViolencias();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: data.message || 'No se pudo eliminar'
                        });
                    }
                })
                .catch(() => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al eliminar'
                    });
                });
        }
    });
}

// Recargar listado
function cargarListadoTipoViolencias() {
    document.getElementById('contenedor-formulario-tipo-violencia').style.display = 'none';
    document.getElementById('contenedor-show-tipo-violencia').style.display = 'none';
    const contenedor = document.getElementById('contenedor-tabla-tipo-violencias');
    contenedor.style.display = 'block';

    fetch("{{ route('tipo-violencia.index') }}")
        .then(res => res.text())
        .then(html => contenedor.innerHTML = html);
}

// Crear (submit)
document.addEventListener('submit', function (e) {
    const formCrear = e.target.closest("#form-crear-tipo-violencia");
    if (!formCrear) return;

    e.preventDefault();

    const formData = new FormData(formCrear);

    fetch("/tipo-violencia", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) throw new Error();
        return response.text();
    })
    .then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Tipo de violencia creado correctamente',
            timer: 1500,
            showConfirmButton: false
        });
        cargarListadoTipoViolencias();
    })
    .catch(() => {
        Swal.fire({
            icon: 'error',
            title: 'Error al crear tipo de violencia'
        });
    });
});

// Editar (submit)
document.addEventListener('submit', function (e) {
    const formEditar = e.target.closest("#form-editar-tipo-violencia");
    if (!formEditar) return;

    e.preventDefault();

    const id = formEditar.querySelector('input[name="id"]')?.value || formEditar.action.split('/').pop();
    const formData = new FormData(formEditar);
    formData.append('_method', 'PATCH');

    fetch(`/tipo-violencia/${id}`, {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    })
    .then(response => response.text())
    .then(() => {
        Swal.fire({
            icon: 'success',
            title: 'Tipo de violencia actualizado correctamente',
            timer: 1500,
            showConfirmButton: false
        });
        cargarListadoTipoViolencias();
    })
    .catch(() => {
        Swal.fire({
            icon: 'error',
            title: 'Error al actualizar tipo de violencia'
        });
    });
});

// Botón cancelar o volver
document.addEventListener('click', function(e) {
    if (e.target.matches('#btn-cancelar-tipo-violencia') || e.target.matches('#btn-volver-tipo-violencia')) {
        cargarListadoTipoViolencias();
    }
});


//-----------------------SCRIPTS PARA MANEJAR DELITOS---------------------------------------------
// Mostrar tabla de delitos
document.addEventListener("DOMContentLoaded", () => {
    const btnDelitos = document.getElementById('btn-mostrar-delitos');
    btnDelitos.addEventListener('click', () => {
        
        ocultarTodo(); // Oculta otros contenedores activos

        const contenedor = document.getElementById('contenedor-tabla-delitos');
        contenedor.style.display = 'block';

        // // Cargar listado de delitos desde el servidor
        fetch("{{ route('delitos.index') }}")
            .then(res => res.text())
            .then(html => contenedor.innerHTML = html);
    });
});

// Cargar formulario de creación
function cargarFormularioCrearDelito() {
    const contenedor = document.getElementById('contenedor-formulario-delito');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-delitos').style.display = 'none';

    fetch("{{ route('delitos.create') }}")
        .then(res => res.text())
        .then(html => contenedor.innerHTML = html);
}

// Cargar formulario de edición
function cargarFormularioEditarDelito(id) {
    const contenedor = document.getElementById('contenedor-formulario-delito');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-delitos').style.display = 'none';

    fetch(`/delitos/${id}/edit`)
        .then(res => res.text())
        .then(html => contenedor.innerHTML = html);
}

// Mostrar detalle del delito
function mostrarDetalleDelito(id) {
    const contenedor = document.getElementById('contenedor-show-delito');
    contenedor.style.display = 'block';
    document.getElementById('contenedor-tabla-delitos').style.display = 'none';

    fetch(`/delitos/${id}`)
        .then(res => res.text())
        .then(html => contenedor.innerHTML = html);
}

// Crear delito (submit)
document.addEventListener('submit', function (e) {
    const formCrear = e.target.closest("#form-crear-delito");
    if (!formCrear) return;

    e.preventDefault();

    const formData = new FormData(formCrear);

    fetch("/delitos", {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
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
                title: 'Delito creado correctamente',
                timer: 1500,
                showConfirmButton: false
            });
            cargarListadoDelitos(); // Recarga tabla
        })
        .catch(() => {
            Swal.fire({
                icon: 'error',
                title: 'Error al crear'
            });
        });
});

// Editar delito (submit)
document.addEventListener('submit', function (e) {
    const formEditar = e.target.closest("#form-editar-delito");
    if (!formEditar) return;

    e.preventDefault();

    const idDelito = formEditar.querySelector('input[name="id"]')?.value || formEditar.action.split('/').pop();
    const formData = new FormData(formEditar);
    formData.append('_method', 'PATCH'); // Laravel requiere método PATCH

    fetch(`/delitos/${idDelito}`, {
        method: "POST",
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
        },
        body: formData
    })
        .then(res => res.text())
        .then(() => {
            Swal.fire({
                icon: 'success',
                title: 'Delito actualizado correctamente',
                timer: 1500,
                showConfirmButton: false
            });
            cargarListadoDelitos();
        })
        .catch(() => {
            Swal.fire({
                icon: 'error',
                title: 'Error al actualizar'
            });
        });
});

// Eliminar delito
function eliminarDelito(id) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "Esta acción no se puede deshacer",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar',
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6'
    }).then((result) => {
        if (result.isConfirmed) {
            const formData = new FormData();
            formData.append('_method', 'DELETE');
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

            fetch(`/delitos/${id}`, {
                method: "POST",
                body: formData
            })
                .then(res => res.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            icon: 'success',
                            title: data.message,
                            timer: 1500,
                            showConfirmButton: false
                        });

                        cargarListadoDelitos(); // Recarga la tabla

                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: data.message || 'No se pudo eliminar'
                        });
                    }
                })
                .catch(() => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al eliminar'
                    });
                });
        }
    });
}

// Recargar tabla de delitos
function cargarListadoDelitos() {
    document.getElementById('contenedor-formulario-delito').style.display = 'none';
    document.getElementById('contenedor-show-delito').style.display = 'none';
    const contenedor = document.getElementById('contenedor-tabla-delitos');
    contenedor.style.display = 'block';

    fetch("{{ route('delitos.index') }}")
        .then(res => res.text())
        .then(html => contenedor.innerHTML = html);
}

// Botones "Cancelar" o "Volver"
document.addEventListener('click', function (e) {
    if (e.target.matches('#btn-cancelar-delito') || e.target.matches('#btn-volver-delito')) {
        cargarListadoDelitos();
    }
});

//-----------------------OCULTAR TODO ---------------------------------------------
function ocultarTodo() {
    [
        // Contenedores de formularios principales
        'formularios-container', 'victima-section', 'agresor-section', 'denuncia-section',
        // Listados y formularios de denuncias
        'contenedor-tabla-denuncias',
        'contenedor-tabla-archivados-denuncias',
        'resumen-section',
        'formulario-busqueda-denuncias',
        'resultados-busqueda-denuncias',
        // Sección bienvenida y reportes
        'bienvenida-section',
        'seccion-reportes',
        // Oficinas
        'contenedor-tabla-oficinas',
        'contenedor-formulario-oficina',
        'contenedor-show-oficina',
        // Roles
        'contenedor-tabla-roles',
        'contenedor-formulario-rol',
        'contenedor-show-rol',
        // Usuarios
        'contenedor-tabla-users',
        'contenedor-formulario-user',
        'contenedor-show-user',
        // Violencias
        'contenedor-tabla-violencias',
        'contenedor-formulario-violencia',
        'contenedor-show-violencia',
        // Tipos de violencia
        'contenedor-tabla-tipo-violencias',
        'contenedor-formulario-tipo-violencia',
        'contenedor-show-tipo-violencia',
        // Delitos
        'contenedor-tabla-delitos',
        'contenedor-formulario-delito',
        'contenedor-show-delito',
        // Derivaciones
        'contenedor-tabla-derivar',
        // Asignaciones
        'contenedor-tabla-asignar'
    ].forEach(id => {
        const el = document.getElementById(id);
        if (el) el.style.display = 'none';
    });
}
</script>


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