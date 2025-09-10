@extends('layouts.appMain')

@section('title', 'Inicio Impa')

@section('MessageHeader')
Sistema de Reportes de Veterinaria          
@endsection

@section('content')
<div class="Inicio_box">
  <h3 style="text-align:center">
  ¡Bienvenid@ <span style="color: #433c6f; font-weight: bold;">{{ $usuario->nombre }}</span>!
  </h3>
  <div class="MensajeBienvenida_Box">
   <img src="{{ asset('images/mainCover.png') }}" alt="Bienvenida" style="
        width:100%; 
        max-width:800px; 
        margin: 0 auto; 
        display: block;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.5); 
        border-radius: 20px;">
  </div>

  <div class="BotonesAbajo_box"> {{-- Enlace a capture data --}}
    <a href="{{ route('reports.capture-data') }}" class="BotonAbajo" style="text-decoration:none; display:inline-block;">
      Capturar NUEVO Reporte 🐾
    </a>

    <a href="{{ route('formato.pdf.historial') }}" class="BotonAbajo" style="text-decoration:none; display:inline-block;">  {{-- Enlace historial --}}
       Ver Mi Historial 🐾
    </a>
  </div>
</div>
@endsection
