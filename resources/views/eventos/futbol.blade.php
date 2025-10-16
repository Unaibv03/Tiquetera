<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Evento de Fútbol</title>

    <!-- Ícono opcional -->
    <link rel="icon" href="{{ asset('img/iconoPagina.png') }}" type="image/x-icon">

    <!--Dependencias de bootstrap-->
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])

    <!--Indispensable para ver los datos de los eventos-->
    @vite('resources/js/cargarDatosEventos.js')
    <!--Indispensable para crear reseñas-->
    @vite('resources/js/crearResenias.js')
    <!--Indispensable para listar reseñas-->
    @vite('resources/js/listarResenias.js')
    <!--Añadimos csrf token para crear reseñas-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

                @include('components.lista')

                @auth

                    @include('components.formulario')

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
    
    </div><!--Fin de la carta-->
</div><!--Fin del contenedor que tiene la carta y navbar-->

    <!-- Reseñas -->
<div class="container my-5">
    <h3 class="mb-4">🗣️ Reseñas de los asistentes</h3>
    <div id="contenedorResenias" class="row gy-3">
        {{-- Aquí se insertarán las reseñas dinámicamente --}}
    </div>
</div>

</body>
</html>
