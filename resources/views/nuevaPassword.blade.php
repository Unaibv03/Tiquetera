<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cambiar Contraseña</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="mt-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Cambiar Contraseña</h4>
                    </div>
                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.change') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" name="email" id="email" class="form-control" required autofocus />
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Nueva Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" required />
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Actualizar Contraseña</button>
                        </form>

                        <!-- Botón Volver -->
                        <div class="d-grid mt-3">
                            <a href="{{ route('login') }}" class="btn btn-secondary w-100">Volver</a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
