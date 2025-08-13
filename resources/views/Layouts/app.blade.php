<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<title>@yield('title', 'Titulo por defecto')</title>{{--Yield => Reserva un espacio--}}
<link rel="icon" href="{{ asset('images/lorito.png') }}" type="image/png"/>

@vite(['resources/css/app.css', 'resources/js/app.js']) {{--Carga Hojas Js y css--}}

@stack('styles')
</head>

<body id="mainBoody">
  
<header>
<nav id="BarraNavegacion">
<img id="ImagenPrincipal" src="{{asset('/images/logo_blanco.PNG')}}" alt="Logo">
<div class="MessageHeader">
<h2>@yield('MessageHeader')</h2>
  <img src="{{ asset('images/perrito.png') }}" alt="Perrito" class="img-perrito-header">
</div>



</nav>

</header>
<main>
@yield('content')
</main>

@yield('scripts')


</body>


</html>