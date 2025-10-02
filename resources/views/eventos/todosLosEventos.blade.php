<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Eventos Disponibles</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        

    </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    
<div class="container my-5">

    <h1 class="text-center mb-4 m-5">🎉 Eventos Disponibles</h1>

    <div class="row g-4" id="eventos">
        <p id="loading-message" class="text-center text-muted my-4">
            <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
            Cargando eventos...
        </p>

    </div>

</div>

        <script>
            window.baseUrl = "{{asset('img')}}";
        </script>

</body>
</html>
