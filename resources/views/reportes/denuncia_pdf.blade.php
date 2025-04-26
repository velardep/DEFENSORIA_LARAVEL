<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Denuncia</title>
    <style>
    body {
        font-family: DejaVu Sans, sans-serif;
        font-size: 12px;
        color: #333;
        background-color:rgb(255, 255, 255); /* fondo muy suave */
    }

    h2 {
        text-align: center;
        background-color:rgb(17, 17, 17); /* rojo intenso */
        color: white;
        padding: 12px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .section {
        border: 2px solid rgb(46, 44, 44);
        padding: 14px;
        border-radius: 10px;
        margin-bottom: 20px;
        background-color:rgb(255, 255, 255); /* amarillo medio */
    }

    .section h3 {
        margin-top: 0;
        background-color:rgb(58, 56, 56);
        color: white;
        padding: 8px;
        border-radius: 6px;
        border-left: 5px solid #be1704;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 10px;
    }

    .col {
        flex: 1 0 45%;
        margin: 5px;
        padding: 8px;
        background-color:rgb(209, 209, 209);
        border-left: 4px solid #ef3620;
        border-radius: 4px;
    }

    .label {
        font-weight: bold;
        color: #be1704;
    }

    .value {
        color: #444;
    }
</style>

</style>
</head>
<body>

<h2>Reporte de Denuncia</h2>

<div class="section">
    <h3> Información General</h3>
    <divclass="row">
        <div class="col"><span class="label">Fecha:</span> {{ $denuncia->fecha }}</div>
        <div class="col"><span class="label">N° Caso:</span> {{ $denuncia->num_caso }}</div>
        <div class="col"><span class="label">Código SLIM:</span> {{ $denuncia->cod_slim }}</div>
        <div class="col"><span class="label">Estado:</span> {{ $denuncia->estado }}</div>
        <div class="col"><span class="label">Emblemático:</span> {{ $denuncia->emblematico }}</div>
        <div class="col"><span class="label">N° Juzgado:</span> {{ $denuncia->num_juzgado }}</div>
    </div>
</div>

<div class="section">
    <h3>Agresor</h3>
    <div class="row">
        <div class="col"><span class="label">Nombre:</span> {{ $denuncia->agresor->nombre ?? 'N/A' }}</div>
    </div>

    <h3>Víctima</h3>
    <div class="row">
        <div class="col"><span class="label">Nombre:</span> {{ $denuncia->victima->nombre ?? 'N/A' }}</div>
    </div>
</div>


<div class="section">
    <h3>Violencias</h3>
    <div class="row">
        <div class="col"><span class="label">Física:</span> {{ implode(', ', json_decode($denuncia->violencia_fisica ?? '[]')) }}</div>
        <div class="col"><span class="label">Psicológica:</span> {{ implode(', ', json_decode($denuncia->violencia_psicologica ?? '[]')) }}</div>
        <div class="col"><span class="label">Sexual:</span> {{ implode(', ', json_decode($denuncia->violencia_sexual ?? '[]')) }}</div>
        <div class="col"><span class="label">Económica:</span> {{ implode(', ', json_decode($denuncia->violencia_economica ?? '[]')) }}</div>
        <div class="col"><span class="label">Delitos Penales:</span> {{ implode(', ', json_decode($denuncia->delitos_penales ?? '[]')) }}</div>


    </div>
</div>

<div class="section">
    <h3>Detalles Adicionales</h3>
    <div class="row">
        <div class="col"><span class="label">Forma de Ingreso:</span> {{ $denuncia->forma_ingreso }}</div>
        <div class="col"><span class="label">Denuncia Previa:</span> {{ $denuncia->denuncia_previa }}</div>
        <!--<div class="col"><span class="label">Completada:</span> {{ $denuncia->completada }}</div>-->
    </div>
    <div class="row">
        <div class="col" style="flex: 1 0 100%;"><span class="label">Testimonio:</span><br> {{ $denuncia->testimonio }}</div>
    </div>
</div>

<div class="section">
    <h3>Lugar del Hecho</h3>
    <div class="row">
        <div class="col"><span class="label">Zona/Barrio:</span> {{ $denuncia->zona_barrio }}</div>
        <div class="col"><span class="label">Calle:</span> {{ $denuncia->avenida_calle }}</div>
        <div class="col"><span class="label">Edificio:</span> {{ $denuncia->nom_edificio }}</div>
        <div class="col"><span class="label">Vivienda:</span> {{ $denuncia->num_vivienda }}</div>
        <div class="col"><span class="label">Lugar:</span> {{ $denuncia->lugar_domicilio }}</div>
        <div class="col"><span class="label">Especifique:</span> {{ $denuncia->especifique }}</div>
    </div>
</div>



</body>
</html>
