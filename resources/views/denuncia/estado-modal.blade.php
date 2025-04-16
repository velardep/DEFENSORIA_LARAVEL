<div class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="form-estado-denuncia">
                @csrf
                <input type="hidden" name="denuncia_id" value="{{ $denuncia->id }}">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Estado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <select name="estado" class="form-select" required>
                        <option value="Recepcion" {{ $denuncia->estado == 'Recepcion' ? 'selected' : '' }}>Recepción</option>
                        <option value="En Proceso" {{ $denuncia->estado == 'En Proceso' ? 'selected' : '' }}>En Proceso</option>
                        <option value="Concluido" {{ $denuncia->estado == 'Concluido' ? 'selected' : '' }}>Concluido</option>
                        <option value="Archivado" {{ $denuncia->estado == 'Archivado' ? 'selected' : '' }}>Archivado</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
