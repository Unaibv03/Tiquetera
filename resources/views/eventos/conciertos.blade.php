<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concierto en Vivo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>

    <div class="container my-5">
        <div class="card shadow-lg">
            <img 
                src="/img/concierto.png" 
                class="card-img-top" 
                alt="Concierto en vivo"
                style="height: 600px; object-fit: cover;"
            />

            <div class="card-body">
                <h1 class="card-title text-center mb-4">🎤 Concierto en Vivo: Rock Fest 2025</h1>

                <p class="card-text">
                    ¡Prepárate para una noche inolvidable llena de música, luces y energía! 
                    Únete a nosotros en el <strong>Rock Fest 2025</strong>, donde se presentarán 
                    bandas nacionales e internacionales en un espectáculo épico.
                </p>

                <ul class="list-group list-group-flush my-4">
                    <li class="list-group-item"><strong>📍 Lugar:</strong> Estadio Central, Madrid</li>
                    <li class="list-group-item"><strong>📅 Fecha:</strong> Sábado, 15 de noviembre de 2025</li>
                    <li class="list-group-item"><strong>🕗 Hora:</strong> 20:00 h</li>
                    <li class="list-group-item"><strong>🎫 Entradas:</strong> Desde 25 € - <a href="#">Comprar aquí</a></li>
                </ul>

                <div class="text-center mt-4">
                    <a href="#" class="btn btn-primary btn-lg">🎟️ Reservar Entrada</a>
                    <a href="/todosLosEventos" class="btn btn-outline-secondary ms-2">Volver a eventos</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap JS (opcional para componentes interactivos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
