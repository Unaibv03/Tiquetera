async function ponerValores(){
    try{
        const response = await fetch("/api/listarEventos"); //Llamamos al back-end

        if(!response.ok){
            throw new Error("Error al intentar acceder a la API /api/listar eventos: "+response.status);
        }

        const futbol = await response.json();

        const contenedor = document.getElementById();//ME HE QUEDADO HACIENDO EL MÉTODO DEL FUTBOL EN JAVASCRIPT

    }catch(error){
        console.log("Error al cargar eventos: ", error);
    }
}