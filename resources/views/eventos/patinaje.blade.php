<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Evento de Patinaje sobre Hielo</title>

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
                src="{{ asset('img/patinaje.png') }}"
                class="card-img-top"
                alt="Evento de Patinaje sobre Hielo"
                style="height: 600px; object-fit: cover;"
            />

            <div class="card-body">
                <h1 class="card-title text-center mb-4">⛸️ Fiesta de Patinaje sobre Hielo</h1>

                <p class="card-text">
                    Disfruta de una divertida tarde de patinaje sobre hielo para todas las edades. ¡Ven con amigos y familia para deslizarte y pasar un momento inolvidable!
                </p>

                <ul class="list-group list-group-flush my-4">
                    <li class="list-group-item"><strong>📅 Fecha:</strong> Sábado 20 de diciembre de 2025</li>
                    <li class="list-group-item"><strong>🕗 Hora:</strong> 17:00</li>
                    <li class="list-group-item"><strong>📍 Lugar:</strong> Pista de Hielo Central</li>
                </ul>

                <div class="text-center mt-4">
                    <a href="#" class="btn btn-info btn-lg">🎟️ Reservar Entrada</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
