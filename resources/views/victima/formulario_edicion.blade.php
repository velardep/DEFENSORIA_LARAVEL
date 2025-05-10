<form id="form-editar-victima">
    @csrf
    @include('victima.form', ['victima' => $victima, 'desdeResumen' => true])
    <div class="text-end mt-3">
        <button type="submit" class="btn btn-success">Guardar</button>
    </div>
</form>
