<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://www.w3schools.com/w3css/5/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="icon" href="{{ asset('images/logo_blanco2.png') }}" type="image/png"/>
<title>@yield('title', 'Titulo por defecto')</title>{{--Yield => Reserva un espacio--}}
@vite(['resources/css/appSelect-Format.css', 'resources/js/app.js']) {{--Carga Hojas Js y css--}}

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZnqnb3yDP8Y-MG0ZGsYFRkEQyLWU0hCk&libraries=places"></script>


</head>
<body  id="mainBody">

<header>
<nav id="BarraNavegacion">
<a href="{{ route('reports.inicio') }}" class="tooltip">
  <img id="ImagenPrincipal" src="{{ asset('/images/logo_blanco.PNG') }}" alt="Logo">
  <span class="tooltiptext">Regresar</span>
</a>
<div class="MessageHeader">
<h1>@yield('MessageHeader')</h1>
</div>
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


<main>
@yield('content')
</main>

<footer class="footer">
<p>© 2025 Centro de Atención Animal
. Todos los derechos reservados.</p>
</footer>


</body>
<script>
  function toggleMenu() {
  var menu = document.getElementById("menuOpciones");
  menu.style.display = (menu.style.display === "block") ? "none" : "block";
}

// Cierra el menú si haces clic fuera
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
}
</script>

<script>
  
</script>
</html>
