{{-- Documento --}}
<form id="form-documento">
    @csrf
    @include('documento.form', [
        'documento' => $documento,
        'tiposDocumento' => $tiposDocumento
    ])
</form>
<div id="documento-table-container" class="mt-4"></div>
<hr>

{{-- Víctima --}}
<form id="form-victima">
    @include('victima.form', [
        'victima' => $victima,
        'documentos' => $documentos
    ])
    <div id="victima-table-container" class="mt-4"></div>
</form>
<hr>

{{-- Agresor --}}
<form id="form-agresor">
    @include('agresor.form', ['agresor' => $agresor])
    <div id="agresor-table-container" class="mt-4"></div>
</form>
<hr>

{{-- Domicilio --}}
<form id="form-domicilio">
    @include('domicilio.form', [
        'domicilio' => $domicilio,
        'victimas' => $victimas,
        'agresores' => $agresores
    ])
    <div id="domicilio-table-container" class="mt-4"></div>
</form>
<hr>

{{-- Domicilio Trabajo --}}
@include('domicilio-trabajo.form', [
    'domicilioTrabajo' => $domicilioTrabajo,
    'agresores' => $agresores
])
