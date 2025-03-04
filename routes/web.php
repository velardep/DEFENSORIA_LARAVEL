<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\TipoOficinaController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolPermisoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\TipologiaController;
use App\Http\Controllers\DenunciasDenunciaController;
use App\Http\Controllers\DenunciasTipologiaController;
use App\Http\Controllers\DenunciasTerapiaController;
use App\Http\Controllers\DenunciasPersonaController;




Route::resource('tipo-oficinas', TipoOficinaController::class);
Route::resource('oficinas', OficinaController::class);
Route::resource('permisos', PermisoController::class);
Route::resource('roles', RoleController::class);
Route::resource('rol-permisos', RolPermisoController::class);
Route::resource('personas', PersonaController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('tipologias', TipologiaController::class);
Route::resource('denuncias-denuncias', DenunciasDenunciaController::class);
Route::resource('denuncias-tipologias', DenunciasTipologiaController::class);
Route::resource('denuncias-terapias', DenunciasTerapiaController::class);
Route::resource('denuncias-personas', DenunciasPersonaController::class);




Route::get('/test', function () {
    return 'Laravel está funcionando correctamente';
});






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


