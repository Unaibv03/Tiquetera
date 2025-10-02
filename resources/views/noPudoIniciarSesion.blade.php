<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Error de inicio de sesión</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #ffe6e6;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .error-container {
      background-color: #f8d7da;
      color: #721c24;
      border: 1px solid #f5c6cb;
      padding: 20px 30px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(219, 0, 0, 0.3);
      text-align: center;
      max-width: 400px;
    }
    .error-container h1 {
      margin-bottom: 15px;
    }
    .error-container a {
      display: inline-block;
      margin-top: 15px;
      text-decoration: none;
      color: #721c24;
      font-weight: bold;
      border: 1px solid #721c24;
      padding: 8px 16px;
      border-radius: 4px;
      transition: background-color 0.3s, color 0.3s;
    }
    .error-container a:hover {
      background-color: #721c24;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="error-container">
    <h1>Error de inicio de sesión</h1>
    <p>El usuario o la contraseña no coinciden. Por favor, inténtalo de nuevo.</p>
    <a href="{{ route('loginInicial') }}">Volver al formulario de inicio de sesión</a>
  </div>
</body>
</html>
