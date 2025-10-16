<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Perfil de Usuario</title>
  <!-- Ícono opcional -->
    <link rel="icon" href="{{ asset('img/iconoPagina.png') }}" type="image/x-icon">
  @vite(['resources/css/app.css'])

</head>
<body class="mt-3">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

        @include('components.navbar')

        <!-- Tarjeta de perfil -->
        <div class="card shadow mb-4">
          <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Perfil de Usuario</h4>
          </div>
          <div class="card-body">
            <p><strong>👤 Nombre:</strong>{{auth()->user()->nombre}}</p>
            <p><strong>📧 Email:</strong>{{auth()->user()->email}}</p>
            <a href="{{route('cambiarPassword')}}" class="btn btn-warning">🔒 Cambiar contraseña</a>
          </div>
        </div>

        <!-- Entradas compradas -->
        <div class="card shadow">
          <div class="card-header bg-success text-white">
            <h5 class="mb-0">🎟️ Entradas Compradas</h5>
          </div>
          <div class="card-body">
            @if($entradas->isEmpty())
              <p class="text-muted">No has comprado entradas aún.</p>
            @else
              <ul class="list-group list-group-flush">
                @foreach($entradas as $entrada)
                  <li class="list-group-item">
                    <strong>Evento:</strong> {{ $entrada->evento->nombre ?? 'Evento eliminado' }}<br>
                    <strong>Fecha:</strong> {{ \Carbon\Carbon::parse($entrada->fechaCompra)->format('d \d\e F Y') }}<br>
                    <strong>Cantidad:</strong> {{ $entrada->cantidad }} {{ Str::plural('entrada', $entrada->cantidad) }}
                  </li>
                @endforeach
              </ul>
            @endif
          </div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
