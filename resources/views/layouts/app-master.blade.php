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
      background-color: #000000;
      /* Fondo negro */
      color: #ffffff;
      /* Texto blanco */
    }

    .navbar-dark .navbar-nav .nav-link {
      color: rgba(255, 255, 255, 0.8);
      /* Color de los links en la navbar */
    }

    .navbar-dark .navbar-nav .nav-link:hover {
      color: #ffffff;
      /* Color al pasar el mouse por encima */
    }

    .form-control {
      background-color: #333333;
      /* Fondo oscuro para los campos de texto */
      color: #ffffff;
      /* Texto blanco */
    }

    .btn-outline-success {
      color: #ffffff;
      /* Texto blanco en el botón */
      border-color: #ffffff;
      /* Borde blanco */
    }

    .btn-outline-success:hover {
      background-color: #ffffff;
      /* Fondo blanco al hacer hover */
      color: #000000;
      /* Texto negro en hover */
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark"
    style="background-color: #000000; border-bottom: 1px solid #ffffff;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"
              href="{{ route('home.index') }}">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('images.create') }}">Crear
              Imagen</a> <!-- Agrega el enlace -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('images.index') }}">mis imagenes</a> <!-- Agrega el enlace -->
          </li>
                     <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}">mis categorias</a> <!-- Agrega el enlace -->
          </li>
                              {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.create') }}">Crear categorias</a> <!-- Agrega el enlace -->
          </li> --}}

                               {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('tags.index') }}">my etiquetas</a> <!-- Agrega el enlace -->
          </li> --}}
                              <li class="nav-item">
            <a class="nav-link" href="{{ route('tags.index') }}">Mis etiquetas</a> <!-- Agrega el enlace -->
          </li>  
          {{-- @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{auth()->user()->name ?? auth()->user()->username}}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a>
                </li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else
                    here</a></li>
              </ul>
            </li>
          @endauth --}}

          {{-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li> --}}
        </ul>
        <!-- Ajusta el buscador y el botón de búsqueda -->
        <form class="d-flex ms-auto me-3">
          <input class="form-control me-2" type="search" placeholder="Search"
            aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @auth <!-- MENU DE DESPLIEGUE-->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  {{ auth()->user()->name ?? auth()->user()->username }}
                </a>
                <ul class="dropdown-menu dropdown-menu-start"
                  style="background-color: #000000;">
                  <li><a class="dropdown-item text-white"
                      href="#">Action</a></li>
                  <li><a class="dropdown-item text-white" href="#">Another
                      action</a>
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item text-white" href="/logout">cerrar
                      sesión</a></li>
                </ul>
              </li>
            @endauth
        </form>
      </div>
    </div>
  </nav>

  <main class="container">
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

</html>
