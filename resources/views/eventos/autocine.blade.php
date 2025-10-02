<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autocine - Evento Especial</title>

    <!-- Bootstrap 5 (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Ícono (opcional) -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>

    <div class="container my-5">
        <div class="card shadow-lg">
            <img src="{{ asset('img/autocine.png') }}" class="card-img-top" alt="Autocine" style="height: 400px; object-fit: cover;">
            
            <div class="card-body">
                <h1 class="card-title text-center mb-4">🎬 Noche de Autocine</h1>

                <p class="card-text">
                    Vive la experiencia del cine al aire libre desde la comodidad de tu auto. Este evento es ideal para familias, parejas y amantes del cine clásico y moderno.
                </p>

                <ul class="list-group list-group-flush my-4">
                    <li class="list-group-item"><strong>📅 Fecha:</strong> Viernes 20 de octubre de 2025</li>
                    <li class="list-group-item"><strong>🕗 Hora:</strong> 20:30</li>
                    <li class="list-group-item"><strong>📍 Lugar:</strong> Estacionamiento del Centro Cultural</li>
                </ul>

                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary btn-lg">🎟️ Reservar Entrada</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS (con Popper incluido) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
