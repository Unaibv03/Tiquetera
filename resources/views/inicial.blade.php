<!DOCTYPE html>
<html lang="en">
<head>
  <!--Importaciones de la página-->
  @vite(['resources/js/app.js', 'resources/css/app.css'])
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Inicio</title>

  <!--Icono de la página-->
  <link rel="icon" href="{{ asset('img/iconoPagina.png') }}" type="image/x-icon">


</head>
<body>

  <div class="container-fluid" id="contenedor">
  <nav class="navbar navbar-expand-sm bg-light">

    <div class="container">
      <!-- Links -->
      <ul class="navbar-nav">
        
          <li class="nav-item">
            <a class="nav-link" href="{{ route('todosLosEventos') }}">Eventos</a>
        </li>
        @auth
          <li class="nav-item">
              <a href="{{ route('carrito') }}" class="nav-link">Ir al carrito</a>
          </li>
          @endauth
        </ul>


        <!-- Contenido del navbar -->
            <div class=" justify-content-end" id="navbarRight">
                @auth
                    <ul class="navbar-nav mt-1">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('perfil') }}">Ver perfil</a>
                    </li>
                    <li class="nav-item">
                      <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" id="botonSubmit">Cerrar sesion</button>
                      </form>
                    </li>
                    <li>
                        <img src="{{asset('/img/iconoPerfil.png')}}" alt="" id="iconoPerfil">
                    </li>
                    
                </ul>
                @endauth

                @guest
                    <!-- Botón derecho -->
                    
                    <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Iniciar sesion</a>
                    </li>
                </ul>
                @endguest
            </div>

      </div>
    </nav>
  </div>

    <img src="/img/tiquetera.png" class="d-block mx-auto" style="width: 600px;" id="imagenTiquetera" alt="tiquetera.png">

  <div class="container mt-4 mb-5">
  <div class="card p-4 shadow-sm" style="background-color:#67DBD0; border-radius:15px">
    <p class="mb-3 fs-4">
      <strong>Venta de entradas para eventos por Madrid</strong> <br> Con una gran variedad de categorías para elegir, para todas las edades, a los que poder acceder con familia, amigos o pareja, en los lugares más carismáticos de la ciudad.
    </p>
    <h5 class="mb-2">Eventos:</h5>
    <ul class="list-group list-group-flush" style="background-color: #67DBD0; border-top: 1px solid black; padding: 10px; margin-bottom: 0;">
      <li class="list-group-item fs-5" id="li"> <a href="{{ route('futbol')}}">PARTIDOS DE FUTBOL EN CAMPO LIBRE</a> </li>
      <li class="list-group-item fs-5" id="li"><a href="{{ route('bailes de salon')}}">BAILES DE SALON</a></li>
      <li class="list-group-item fs-5" id="li"><a href="{{ route('karaoke')}}">KARAOKE</a></li>
      <li class="list-group-item fs-5" id="li"><a href="{{ route('patinaje')}}">PATINAJE SOBRE HIELO</a></li>
      <li class="list-group-item fs-5" id="li"><a href="{{ route('autocine')}}">AUTOCINE</a></li>
      <li class="list-group-item fs-5" id="li"><a href="{{ route('bolos')}}">PARTIDAS DE BOLOS</a></li>
      <li class="list-group-item fs-5" id="li"><a href="{{ route('recreativos')}}">RECREATIVOS</a></li>
      <li class="list-group-item fs-5" id="li"><a href="{{ route('tour guiado')}}">TOURS GUIADOS</a></li>
      <li class="list-group-item fs-5" id="li"><a href="{{ route('museos')}}">MUSEOS</a></li>
      <li class="list-group-item fs-5" id="li"><a href="{{ route('buffets')}}">BUFFETS</a></li>
      <li class="list-group-item fs-5" id="li"><a href="{{ route('concierto')}}">CONCIERTOS</a></li>
    </ul>
  </div>
</div>


    

</body>
</html>
