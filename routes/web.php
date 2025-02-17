<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\OficinaController;
use App\Models\Oficina;



Route::get('/oficina', function () {
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



Route::get('/', function () {
    return view(view: 'index
    ');
});

Route::get('roles/{idrol}/edit', [RolController::class, 'edit']);

Route::get('roles', [RolController::class, 'index']);
Route::post('roles', [RolController::class, 'store']);
Route::get('roles/{idrol}', [RolController::class, 'show']);
Route::put('roles/{idrol}', [RolController::class, 'update']);
Route::delete('roles/{idrol}', [RolController::class, 'destroy']);

Route::get('permisos', [PermisoController::class, 'index']);
Route::post('permisos', [PermisoController::class, 'store']);
Route::get('permisos/{idpermiso}', action: [PermisoController::class, 'show']);
Route::put('permisos/{idpermiso}', [PermisoController::class, 'update']);
Route::delete('permisos/{idpermiso}', [PermisoController::class, 'destroy']);


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
