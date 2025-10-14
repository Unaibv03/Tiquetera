<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body{
            background-color: #8EDEC7;
        }
        
    </style>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>

    <!--#43E07F-->

    <!--Login view-->

    <div class="container mt-5 d-flex justify-content-center pt-5 mb-5">
    <div class="card shadow p-4 mt-5" id="cartaLogin" style="width: 22rem; border-radius: 1rem;">
    <h3 class="text-center mb-4">Crear cuenta</h3>
    <form action="{{ route('loginCuentaCreada') }}" method="post">
      @csrf
      <!--Nombre-->
      <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce tu nombre" required>
      </div>
      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Introduce tu email" required>
      </div>
      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Introduce tu contraseña" required>
      </div>
      
      <!--Select-->
      <div class="mb-2">
        <select class="form-select" id="rol_id" name="rol_id" required>
      <option value="" disabled selected>Selecciona un rol</option>
      <option value="1">Admin</option>
      <option value="2">Logeado</option>
      </select>

      </div>
      <!-- Botón -->
      <button type="submit" id="botonSubmit" class="btn btn-success w-100">Entrar</button>
    </form>
    
  </div>

</body>
</html>