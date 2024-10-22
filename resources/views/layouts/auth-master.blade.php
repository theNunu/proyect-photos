<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplicacion de Login</title>
  <!-- Incluye el CSS de Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    rel="stylesheet">

  <style>
    body {
      width: 100%;
      height: 100vh;

      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #000;
      /* Fondo negro */
      color: #fff;
      /* Texto blanco */
    }

    .form-container {
      width: 400px;
    }
  </style>
</head>

<body>

  <main class="form-container">
    @yield('content')
  </main>

  <!-- Incluye el JS de Bootstrap y sus dependencias -->
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js">
  </script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js">
  </script>
</body>
</body>

</html>
