document.addEventListener('DOMContentLoaded', function () {
    const reviewForm = document.getElementById('reviewForm');

    if (!reviewForm) return; // ⚠️ Evita errores si no estás en la vista del evento

    reviewForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const comentario = document.getElementById('reviewText').value;
        const puntuacion = document.getElementById('ratingInput').value;
        const usuarioId = reviewForm.dataset.usuarioId;
        const eventoId = reviewForm.dataset.eventoId;

        console.log({
            comentario,
            puntuacion,
            usuario_id: usuarioId,
            evento_id: eventoId
        });


        fetch('/api/crearResenia', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                comentario,
                puntuacion,
                usuario_id: usuarioId,
                evento_id: eventoId
            })
        })
        .then(res => res.json())
        .then(data => {
            if (data && data.comentario) {
                agregarTarjetaResena(data);
                reviewForm.reset();
                document.querySelector('#reviewModal .btn-close').click();
            } else {
                alert(data.Respuesta || 'Ocurrió un error al guardar la reseña.');
            }
        })
        .catch(error => {
            console.error(error);
            alert('Error al enviar reseña.');
        });
    });

    function agregarTarjetaResena(resena) {
        const container = document.getElementById('contenedorResenias');
    if (!container) {
        console.error("❌ No se encontró el contenedor de reseñas (id='contenedorResenias')");
        return;
    }

    const card = document.createElement('div');
    card.className = 'card mb-3';
    card.innerHTML = `
        <div class="card-body">
            <h5 class="card-title">${resena.usuario?.name ?? 'Usuario #' + resena.usuario_id}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Puntuación: ${resena.puntuacion} / 5</h6>
            <p class="card-text">${resena.comentario}</p>
            <small class="text-muted">Recientemente</small>
        </div>
    `;

    container.prepend(card);
    }
});
