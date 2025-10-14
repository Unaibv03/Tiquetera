document.addEventListener('DOMContentLoaded', () => {
    const eventoCard = document.getElementById('evento-card');
    const eventoId = eventoCard?.dataset?.eventoId;

    if (!eventoId) {
        console.error('No se encontró el ID del evento en el atributo data-evento-id.');
        return;
    }

    // Llamar a la API para obtener los datos del evento
    fetch(`/api/listarEventosPorId/${eventoId}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al obtener el evento');
            }
            return response.json();
        })
        .then(evento => {
            // Rellenar los campos con los datos obtenidos

            let lugar = evento.lugar?.nombre.charAt(0).toUpperCase()+evento.lugar?.nombre.slice(1);

            document.getElementById('lugar').textContent = lugar ?? 'Lugar no disponible';
            document.getElementById('fechayHora').textContent = formatearFechaHora(evento.fechayHora);
            document.getElementById('categoria').textContent = evento.categoria?.nombre ?? 'Categoría no disponible';
            document.getElementById('precio').textContent = `$${evento.precio}`;
        })
        .catch(error => {
            console.error('Error al cargar el evento:', error);
        });
});

// Función para formatear la fecha y hora en español
function formatearFechaHora(fechaISO) {
    const fecha = new Date(fechaISO);
    return fecha.toLocaleString('es-ES', {
        dateStyle: 'long',
        timeStyle: 'short'
    });
}
