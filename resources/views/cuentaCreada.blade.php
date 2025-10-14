<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Cuenta Creada</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #8EDEC7;
    }

    .success-card {
      max-width: 500px;
      margin: 100px auto;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
      background-color: white;
    }

    .success-icon {
      font-size: 4rem;
      color: #28a745;
    }
  </style>
</head>
<body>

  <div class="container text-center">
    <div class="success-card">
      <div class="success-icon mb-3">
        ✅
      </div>
      <h2 class="mb-3">¡Cuenta creada con éxito!</h2>
      <p class="mb-4">Tu cuenta ha sido registrada correctamente.</p>

      <!-- Botones -->
      <div class="d-grid gap-2 col-8 mx-auto">
        <a href="{{ route('login') }}" class="btn btn-success">Iniciar sesión</a>
      </div>
    </div>
  </div>

</body>
</html>
