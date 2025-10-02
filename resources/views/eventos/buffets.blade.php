<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Evento Buffet Exclusivo</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Ícono opcional -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon" />
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <img
                        src="{{ asset('img/buffets.png') }}"
                        class="card-img-top"
                        alt="Buffet Exclusivo"
                        style="height: 400px; object-fit: cover;"
                    />
                    <div class="card-body">
                        <h2 class="card-title text-center mb-3">🍴 Buffet Exclusivo</h2>
                        <p class="card-text">
                            Disfruta de una experiencia culinaria única con una selección gourmet de platillos internacionales, postres y bebidas especiales en nuestro buffet exclusivo.
                        </p>

                        <dl class="row my-4">
                            <dt class="col-sm-4">📅 Fecha:</dt>
                            <dd class="col-sm-8">Domingo 12 de diciembre de 2025</dd>

                            <dt class="col-sm-4">🕒 Hora:</dt>
                            <dd class="col-sm-8">12:30 PM - 16:00 PM</dd>

                            <dt class="col-sm-4">📍 Lugar:</dt>
                            <dd class="col-sm-8">Hotel Gran Gourmet, Salón Principal</dd>
                        </dl>

                        <div class="text-center">
                            <a href="#" class="btn btn-outline-danger btn-lg">🎫 Reservar Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
