{{-- Heredamos la plantilla base llamada 'PlantillaFormatos' para reutilizar su estructura --}}
@extends('layouts.PlantillaFormatos')

{{-- Definimos el título que se mostrará en la pestaña del navegador --}}
@section('title', 'Bitacora Vehicular')

{{-- Sección personalizada para mostrar un mensaje o encabezado superior --}}
@section('MessageHeader')
Bitacora Vehicular
@endsection

{{-- Sección principal de contenido --}}
@section('content')

{{-- Contenedor principal que da margen y fondo al reporte --}}
<div class="ContornoReporte">

  {{-- Encabezado que contiene logo, título y datos administrativos --}}
  <div class="encabezado">
    {{-- Imagen del logo que se carga desde la carpeta 'public/images' usando la función asset() --}}
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    
    {{-- Título de la bitácora --}}
    <h2 class="tituloformato nombre_formato">Bitacora Vehicular</h2>

    {{-- Contenedor de etiquetas administrativas: formato, número y fecha --}}
    <div class="encabezado3">
      <label>Forma 003</label> <br>
      <label>Reporte no______</label> <br>
      <label>Fecha___________</label>
    </div>
  </div>

    {{-- FORMULARIO --}}
  <form method="POST" action="{{ route('guardar.formato') }}">
    <div class="tabla">
    
    {{-- Formulario que enviará los datos a 'guardar_datos.php' usando método POST --}}
    <form action="guardar_datos.php" method="POST">

      {{-- Definimos tabla con cabecera --}}
      <table id="miTabla">
        <thead>
          <tr>
            {{-- Definimos los encabezados de cada columna --}}
            <th>Hora</th>
            <th>Colonia/Sector</th>
            <th>Km Inicio</th>
            <th>Km Final</th>
            <th>Autorización de control de gasolina y mantenimiento</th>
            <th>Observaciones</th>
          </tr>
        </thead>

        <tbody>
          {{-- Bucle for de Blade que repite la misma fila de inputs 9 veces --}}
          @for($i = 0; $i <7; $i++)
          <tr>
            {{-- Input para capturar la hora --}}
            <td><input type="time" name="hora"></td>
            
            {{-- Área de texto para escribir colonia o sector --}}
            <td><textarea name="colonia"></textarea></td>
            
            {{-- Input numérico para kilometraje inicial --}}
            <td><input type="number" name="kmInicio"></td>
            
            {{-- Input numérico para kilometraje final --}}
            <td><input type="number" name="kmFinal"></td>
            
            {{-- Input de texto para captura de autorización de gasolina o mantenimiento --}}
            <td><input type="text" name="gasolina"></td>
            
            {{-- Área de texto para observaciones adicionales --}}
            <td><textarea name="observaciones"></textarea></td>
          </tr>
          @endfor
        </tbody>
      </table>

      {{-- Sección para firma del conductor responsable --}}
      <div class="firma">
        {{-- Línea horizontal simulando espacio para firma --}}
        <div class="lineaFirma"></div>
        <label>Conductor Responsable <br> (Nombre y Firma)</label>
      </div>

    </form>
  </div>

  {{-- Estilos CSS incrustados en la misma plantilla --}}
  <style>
    body {
      --print-spacer-height: 10px;
    }


    /* Contenedor del reporte con fondo blanco y padding */
    .ContornoReporte {
      text-align: left;
      background-color: rgb(255, 255, 255);
      max-width: 100%;
      padding: 20px;
      box-sizing: border-box;
    }

    /* Estilo para el encabezado (logo, título y datos administrativos) */
    .encabezado {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: rgb(255, 255, 255);
      padding: 10px;
      box-sizing: border-box;
    }

  .logo {
    max-width: 15%;
    height: auto;
  }


.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
  /* arriba, derecha, abajo, izquierda */
}

    /* Estilo para la sección de datos administrativos */
    .encabezado3 {
      text-align: left;
      padding: 5px;
    }

    /* Estilo para las etiquetas de encabezado */
    .encabezado3 label{
      font-weight: bold;
    }

    /* Margen superior e inferior para la tabla */
    .tabla {
      margin: 20px 0;
    }

    /* Estilo base para la tabla */
    table {
      border-collapse: collapse;
      width: 100%;
    }

    /* Estilo para celdas y encabezados */
    th, td {
      border: 1.5px solid black;
      padding: 6px;
      text-align: center;
    }

    /* Color de fondo para los encabezados */
    th {
      background-color: #bd12c6;
    }

    /* Estilo para los inputs y textarea dentro de la tabla */
    input[type="text"],
    input[type="number"],
    textarea {
      width: 70%;
      box-sizing: border-box;
      padding: 5px;
      font-size: 10px;
      border: none;
    }

    /* Evita que se pueda cambiar de tamaño el textarea */
    textarea {
      resize: none;
      overflow: hidden;
      height: 50px;
    }

    /* Contenedor de la firma centrado */
    .firma {
      width: 50%;
      margin: 30px auto;
      text-align: center;
    }

    /* Línea horizontal simulando firma */
    .lineaFirma {
      border-bottom: 1px solid black;
      height: 20px;
      margin-bottom: 8px;
    }

    /* Botón de imprimir con efecto degradado, borde redondeado y sombreado */
    .btn-imprimir {
      background: linear-gradient(135deg, #7F00FF, #E100FF);
      color: #fff;
      padding: 14px 25px;
      border: none;
      border-radius: 12px;
      font-size: 17px;
      margin-top: 20px;
      cursor: pointer;
      box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
      transition: all 0.3s ease;
    }

    /* Efecto al pasar el mouse sobre el botón */
    .btn-imprimir:hover {
      background-color: #ffffff;
      color: #7F00FF;
      transform: translateY(-5px);
    }

    /* Contenedor del botón centrado */
    .botonContenedor {
      display: flex;
      justify-content: center;
    }

  </style>
</div>
@endsection
