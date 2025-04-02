<?php

use Illuminate\Support\Facades\Route;

// Controladores principales
use App\Http\Controllers\VictimaController;
use App\Http\Controllers\ViolenciaController;
use App\Http\Controllers\TipoViolenciaController;
use App\Http\Controllers\DenunciaController;
use App\Http\Controllers\AgresorController;
use App\Http\Controllers\DelitoController;
use App\Http\Controllers\AccionController;
use App\Http\Controllers\RegistrarDenunciaController;
use App\Http\Controllers\ApiUserSyncController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\FamiliaVictimaController;

use App\Http\Controllers\OrientacionController;
use App\Http\Controllers\IntervencionController;
use App\Http\Controllers\AsignacionController;

use App\Http\Controllers\ReporteController;


use App\Models\Accion;

use App\Models\Denuncia;



// routes/web.php


// ========== RAÍZ Y AUTENTICACIÓN ==========
// Al acceder a la raíz '/', redirige según el rol del usuario autenticado.
// Si no está autenticado, redirige al login.
Route::get('/', function () {
    if (auth()->check()) {
        $rol = auth()->user()->rol_id;

        return match ($rol) {
            3 => redirect()->route('admin.dashboard'),      // Si es admin
            2 => redirect()->route('vista.abogado'),        // Si es abogado
            4 => redirect()->route('vista.social'),         // Si es trabajador social
            1 => redirect()->route('vista.psicologico'),    // Si es psicologo
            default => abort(403),
        };
    }

    return redirect()->route('login');
});

// Rutas automáticas de autenticación: login, logout, etc.
Auth::routes();


// ========== DASHBOARD ADMIN ==========
// Redirige /admin a /admin/dashboard
Route::get('/admin', fn() => redirect()->route('admin.dashboard'));

// Muestra la vista del panel de administración (admin.dashboard)
Route::get('/admin/dashboard', fn() => view('admin.dashboard'))
    ->middleware('auth')
    ->name('admin.dashboard');


// ========== VISTAS POR ROL ==========
// Vista principal para abogados
Route::get('/abogado', [RegistrarDenunciaController::class, 'create'])
    ->middleware('auth')
    ->name('vista.abogado');

// Vista principal para trabajadores sociales
Route::get('/social', [RegistrarDenunciaController::class, 'create'])
    ->middleware('auth')
    ->name('vista.social');

// Vista principal para psicólogos
Route::get('/psicologico', [RegistrarDenunciaController::class, 'create'])
    ->middleware('auth')
    ->name('vista.psicologico');



// Muestra la vista para asignar denuncias a técnicos (solo accesible para admins)
Route::get('/admin/asignar', [DenunciaController::class, 'vistaAsignar'])
    ->middleware('auth')
    ->name('admin.asignar');


// Muestra la tabla de denuncias en la vista del Administrador
Route::get('/admin/tabla-denuncias', function () {
    $denuncias = Denuncia::with(['victima', 'agresor'])->get();
    return view('denuncia.tabla_denuncias_admin', compact('denuncias'));
});

Route::delete('/denuncias/{id}', [DenunciaController::class, 'destroy']);


// ========== REGISTRO MANUAL ==========
// Muestra el formulario de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Procesa los datos enviados en el registro
Route::post('/register', [RegisterController::class, 'register']);


// ========== DERIVACIÓN DE DENUNCIAS ==========
// Muestra la tabla con denuncias disponibles para derivar
Route::get('/denuncias/derivar', [DenunciaController::class, 'tablaDerivar'])->name('denuncia.tabla-derivar');

// Realiza la acción de derivar una denuncia a otra oficina y asignar nuevo abogado (acción POST con ID)
Route::post('/denuncias/derivar/{id}', [DenunciaController::class, 'derivar'])->name('denuncia.derivar');


// ========== API AUXILIAR (USADA EN MODALES) ==========
// Devuelve todas las oficinas (usado para llenar un <select> en JS)
Route::get('/api/oficinas', function () {
    return \App\Models\Oficina::all();
});

// Devuelve lista de abogados que pertenecen a una oficina específica
Route::get('/api/abogados-por-oficina/{id}', function ($id) {
    return \App\Models\User::where('rol_id', 2)
        ->where('oficina_id', $id)
        ->select('id', 'nombre')
        ->get();
});


// Muestra víctimas que no tienen una denuncia asociada (para completar)
Route::get('/victimas/sin-denuncia', [VictimaController::class, 'sinDenuncia'])->name('victima.sin_denuncia');




// =====================
// Rutas del sistema SLIM
// =====================


// Muestra el formulario de creación de agresores (usado internamente en flujo de denuncia)
Route::get('/agresores/create', [AgresorController::class, 'create']);

// Muestra el formulario de creación de denuncias (si se accede directamente)
Route::get('/denuncias/create', [DenunciaController::class, 'create']);


// Rutas de autenticación
Auth::routes();
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// ================================
// Recursos para la gestión general
// ================================

Route::resource('victimas', VictimaController::class);
Route::resource('violencia', ViolenciaController::class);
Route::resource('tipo-violencia', TipoViolenciaController::class);
Route::resource('denuncia', DenunciaController::class);
Route::resource('agresor', AgresorController::class);
Route::resource('delitos', DelitoController::class);
Route::resource('accions', AccionController::class);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('oficinas', OficinaController::class);
Route::resource('asignaciones', AsignacionController::class);

Route::resource('familia-victima', FamiliaVictimaController::class);

Route::get('/familia-victima/create', [FamiliaVictimaController::class, 'createFromResumen'])
     ->name('familia-victima.create');


// Rutas especiales para Orientaciones
// Buscador personalizado
Route::get('orientacion/buscar', [OrientacionController::class, 'buscar'])->name('orientacion.buscar');
// CRUD completo de orientaciones
Route::resource('orientacion', OrientacionController::class);
// Ver detalle de una orientación
Route::get('/orientacion/{id}', [OrientacionController::class, 'show']);


// Rutas especiales para Intervenciones
// Buscador personalizado
Route::get('intervencion/buscar', [IntervencionController::class, 'buscar'])->name('intervencion.buscar');
// CRUD completo de intervenciones
Route::resource('intervencion', IntervencionController::class);
// Ver detalle de una intervención
Route::get('/intervencion/{id}', [IntervencionController::class, 'show']);


// Vista del módulo de asignación de denuncias (tabla)
Route::get('/admin/asignar', [DenunciaController::class, 'tablaAsignar'])->name('denuncia.tabla-asignar');
// API: Devuelve técnicos (psicólogos y trabajadores sociales) de una oficina específica
Route::get('/api/tecnicos-oficina/{oficina_id}', function ($id) {
    return App\Models\User::where('oficina_id', $id)
        ->whereIn('rol_id', [4,1]) // Filtra por roles: trabajador social (4) y psicólogo (1)
        ->get(['id', 'nombre', 'rol_id'])
        ->map(function ($u) {
            $u->rol = App\Models\Role::find($u->rol_id)->nombre;
            return $u;
        });
});
// POST: Asigna técnicos a una denuncia (social o psicólogo)
Route::post('/denuncias/asignar/{id}', [App\Http\Controllers\DenunciaController::class, 'asignar']);


// ================================
// Funciones específicas y APIs
// ================================

// Devuelve todas las acciones registradas en una denuncia específica, ordenadas por fecha
Route::get('/denuncias/{id}/acciones', function ($id) {
    return \App\Models\Denuncia::find($id)->acciones()->orderBy('fecha')->get();
});

// Muestra la vista resumen de una denuncia, incluyendo víctima, agresor y acciones
Route::get('/denuncias/resumen/{id}', function ($id) {
    $denuncia = \App\Models\Denuncia::with(['victima', 'agresor', 'acciones', 'victima.familiares'])->findOrFail($id);
    return view('denuncia.resumen', compact('denuncia'));
});

// Muestra los detalles completos de una víctima en una vista individual
Route::get('/victimas/detalle/{id}', function ($id) {
    $victima = \App\Models\Victima::findOrFail($id);
    return view('denuncia.detalle_victima', compact('victima'));
});

// Abre el formulario para registrar una nueva acción relacionada con una denuncia
Route::get('/acciones/formulario/{id}', function ($id) {
    $accion = new Accion();
    $accion->denuncia_id = $id;
    return view('accions.create', compact('accion'));
});

// 📦 Carga varios formularios secundarios en una sola vista parcial
Route::get('/formularios-secundarios/{id}', function ($id) {
    return view('partials.formularios-secundarios', [
        'victima' => new App\Models\Victima(),
        'agresor' => new App\Models\Agresor(),
        'victimas' => App\Models\Victima::all(),
        'agresores' => App\Models\Agresor::all(),
    ]);
});

// API que retorna víctimas y agresores con estado "provisional" para usarlos en selects dinámicos
Route::get('/api/victimas-y-agresores', function () {
    return response()->json([
        'victimas' => \App\Models\Victima::where('provisional', true)->select('id', 'nombre', 'ap_paterno')->get(),
        'agresores' => \App\Models\Agresor::where('provisional', true)->select('id', 'nombre', 'ap_paterno')->get(),
    ]);
});

// API para obtener el listado completo de víctimas (usado por select2, formularios, etc.)
Route::get('/api/victimas', fn() => \App\Models\Victima::all());
// API para obtener el listado completo de agresores
Route::get('/api/agresores', fn() => \App\Models\Agresor::all());


// ====================================
// Buscadores y filtros de denuncias y víctimas
// ====================================

// Permite buscar denuncias desde un formulario (por POST o GET)
Route::post('/denuncias/buscar', [DenunciaController::class, 'buscar'])->name('denuncia.buscar');
Route::get('/denuncias/buscar', [DenunciaController::class, 'buscar'])->name('denuncia.buscar');

// Permite buscar víctimas desde un formulario (por POST o GET)
Route::post('/victimas/buscar', [VictimaController::class, 'buscar'])->name('victima.buscar');
Route::get('/victimas/buscar', [VictimaController::class, 'buscar'])->name('victima.buscar');



// ===========================
// Vistas especiales de denuncias
// ===========================

// Muestra solo las denuncias emblemáticas para análisis o reporte
Route::get('/denuncias/emblematicos', [DenunciaController::class, 'emblematicos'])->name('denuncia.emblematicos');

// Muestra todas las denuncias que han sido archivadas
Route::get('/denuncias/archivados', [DenunciaController::class, 'archivados'])->name('denuncia.archivados');

// Muestra denuncias incompletas, es decir, sin todos los datos requeridos
Route::get('/denuncias/incompletos', [DenunciaController::class, 'incompletos'])->name('denuncia.incompletos');

// Marca una denuncia incompleta como completa (se usa después de llenarla)
Route::post('/denuncia/provisional/{id}', [DenunciaController::class, 'marcarCompleto']);

// Devuelve un resumen de la denuncia en formato JSON (usado para vistas dinámicas)
Route::get('/api/denuncia/resumen/{id}', function ($id) {
    $denuncia = \App\Models\Denuncia::with(['victima', 'agresor'])->findOrFail($id);
    return response()->json([
        'victima' => $denuncia->victima->nombre . ' ' . $denuncia->victima->ap_paterno,
        'agresor' => $denuncia->agresor->nombre . ' ' . $denuncia->agresor->ap_paterno,
        'num_caso' => $denuncia->num_caso,
        'cod_slim' => $denuncia->cod_slim, 
        'estado' => $denuncia->estado,
        'testimonio' => $denuncia->testimonio,
        'violencia_fisica' => $denuncia->violencia_fisica,
        'violencia_sexual' => $denuncia->violencia_sexual,
        'violencia_economica' => $denuncia->violencia_economica,
        'violencia_psicologica' => $denuncia->violencia_psicologica,
        'violencia_feminicida' => $denuncia->violencia_feminicida,

    ]);
});

// ===========================
// Actualizaciones dinámicas de denuncias
// ===========================

// Actualiza el estado de una denuncia (por ejemplo: en proceso, finalizada)
Route::post('/denuncia/estado/{id}', [DenunciaController::class, 'actualizarEstado']);

// Permite editar o agregar el testimonio de una denuncia
Route::post('/denuncia/testimonio/{id}', [DenunciaController::class, 'actualizarTestimonio']);

// Permite actualizar los delitos penales asociados a una denuncia
Route::post('/denuncia/delitos/{id}', [DenunciaController::class, 'actualizarDelitos']);

// Devuelve los delitos actuales registrados en una denuncia
Route::get('/denuncias/delitos/{id}', [DenunciaController::class, 'mostrarDelitos']);

// Permite actualizar los tipos de violencia seleccionados en la denuncia
Route::post('/denuncia/violencias/{id}', [DenunciaController::class, 'actualizarViolencias']);



// ===========================
// APIs auxiliares
// ===========================

// Devuelve todos los delitos disponibles del sistema
Route::get('/api/delitos', function () {
    return \App\Models\Delito::all();
});

// Devuelve las violencias agrupadas por tipo (económica, física, etc.)
Route::get('/api/violencias', function () {
    return response()->json([
        'economica' => \App\Models\Violencia::where('id_tipo_violencia', 1)->get(),
        'psicologica' => \App\Models\Violencia::where('id_tipo_violencia', 2)->get(),
        'sexual' => \App\Models\Violencia::where('id_tipo_violencia', 3)->get(),
        'fisica' => \App\Models\Violencia::where('id_tipo_violencia', 4)->get(),
        'feminicida' => \App\Models\Violencia::where('id_tipo_violencia', 5)->get(),
    ]);
});


// ===========================
// Reportes PDF y Excel
// ===========================

// Reportes PDF
// Genera un PDF con los datos de todas las víctimas registradas
Route::get('/reportes/victimas/pdf', [ReporteController::class, 'victimasPDF'])->name('reporte.victimas.pdf');

// Genera un PDF con los casos emblemáticos (importantes o destacados)
Route::get('/reportes/emblematicos/pdf', [ReporteController::class, 'generarReportePDF'])->name('reportes.emblematicos.pdf');

// Genera un PDF detallado de una denuncia específica por su ID
Route::get('/reportes/denuncia/{id}/pdf', [ReporteController::class, 'reportePorDenuncia'])->name('reporte.denuncia.pdf');

// Reportes Excel
// Exporta los casos emblemáticos a un archivo Excel
Route::get('/reportes/emblematicos/excel', [ReporteController::class, 'exportarEmblematicos'])->name('reportes.excel');



// ===========================
// Edición de agresor desde resumen
// ===========================

// Muestra el formulario para editar al agresor directamente desde el resumen
Route::get('/agresor/{id}/editar-resumen', [AgresorController::class, 'editarDesdeResumen']);
// Guarda los cambios del agresor editado desde el resumen
Route::post('/agresor/{id}', [AgresorController::class, 'actualizarDesdeResumen']);


Route::get('victima/{id}/editar-resumen', [VictimaController::class, 'editarDesdeResumen']);
Route::post('victima/{id}', [VictimaController::class, 'actualizarDesdeResumen']);


/*Route::get('phpinfo', function () {
    $host = env('DB_HOST', '127.0.0.1'); // Asegúrate de proporcionar valores predeterminados
    $port = env('DB_PORT', '5432');
    $database = env('DB_DATABASE', 'defensoria_2.0');
    $username = env('DB_USERNAME', 'postgres');
    $password = env('DB_PASSWORD', '10330239');

    try {
        $dsn = "pgsql:host=$host;port=$port;dbname=$database"; // Construcción correcta del DSN
        $pdo = new PDO($dsn, $username, $password);
        return "Conexión a la base de datos exitosa.";
    } catch (PDOException $e) {
        return "Error al conectar con la base de datos: " . $e->getMessage();
    }
});
*/

