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
use App\Http\Controllers\DelitoController;
use App\Http\Controllers\AccionController;


Route::resource('delitos', DelitoController::class);
Route::resource('accions', AccionController::class);



Route::resource('victimas', VictimaController::class);
Route::resource('violencia', ViolenciaController::class);
Route::resource('tipo-violencia', TipoViolenciaController::class);
Route::resource('tipo-documento', TipoDocumentoController::class);
Route::resource('domicilio-trabajos', DomicilioTrabajoController::class);
Route::resource('domicilio', DomicilioController::class);
Route::resource('documento', DocumentoController::class);
Route::resource('denuncia', DenunciaController::class);
Route::resource('agresor', AgresorController::class);


Route::get('/denuncias/{id}/acciones', function ($id) {
    return Denuncia::find($id)->acciones()->orderBy('fecha')->get();
});




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



/*Route::get('/denuncias/resumen/{id}', function ($id) {
    $denuncia = \App\Models\Denuncia::with(['victima', 'agresor'])->findOrFail($id);
    return view('denuncia.resumen', compact('denuncia'));
});*/
Route::get('/denuncias/resumen/{id}', function ($id) {
    $denuncia = \App\Models\Denuncia::with(['victima', 'agresor', 'acciones'])->findOrFail($id);
    return view('denuncia.resumen', compact('denuncia'));
});

use App\Models\Accion;
Route::get('/acciones/formulario/{id}', function ($id) {
    $accion = new Accion();
    $accion->denuncia_id = $id;

    return view('accions.create', compact('accion'));
});


Route::get('/formularios-secundarios/{id}', function ($id) {
    // Puedes usar el ID si necesitas filtrar datos relacionados
    return view('partials.formularios-secundarios', [
        'documento' => new App\Models\Documento(),
        'tiposDocumento' => App\Models\TipoDocumento::all(),
        'victima' => new App\Models\Victima(),
        'documentos' => App\Models\Documento::all(),
        'agresor' => new App\Models\Agresor(),
        'domicilio' => new App\Models\Domicilio(),
        'domicilioTrabajo' => new App\Models\DomicilioTrabajo(),
        'victimas' => App\Models\Victima::all(),
        'agresores' => App\Models\Agresor::all(),
    ]);
});



Route::get('/api/victimas-y-agresores', function () {
    return response()->json([
        'victimas' => \App\Models\Victima::select('id', 'nombre', 'ap_paterno')->get(),
        'agresores' => \App\Models\Agresor::select('id', 'nombre', 'ap_paterno')->get(),
    ]);
});


// En web.php o api.php
Route::get('/api/victimas', fn() => \App\Models\Victima::all());
Route::get('/api/agresores', fn() => \App\Models\Agresor::all());



Route::get('/denuncias/buscar', [App\Http\Controllers\DenunciaController::class, 'buscar'])->name('denuncia.buscar');


Route::post('/denuncias/buscar', [DenunciaController::class, 'buscar'])->name('denuncia.buscar');


// CHECK BOX PARA RELLENAR LUGAR DE AGRESION 
/*Route::get('/api/victima/{id}', function ($id) {
    $victima = App\Models\Victima::findOrFail($id);
    return response()->json([
        'zona_barrio' => $victima->zona_barrio,
        'avenida_calle' => $victima->avenida_calle,
        'nombre_edificio' => $victima->nombre_edificio,
        'num_vivienda' => $victima->num_vivienda,
        'lugar_domicilio' => $victima->lugar_domicilio,
        'especifique' => $victima->especifique,
    ]);
});*/


Route::get('/denuncias/buscar', [DenunciaController::class, 'buscar'])->name('denuncia.buscar');



/*Route::get('/test', function () {
    return 'Laravel está funcionando correctamente';
});*/


Route::get('/denuncias/emblematicos', [DenunciaController::class, 'emblematicos'])->name('denuncia.emblematicos');

Route::post('/denuncia/estado/{id}', [DenunciaController::class, 'actualizarEstado']);




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

