<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./boleto.png" type="image/x-icon">
    <title>Login</title>

    <style>
        body{
            background-color: #8EDEC7;
        }
    </style>

        @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>

        <img src="/img/tiquetera.png" class="d-block mx-auto" style="width: 400px;" id="imagenTiquetera" alt="tiquetera.png">

    <!--Login view-->

    <div class="container d-flex justify-content-center  ">
    <div class="card shadow p-4" id="cartaLogin" style="width: 24rem; border-radius: 1rem;">
    <h3 class="text-center mb-4">Iniciar sesión</h3>
    <form action="{{ route('iniciarSesion') }}" method="post">
        @csrf
      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Introduce tu email" required>
        <label style="display: none; color: red;">No has introducido el email</label>
      </div>
      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Introduce tu contraseña" required><label style="display: none; color: red;">No has introducido la contraseña</label>
      </div>
      
      <!-- Botón -->
      <button type="submit" id="botonSubmit" class="btn btn-success w-100">
  <span id="spinner" class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
  <span id="texto-boton">Entrar</span>
  </button>

    </form>

    <!-- Botón Entrar como invitado -->
    <div class="d-grid mt-2">
      <a href="{{ route('inicial') }}" class="btn btn-secondary">
        Entrar como invitado
      </a>
    </div>

    <p class="text-center mt-3 mb-0">
      ¿No tienes cuenta? <a href="crearCuentaLogin" style="color:green;">Regístrate</a>
    </p>
    <p class="text-center mt-2 mb-0">
      ¿Has olvidado tu contraseña? <a href="{{ route('nuevaPassword') }}" style="color:green;" >Recupérala</a>
    </p>

    </div>

  </div>

      <!--
    Para que se pueda usar javascript o incluso CSS hay que pasarlo por vite para que lo consiga interpretar, hay que tener el servidor vite arrancado
    -->

</body>
</html>