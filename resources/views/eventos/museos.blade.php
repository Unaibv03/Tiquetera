<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Visita a Museos</title>

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
                src="{{ asset('img/museos.png') }}"
                class="card-img-top"
                alt="Evento de Museos"
                style="height: 400px; object-fit: cover;"
            />

            <div class="card-body">
                <h1 class="card-title text-center mb-4">🏛️ Visita Guiada a Museos</h1>

                <p class="card-text">
                    Acompáñanos en una visita guiada por los museos más emblemáticos de la ciudad. Aprende sobre historia, arte y cultura en una experiencia enriquecedora para toda la familia.
                </p>

                <ul class="list-group list-group-flush my-4">
                    <li class="list-group-item"><strong>📅 Fecha:</strong> Sábado 22 de noviembre de 2025</li>
                    <li class="list-group-item"><strong>🕗 Hora:</strong> 10:00</li>
                    <li class="list-group-item"><strong>📍 Punto de encuentro:</strong> Entrada principal del Museo Central</li>
                </ul>

                <div class="text-center mt-4">
                    <a href="#" class="btn btn-info btn-lg">🎟️ Reservar Plaza</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
