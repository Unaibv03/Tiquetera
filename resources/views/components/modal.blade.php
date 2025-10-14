<!-- Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="reviewForm" class="modal-content"
          data-evento-id="{{ $evento->id }}"
          data-usuario-id="{{ auth()->user()->id ?? '' }}">
      <div class="modal-header">
        <h5 class="modal-title" id="reviewModalLabel">Deja tu reseña</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="reviewText" class="form-label">Comentario</label>
          <textarea id="reviewText" class="form-control" rows="4" required maxlength="1000"></textarea>
        </div>
        <div class="mb-3">
          <label for="ratingInput" class="form-label">Puntuación (1 a 5)</label>
          <input type="number" id="ratingInput" class="form-control" min="1" max="5" value="5" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Enviar reseña</button>
      </div>
    </form>
  </div>
</div>
