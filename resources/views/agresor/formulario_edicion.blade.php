<form id="form-editar-agresor">
    @csrf
    @include('agresor.form', ['agresor' => $agresor])
    <div class="text-end mt-3">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>

