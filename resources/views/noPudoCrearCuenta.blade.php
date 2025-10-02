<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login fallido</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS (v5 CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8d7da;
        }
        .card {
            max-width: 500px;
            margin: 100px auto;
            border: none;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card text-center">
        <div class="card-body">
            <h3 class="card-title text-danger">No se pudo iniciar sesión</h3>
            <p class="card-text">
                El correo que ingresaste está registrado en nuestra base de datos.
            </p>
            <a href="{{ route('crearCuenta') }}" class="btn btn-danger">Volver a intentar</a>
        </div>
    </div>
</div>

</body>
</html>
