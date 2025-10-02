<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Venta de Entradas')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('img/iconoPagina.png') }}" type="image/x-icon">
    <style>
        body{
            background-color: #CAFFE9;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
    </style>
</head>
<body>

    <main>
        @yield('content')
    </main>

    <footer>
        <small>&copy; {{ date('Y') }} - Mi Empresa</small>
    </footer>
</body>
</html>
