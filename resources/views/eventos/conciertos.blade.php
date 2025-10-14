<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concierto en Vivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="{{ asset('img/iconoPagina.png') }}" type="image/x-icon">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    @vite('resources/js/cargarDatosEventos.js')
</head>
<body>
    @include('components.navbar')
    <div class="container my-3">
        <div class="card shadow-lg" id="evento-card" data-evento-id="13">
            <img 
                src="/img/concierto.png" 
                class="card-img-top" 
                alt="Concierto en vivo"
                style="height: 600px; object-fit: cover;"
            />

            <div class="card-body">
                <h1 class="card-title text-center mb-4">Conciertos</h1>

                <p class="card-text">
                    Disfruta de la música en vivo como nunca antes. Vibrantes sonidos, artistas inolvidables y una atmósfera llena de energía te esperan en nuestros conciertos. ¡Ven a cantar, bailar y vivir una experiencia única!
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
                    <a href="#formularioResena" class="btn btn-warning ms-2">📝 Añadir reseña</a>
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
        </div>
    </div>


    <!-- Bootstrap JS (opcional para componentes interactivos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
