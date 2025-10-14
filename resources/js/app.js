import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import './bootstrap';


// Importa tu CSS personalizado para que tenga prioridad
import '../css/app.css';

console.log('Bootstrap cargado correctamente');


//Javascript
async function cargarEventos(){

    try{
        const response = await fetch("/api/listarEventos"); //llamada al backend
        
        if(!response.ok){
            throw new Error("Error al intentar acceder a la API /api/listarEventos: "+response.status);
        }

        const eventos = await response.json();

        const contenedor = document.getElementById('eventos');
        contenedor.innerHTML = "";

        eventos.forEach(evento => {

            let nombreMayúscula = evento.nombre.charAt(0).toUpperCase()+evento.nombre.slice(1);
            //Poner en mayúscula la primera letra
            const div = document.createElement("div");
    div.classList.add("col-12", "col-sm-6", "col-md-4", "col-lg-3");

    div.innerHTML = `
        <div class="card shadow h-100">
            <img src="${window.baseUrl}/${evento.nombre}.png" class="card-img-top" alt="${evento.nombre}" />
                <div class="card-body">
                <h5 class="card-title">${nombreMayúscula}</h5>
                <p class="card-text">Fecha y hora: <br>${evento.fechayHora}</p>
                <a href="/${evento.nombre}" class="btn btn-success">Ver más</a>
            </div>
        </div>
        `;

            contenedor.appendChild(div);
        });
        

    }catch(error){
        console.error("Error al cargar eventos:", error);
    }

}

cargarEventos();