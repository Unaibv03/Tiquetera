<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Perfil de Usuario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">

        <!-- Tarjeta de perfil -->
        <div class="card shadow mb-4">
          <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Perfil de Usuario</h4>
          </div>
          <div class="card-body">
            <p><strong>👤 Nombre:</strong> Juan Pérez</p>
            <p><strong>📧 Email:</strong> juan.perez@example.com</p>
            <a href="/cambiar-contraseña" class="btn btn-warning">🔒 Cambiar contraseña</a>
          </div>
        </div>

        <!-- Entradas compradas -->
        <div class="card shadow">
          <div class="card-header bg-success text-white">
            <h5 class="mb-0">🎟️ Entradas Compradas</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <strong>Evento:</strong> Concierto Rock Fest<br>
                <strong>Fecha:</strong> 15 de Noviembre 2025<br>
                <strong>Cantidad:</strong> 2 entradas
              </li>
              <li class="list-group-item">
                <strong>Evento:</strong> Partido de Fútbol<br>
                <strong>Fecha:</strong> 20 de Octubre 2025<br>
                <strong>Cantidad:</strong> 1 entrada
              </li>
              <!-- Puedes repetir los <li> dinámicamente si usas Blade -->
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
