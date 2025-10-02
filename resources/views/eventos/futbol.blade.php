<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Evento de Fútbol</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Ícono opcional -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div class="container my-5">
        <div class="card shadow-lg">
            <img
                src="{{ asset('img/futbol.png') }}"
                class="card-img-top"
                alt="Evento de Fútbol"
                style="height: 400px; object-fit: cover;"
            />

            <div class="card-body">
                <h1 class="card-title text-center mb-4">⚽ Gran Partido de Fútbol</h1>

                <p class="card-text">
                    Ven a disfrutar de un emocionante partido entre los mejores equipos locales. Vive la pasión del fútbol en vivo con tu familia y amigos.
                </p>

                <ul class="list-group list-group-flush my-4">
                    <li class="list-group-item"><strong>📅 Fecha:</strong><span id="fechaFutbol"> </span></li>
                    <li class="list-group-item"><strong>🕗 Hora:</strong> 18:00</li>
                    <li class="list-group-item"><strong>📍 Lugar:</strong> Estadio Municipal</li>
                </ul>

                <div class="text-center mt-4">
                    <a href="#" class="btn btn-success btn-lg">🎟️ Comprar Entradas</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
