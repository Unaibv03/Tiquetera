<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Evento de Recreativos</title>

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
                src="{{ asset('img/recreativos.png') }}"
                class="card-img-top"
                alt="Evento de Recreativos"
                style="height: 400px; object-fit: cover;"
            />

            <div class="card-body">
                <h1 class="card-title text-center mb-4">🎮 Noche de Juegos Recreativos</h1>

                <p class="card-text">
                    Ven a disfrutar de una noche llena de diversión con los mejores juegos recreativos y arcade. Ideal para todas las edades y amantes de la diversión retro.
                </p>

                <ul class="list-group list-group-flush my-4">
                    <li class="list-group-item"><strong>📅 Fecha:</strong> Viernes 15 de noviembre de 2025</li>
                    <li class="list-group-item"><strong>🕗 Hora:</strong> 19:00</li>
                    <li class="list-group-item"><strong>📍 Lugar:</strong> Centro de Juegos Recreativos</li>
                </ul>

                <div class="text-center mt-4">
                    <a href="#" class="btn btn-success btn-lg">🎟️ Reservar Lugar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
