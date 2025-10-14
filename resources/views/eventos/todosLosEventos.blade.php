<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Eventos Disponibles</title>

    <style>
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        
        body{
            
        }

    </style>

        <link rel="icon" href="{{ asset('img/iconoPagina.png') }}" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

@include('components.navbar')

<div class="container my-3">

    <h1 class="text-center mb-4 m-4">🎉 Eventos Disponibles</h1>

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
