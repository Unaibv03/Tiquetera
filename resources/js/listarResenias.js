document.addEventListener('DOMContentLoaded', function () {
    const contenedorResenias = document.getElementById('contenedorResenias');
    const reviewForm = document.getElementById('reviewForm');

    if (!contenedorResenias || !reviewForm) return;

    const eventoId = reviewForm.dataset.eventoId;

    // ✅ Cargar reseñas desde la base de datos
    fetch('/api/listarResenias')
        .then(response => response.json())
        .then(resenas => {
            const resenasFiltradas = resenas.filter(r => r.evento_id == eventoId);
            resenasFiltradas.forEach(agregarTarjetaResena);
        })
        .catch(err => {
            console.error('Error al cargar reseñas:', err);
        });

    function agregarTarjetaResena(resena) {
        if (!contenedorResenias) return;

        const card = document.createElement('div');
        card.className = 'col-12 col-md-6 col-lg-4';

        card.innerHTML = `
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">${resena.usuario?.nombre ?? 'Usuario #' + resena.usuario_id}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Puntuación: ${resena.puntuacion} / 5 ⭐</h6>
                    <p class="card-text">${resena.comentario}</p>
                    <small class="text-muted">${resena.created_at ? new Date(resena.created_at).toLocaleString() : 'Recientemente'}</small>
                </div>
            </div>
        `;

        contenedorResenias.appendChild(card);
    }
});
