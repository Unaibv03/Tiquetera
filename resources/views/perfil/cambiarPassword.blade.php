<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambiar Contraseña</title>
    @vite(['resources/css/app.css'])
</head>
<body class="mt-3">
@include('components.navbar')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="card shadow">
                <div class="card-header bg-warning text-white">
                    <h4 class="mb-0">Cambiar Contraseña</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('cambiarContrasenia.update') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="clave_antigua" class="form-label">Contraseña Actual</label>
                            <input type="password" class="form-control" id="clave_antigua" name="clave_antigua" required>
                        </div>

                        <div class="mb-3">
                            <label for="clave_nueva" class="form-label">Nueva Contraseña</label>
                            <input type="password" class="form-control" id="clave_nueva" name="clave_nueva" required>
                        </div>

                        <div class="mb-3">
                            <label for="clave_nueva_confirmation" class="form-label">Confirmar Nueva Contraseña</label>
                            <input type="password" class="form-control" id="clave_nueva_confirmation" name="clave_nueva_confirmation" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Actualizar Contraseña</button>
                        <a href="{{ route('perfil') }}" class="btn btn-secondary">Volver</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
