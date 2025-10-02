<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tours Guiados</title>

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
                src="{{ asset('img/tour guiado.png') }}"
                class="card-img-top"
                alt="Tours Guiados"
                style="height: 600px; object-fit: cover;"
            />

            <div class="card-body">
                <h1 class="card-title text-center mb-4">🚶‍♂️ Tours Guiados por la Ciudad</h1>

                <p class="card-text">
                    Descubre los secretos y la historia de nuestra ciudad con nuestros tours guiados. Perfecto para turistas y locales que quieren conocer más a fondo.
                </p>

                <ul class="list-group list-group-flush my-4">
                    <li class="list-group-item"><strong>📅 Fecha:</strong> Todos los sábados de noviembre 2025</li>
                    <li class="list-group-item"><strong>🕗 Hora:</strong> 10:00 y 15:00</li>
                    <li class="list-group-item"><strong>📍 Punto de encuentro:</strong> Plaza Central</li>
                </ul>

                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary btn-lg">🎟️ Reservar Tour</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
