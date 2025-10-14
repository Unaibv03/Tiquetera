<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Evento Buffet Exclusivo</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Ícono opcional -->
    <link rel="icon" href="{{ asset('img/iconoPagina.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css'])
    @vite('resources/js/cargarDatosEventos.js')

    <!--Indispensable para crear reseñas-->
    @vite('resources/js/crearResenias.js')
    <!--Indispensable para listar reseñas-->
    @vite('resources/js/listarResenias.js')
    <!--Añadimos csrf token para crear reseñas-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@include('components.navbar')

    <div class="container my-3">
        <div class="card shadow-lg" id="evento-card" data-evento-id="6">
            <img 
                src="/img/buffets.png" 
                class="card-img-top" 
                alt="Concierto en vivo"
                style="height: 600px; object-fit: cover;"
            />

            <div class="card-body">
                <h1 class="card-title text-center mb-4">Variedad de buffets</h1>

                <p class="card-text">
                    Un evento para los amantes del buen comer. Disfruta de una experiencia gastronómica con una gran variedad de sabores en nuestro exclusivo buffet. Platos para todos los gustos, ambiente acogedor y una ocasión perfecta para compartir.
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
                    <a href="#formularioResena" class="btn btn-warning ms-2" data-bs-toggle="modal" data-bs-target="#reviewModal">📝 Añadir reseña</a>
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

            @include('components.modal')

        </div>
    </div>


       <!-- Reseñas -->
    <div class="container my-5">
        <h3 class="mb-4">🗣️ Reseñas de los asistentes</h3>
        <div id="contenedorResenias" class="row gy-3">
            {{-- Aquí se insertarán las reseñas dinámicamente --}}
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
