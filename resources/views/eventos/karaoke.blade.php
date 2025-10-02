<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Evento de Karaoke</title>

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
                src="{{ asset('img/karaoke.png') }}"
                class="card-img-top"
                alt="Evento de Karaoke"
                style="height: 600px; object-fit: cover;"
            />

            <div class="card-body">
                <h1 class="card-title text-center mb-4">🎤 Noche de Karaoke</h1>

                <p class="card-text">
                    ¡Despierta tu estrella interior y canta tus canciones favoritas en nuestra divertida noche de karaoke! Ideal para amigos y familias que quieren pasar un rato inolvidable.
                </p>

                <ul class="list-group list-group-flush my-4">
                    <li class="list-group-item"><strong>📅 Fecha:</strong> Viernes 28 de noviembre de 2025</li>
                    <li class="list-group-item"><strong>🕗 Hora:</strong> 21:00</li>
                    <li class="list-group-item"><strong>📍 Lugar:</strong> Bar Karaoke Central</li>
                </ul>

                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary btn-lg">🎟️ Reservar Lugar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
