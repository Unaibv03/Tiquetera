<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./boleto.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Login</title>

    <style>
        body{
            background-color: #8EDEC7;
        }
    </style>

</head>
<body>

    <!--#43E07F-->

    <!--Login view-->

    <div class="container mt-5 d-flex justify-content-center pt-5 mb-5">
    <div class="card shadow p-4 mt-5" id="cartaLogin" style="width: 22rem; border-radius: 1rem;">
    <h3 class="text-center mb-4">Iniciar sesión</h3>
    <form>
      
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
      
      
      <!-- Checkbox -->
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Recuérdame</label>
      </div>
      <!-- Botón -->
      <button type="submit" id="botonSubmit" class="btn btn-primary w-100">
  <span id="spinner" class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true"></span>
  <span id="texto-boton">Entrar</span>
  </button>

    </form>
    <p class="text-center mt-3 mb-0">
      ¿No tienes cuenta? <a href="crearCuentaLogin">Regístrate</a>
    </p>
    </div>

  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

      <!--
    Para que se pueda usar javascript o incluso CSS hay que pasarlo por vite para que lo consiga interpretar, hay que tener el servidor vite arrancado
    -->
    @vite('resources/js/funciones.js') 

</body>
</html>