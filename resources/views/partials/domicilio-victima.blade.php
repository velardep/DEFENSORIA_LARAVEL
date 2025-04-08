<form id="form-domicilio">
    @csrf
    @include('domicilio.form', [
        'domicilio' => $domicilio,
        'victimas' => $victimas,
        'agresores' => $agresores
    ])
    <div id="domicilio-table-container" class="mt-4"></div>
</form>
<hr>
