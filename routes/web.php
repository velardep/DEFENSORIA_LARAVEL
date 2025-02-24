<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OficinaController;
use App\Models\Oficina;
use App\Http\Controllers\PermisoController;
use App\Models\Permiso;


use App\Http\Controllers\RolController;


use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\AuthGroupController;


Route::get('/auth_group', [AuthGroupController::class, 'index']);
Route::post('/auth_group', [AuthGroupController::class, 'store']);
Route::get('/auth_group/{id}', [AuthGroupController::class, 'show']);
Route::put('/auth_group/{id}', [AuthGroupController::class, 'update']);
Route::delete('/auth_group/{id}', [AuthGroupController::class, 'destroy']);



// AUTH_USER
Route::get('/auth_user', [AuthUserController::class, 'index']);
Route::post('/auth_user', [AuthUserController::class, 'store']);
Route::get('/auth_user/{id}', [AuthUserController::class, 'show']);
Route::put('/auth_user/{id}', [AuthUserController::class, 'update']);
Route::delete('/auth_user/{id}', [AuthUserController::class, 'destroy']);





/*Route::get('/oficina', function () {
    $oficinas = App\Models\Oficina::all();
    return view('oficina.indexoficina', compact('oficinas'));
});
// Rutas para Oficina
Route::get('/oficina', [OficinaController::class, 'index']); // Listar oficinas
Route::get('/oficina/create', [OficinaController::class, 'create']); // Formulario para agregar oficina
Route::post('/oficina', [OficinaController::class, 'store']); // Guardar nueva oficina
Route::get('/oficina/{idoficina}/edit', [OficinaController::class, 'edit']); // Formulario de edición
Route::put('/oficina/{idoficina}', [OficinaController::class, 'update']); // Guardar cambios
Route::delete('/oficina/{idoficina}', [OficinaController::class, 'destroy']); // Eliminar oficina




Route::get('/permiso', function () {
    $permisos = App\Models\Permiso::all();
    return view('permiso.indexpermiso', compact('permisos'));
});
// Rutas para Permiso
Route::get('/permiso', [PermisoController::class, 'index']); // Listar oficinas
Route::get('/permiso/create', [PermisoController::class, 'create']); // Formulario para agregar oficina
Route::post('/permiso', [PermisoController::class, 'store']); // Guardar nueva oficina
Route::get('/permiso/{idpermiso}/edit', [PermisoController::class, 'edit']); // Formulario de edición
Route::put('/permiso/{idpermiso}', [PermisoController::class, 'update']); // Guardar cambios
Route::delete('/permiso/{idpermiso}', [PermisoController::class, 'destroy']); // Eliminar oficina

*/

Route::get('/', function () {
    return view(view: 'index
    ');
});

/*Route::get('roles/{idrol}/edit', [RolController::class, 'edit']);

Route::get('roles', [RolController::class, 'index']);
Route::post('roles', [RolController::class, 'store']);
Route::get('roles/{idrol}', [RolController::class, 'show']);
Route::put('roles/{idrol}', [RolController::class, 'update']);
Route::delete('roles/{idrol}', [RolController::class, 'destroy']);

Route::get('permisos', [PermisoController::class, 'index']);
Route::post('permisos', [PermisoController::class, 'store']);
Route::get('permisos/{idpermiso}', action: [PermisoController::class, 'show']);
Route::put('permisos/{idpermiso}', [PermisoController::class, 'update']);
Route::delete('permisos/{idpermiso}', [PermisoController::class, 'destroy']);*/


/*Route::get('/', function () {
    return view('welcome');
});*/



























/*Route::get('phpinfo', function () {
    $host = env('DB_HOST', '127.0.0.1'); // Asegúrate de proporcionar valores predeterminados
    $port = env('DB_PORT', '5432');
    $database = env('DB_DATABASE', 'defensoria');
    $username = env('DB_USERNAME', 'postgres');
    $password = env('DB_PASSWORD', '10330239');

    try {
        $dsn = "pgsql:host=$host;port=$port;dbname=$database"; // Construcción correcta del DSN
        $pdo = new PDO($dsn, $username, $password);
        return "Conexión a la base de datos exitosa.";
    } catch (PDOException $e) {
        return "Error al conectar con la base de datos: " . $e->getMessage();
    }
});*/
