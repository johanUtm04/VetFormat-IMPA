<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Fuente y estilos -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="icon" href="{{ asset('images/logo_blanco2.png') }}" type="image/png"/>

  <!-- Título dinámico -->
  <title>@yield('title', 'Titulo por defecto')</title> {{-- Yield => Reserva un espacio para insertar el título dinámicamente --}}

  <!-- Carga de archivos JS y CSS de Vite -->
  @vite(['resources/css/appMain.css', 'resources/js/app.js'])

</head>

<body id="mainBody">

  <!-- Encabezado de navegación -->
  <header>
    <nav id="BarraNavegacion">
      <!-- Logo con tooltip -->
      <a href="{{ route('login') }}" class="tooltip">
        <img id="ImagenPrincipal" src="{{ asset('/images/logo_blanco.PNG') }}" alt="Logo">
        <span class="tooltiptext">Regresar A Login</span>
      </a>

      <!-- Título dinámico -->
      <div class="MessageHeader">
        <h1>@yield('MessageHeader')</h1>
      </div>

      <!-- Menú de usuario -->
      <div class="User_Box">
        <div class="user-menu">
          <img src="{{ asset('/images/usuario.png') }}" alt="Usuario" class="user-img" onclick="toggleMenu()">
          <div id="menuOpciones" class="menu-opciones">
            <a href="{{ route('logout') }}">Cerrar sesión</a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!-- Contenido principal -->
  <main>
    @yield('content')
  </main>

  <!-- Pie de página -->
  <footer class="footer">
    <p>© 2025 Centro de Atención Animal. Todos los derechos reservados.</p>
  </footer>

  <!-- Scripts -->
  <script>
    // Alternar visibilidad del menú de usuario
    function toggleMenu() {
      var menu = document.getElementById("menuOpciones");
      menu.style.display = (menu.style.display === "block") ? "none" : "block";
    }

    // Cierra el menú si se hace clic fuera de la imagen
    window.onclick = function(event) {
      if (!event.target.matches('.user-img')) {
        var dropdowns = document.getElementsByClassName("menu-opciones");
        for (var i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.style.display === "block") {
            openDropdown.style.display = "none";
          }
        }
      }
    };
  </script>

</body>
</html>
