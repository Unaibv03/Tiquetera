<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Evento de Fútbol</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Ícono opcional -->
    <link rel="icon" href="{{ asset('img/iconoPagina.png') }}" type="image/x-icon">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @vite('resources/js/cargarDatosEventos.js')

</head>
<body>

<!--Navbar-->
<div class="container-fluid" id="contenedor">
    
@include('components.navbar')

    </div>

    <!--Carta-->
    <div class="container my-3">

        <div class="card  shadow-lg" id="evento-card" data-evento-id="3">
            <img 
                src="/img/futbol.png" 
                class="card-img-top" 
                alt="Concierto en vivo"
                style="height: 600px; object-fit: cover;"
            />

            <div class="card-body">
                <h1 class="card-title text-center mb-4">Partido de fútbol</h1>

                <p class="card-text">
                    Reúne a tus compañeros de equipo o únete a uno que ya esté en proceso de hacerse para echar un partido con otro equipo local de la zona y ver quién se lleva las recompensas de la victoria.
                </p>

                <ul class="list-group list-group-flush my-4">
                    <li class="list-group-item"><strong>📍 Lugar:</strong><span id="lugar">Cargando...</span></li>
                    <li class="list-group-item"><strong>📅 Fecha y hora:</strong> <span id="fechayHora">Cargando...</span></li>
                    <li class="list-group-item"><strong>📚 Categoria: </strong> <span id="categoria">Cargando...</span></li>
                    <li class="list-group-item"><strong>🎫 Precio:</strong> <span id="precio">Cargando...</span> </li>
                </ul>

                @auth
                <div class="mb-3">
                    <label for="cantidad" class="form-label">🎟️ Cantidad de entradas</label>
                <input 
                    type="number" 
                    name="cantidad" 
                    id="cantidad" 
                    class="form-control w-25" 
                    min="1" 
                    step="1" 
                    value="1"
                    required
                >
                </div>


                <div class="mt-4">
                    <a href="#" class="btn btn-success btn-lg">🎟️ Reservar Entrada</a>
                    <a href="#formularioResena" class="btn btn-warning ms-2" data-bs-toggle="modal" data-bs-target="#myModal">📝 Añadir reseña</a>
                    @endauth
                    <a href="/todosLosEventos" class="btn btn-outline-secondary ms-2">Volver a eventos</a>
                </div>
            </div>

            @guest
            <br>
             <div class="alert alert-warning text-center">
                ⚠️ Debes <a href="{{route('login')}}"> <strong><u> iniciar sesión</u></strong> </a> para comprar entradas o añadir reseñas.
            </div>
            @endguest


    <!-- The Modal -->
    <div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Añadir reseña</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

        </div>
    </div>
    </div>

    </div><!--Fin de la carta-->
</div><!--Fin del contenedor que tiene la carta y navbar-->

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
