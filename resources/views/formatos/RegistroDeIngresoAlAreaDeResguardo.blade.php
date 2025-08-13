@extends('layouts.PlantillaFormatos')

@section('title', 'Registro de ingreso al área de resguardo')

@section('MessageHeader')
  Registro de ingreso al área de resguardo
@endsection

@section('content')
  <div class="ContornoReporte">

    {{-- ENCABEZADO --}}
    <div class="encabezado">
      <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
      <h2 class="tituloformato nombre_formato">Registro de ingreso al área de resguardo</h2>
      <div class="encabezado3">
        <label>Forma 005</label><br>
        <label>Reporte no______</label><br>
        <label>Fecha___________</label>
      </div>
    </div>


    {{-- DATOS DEL EJEMPLAR --}}
    <h3 class="subtitulo">Datos del Ejemplar</h3>

    <table class="tablaReporte">
      <thead>
        <tr>
          <th>Especie</th>
          <th>Raza</th>
          <th>Sexo C/F</th>
          <th>Sexo H/M</th>
          <th>Color</th>
          <th>Edad (meses)</th>
          <th>Alzada Ch/M/G</th>
          <th>Lugar Resguardo</th>
          <th>No. Reporte</th>
          <th>Resguardado</th>
          <th>Donado</th>
          <th>Agresor</th>
          <th>Fecha Ingreso</th>
          <th>Observaciones</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 0; $i < 8; $i++)
        <tr>
          <td><input type="text" class="inputsReporte"></td>
          <td><input type="text" class="inputsReporte"></td>
          <td>C<input type="checkbox"><br>F<input type="checkbox"></td>
          <td>H<input type="checkbox"><br>M<input type="checkbox"></td>
          <td><input type="text" class="inputsReporte"></td>
          <td><input type="number" class="inputsReporte"></td>
          <td>Ch<input type="checkbox"><br>M<input type="checkbox"><br>G<input type="checkbox"></td>
          <td><input type="text" class="inputsReporte"></td>
          <td><input type="text" class="inputsReporte"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="checkbox"></td>
          <td><input type="date" class="inputsReporte"></td>
          <td><input type="text" class="inputsReporte"></td>
        </tr>
        @endfor
      </tbody>
    </table>

    {{-- FIRMA --}}
    <div class="firmaCentro">
      <div class="lineaFirma"></div>
      <label>Responsable <br> (nombre y firma)</label>
    </div>

    {{-- BOTÓN PARA IMPRIMIR --}}
    <div class="botonContenedor">
      <button type="button" class="btn-imprimir" onclick="window.print()">Imprimir pantalla</button>
    </div>

  </div>

  <style>
    body {
      --print-spacer-height: 40px;
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
    .ContornoReporte {
      text-align: left;
      background-color: rgb(255, 255, 255);
      max-width: 100%;
      padding: 20px;
      box-sizing: border-box;
    }

    .encabezado {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: rgb(255, 255, 255);
      padding: 10px;
      box-sizing: border-box;
    }

    .encabezado3 {
      text-align: left;
      padding: 5px;
    }

    .encabezado3 label {
      font-weight: bold;
    }

    .tablaReporte {
      width: 100%;
      border-collapse: collapse;
      font-size: 11px;
    }

    .tablaReporte th, .tablaReporte td {
      border: 1px solid black;
      padding: 1px;
      text-align: center;
      vertical-align: middle;
    }

    .inputsReporte {
      width: 100%;
      box-sizing: border-box;
      font-size: 11px;
      padding: 2px;
    }

    .firmaCentro {
      text-align: center;
      margin-top: 30px;
    }

    .lineaFirma {
      border-bottom: 1px solid black;
      width: 250px;
      margin: 0 auto 8px auto;
      height: 20px;
    }

    .btn-imprimir {
      background: linear-gradient(135deg, #7F00FF, #E100FF);
      color: #fff;
      padding: 12px 22px;
      border: none;
      border-radius: 12px;
      font-size: 16px;
      margin-top: 20px;
      cursor: pointer;
      box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
      transition: all 0.3s ease;
    }

    .btn-imprimir:hover {
      background-color: #ffffff;
      color: #7F00FF;
      transform: translateY(-5px);
    }

    .botonContenedor {
      display: flex;
      justify-content: center;
    }
  </style>
@endsection
