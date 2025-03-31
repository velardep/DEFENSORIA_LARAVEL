<?php

namespace App\Http\Controllers;

use App\Models\Agresor;
use App\Models\Denuncia;
use App\Models\Documento;
use App\Models\Domicilio;
use App\Models\DomicilioTrabajo;
use App\Models\TipoDocumento;
use App\Models\TipoViolencia;
use App\Models\Victima;
use App\Models\Violencia;
use Illuminate\Http\Request;

class RegistrarDenunciaController extends Controller
{
    public function create()
    {

        // Instancias vacías para evitar errores en los formularios
        $documento = new Documento();
        $victima = new Victima();
        $agresor = new Agresor();
        $domicilio = new Domicilio();
        $domicilioTrabajo = new DomicilioTrabajo();
        $tipoDocumento = new TipoDocumento();
        $tiposViolencia = new TipoViolencia();
        $violencia = new Violencia();
        $denuncia = new Denuncia();

        // Listas completas para selects
        $documentos = Documento::all();
        $victimas = Victima::all();
        $agresores = Agresor::all();
        $tiposDocumento = TipoDocumento::all();
        $tiposViolencia = TipoViolencia::all();
        $violencias = Violencia::all();
        $domicilios = Domicilio::all();

        return view('registrar_denuncia.registrar_denuncia', compact(
            'tiposDocumento', 'documentos', 'victimas', 'agresores',
            'domicilios', 'domicilio', 'domicilioTrabajo',
            'tiposViolencia', 'violencias',
            'denuncia', 'victima', 'agresor', 'documento', 'tipoDocumento', 'tiposViolencia', 'violencia'
        ));
        
        
    }
}
