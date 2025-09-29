// Función que se ejecuta al enviar el formulario
function mostrarSpinner() {
    document.getElementById('spinner').classList.remove('d-none'); // mostrar spinner
    document.getElementById('texto-boton').textContent = 'Cargando...'; // cambiar texto
    document.getElementById('botonSubmit').disabled = true; // desactivar botón
}

// Asociar la función al submit del formulario
const form = document.querySelector('form');
form.addEventListener('submit', mostrarSpinner);
