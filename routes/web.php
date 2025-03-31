<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\VictimaController;
use App\Http\Controllers\ViolenciaController;
use App\Http\Controllers\TipoViolenciaController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\DomicilioTrabajoController;
use App\Http\Controllers\DomicilioController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\DenunciaController;
use App\Http\Controllers\AgresorController;





Route::resource('victimas', VictimaController::class);
Route::resource('violencia', ViolenciaController::class);
Route::resource('tipo-violencia', TipoViolenciaController::class);
Route::resource('tipo-documento', TipoDocumentoController::class);
Route::resource('domicilio-trabajos', DomicilioTrabajoController::class);
Route::resource('domicilio', DomicilioController::class);
Route::resource('documento', DocumentoController::class);
Route::resource('denuncia', DenunciaController::class);
Route::resource('agresor', AgresorController::class);






/*use App\Models\Domicilio;
use App\Models\Documento;
use App\Models\DomicilioTrabajo;
use App\Models\Agresor;
use App\Models\Victima;
use App\Models\TipoDocumento;


Route::get('/iniciar', function () {
    return view('iniciar', [
        'domicilio' => new Domicilio(),
        'documento' => new Documento(),
        'domicilioTrabajo' => new DomicilioTrabajo(),
        'agresores' => Agresor::all(),
        'victimas' => Victima::all(),
        'tiposDocumento' => TipoDocumento::all()
    ]);
})->name('iniciar');*/

use App\Http\Controllers\RegistrarDenunciaController;

Route::get('/iniciar', [RegistrarDenunciaController::class, 'create'])->name('registrar.denuncia');











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

