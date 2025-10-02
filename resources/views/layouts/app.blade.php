<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi aplicación')</title>

    {{-- Cargar CSS y JS con Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <h1>Mi aplicación</h1>
        </div>
    </header>

    <main class="container my-4">
        @yield('content')
    </main>

    <footer class="p-3 bg-light text-center">
        <p>© 2025 - Todos los derechos reservados</p>
    </footer>
</body>
</html>
