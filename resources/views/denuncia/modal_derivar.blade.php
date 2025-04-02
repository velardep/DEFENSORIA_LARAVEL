<div class="modal fade" id="modalDerivar" tabindex="-1" aria-labelledby="modalDerivarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form-derivar-denuncia">
        <div class="modal-header">
          <h5 class="modal-title" id="modalDerivarLabel">Derivar Denuncia</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
            <input type="hidden" id="idDenunciaDerivar" name="idDenuncia">
            <input type="hidden" id="numCasoOriginal" name="numCasoOriginal">

            <div class="mb-3">
              <label for="oficina" class="form-label">Nueva Oficina</label>
              <select id="oficina" name="oficina_id" class="form-select" required>
                <option value="">Seleccione oficina</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="user" class="form-label">Nuevo Abogado</label>
              <select id="user" name="user_id" class="form-select" required>
                <option value="">Seleccione abogado</option>
              </select>
            </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Confirmar Derivación</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
  </div>
</div>
