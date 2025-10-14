<nav class="navbar navbar-expand-lg navbar-dark bg-light">
        <div class="container">
            <!-- Nombre de la página -->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="{{ route('inicial') }}">Tiquetera</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('eventos') }}">Eventos</a>
                </li>
            </ul>

            <!-- Contenido del navbar -->
            <div class=" justify-content-end" id="navbarRight">
                @auth
          
                    <ul class="navbar-nav mt-1">
                        
                        <li class="nav-item">
                        <a href="{{ route('carrito') }}" class="nav-link">Ir al carrito</a>
                        </li>
                        
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
