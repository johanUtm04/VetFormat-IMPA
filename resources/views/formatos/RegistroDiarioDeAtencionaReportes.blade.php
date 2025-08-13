@extends('layouts.PlantillaFormatos')

@section('title', 'Registro Diario de atencion a Reportes')

@section('MessageHeader')
  Registro Diario de atencion a Reportes
@endsection

@section('content')
  <div class="ContornoReporte">

    {{-- ENCABEZADO --}}
    <div class="encabezado">
      <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
      <h2 class="tituloformato nombre_formato">Registro diario de atencion a Reportes</h2>
      <div class="encabezado3">
        <label>Forma 004</label> <br>
        <label>Reporte no______</label> <br>
        <label>Fecha___________</label>
      </div>
    </div>

    {{-- TABLA --}}
    <div class="tabla">
    {{-- FORMULARIO --}}
  <form method="POST" action="{{ route('guardar.formato') }}">
        <table id="miTabla">
          <thead>
            <tr>
              <th>NO.CONST</th>
              <th>NO. REPORTE</th>
              <th>RESPONSABLE DE <br> ATENDER AL REPORTANTE</th>
              <th>TIPO DE REPORTE</th>
              <th>LUGAR DE REPORTE <br>(COLONIA)</th>
              <th>ESTATUS <br> DEL REPORTE</th>
            </tr>
          </thead>
          <tbody>
            @for($i = 0; $i < 9; $i++)
              <tr>
                <td>{{ $i+1 }}</td>
                <td><input type="number" name=""></td>
                <td><input type="text" name=""></td>
                <td><input type="text" name=""></td>
                <td><input type="text" name=""></td>
                <td><textarea rows="2" cols="10" name=""></textarea></td>
              </tr>
            @endfor
          </tbody>
        </table>

        {{-- FIRMA --}}
        <div class="firma">
          <div class="lineaFirma"></div>
          <label>Nombre y Firma</label>
        </div>

    </div>

    {{-- BOTÓN PARA IMPRIMIR --}}
    <div class="botonContenedor">
      <button type="button" class="btn-imprimir" onclick="window.print()">Imprimir pantalla</button>
    </div>
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
      </form>
  </div>

  {{-- ESTILOS --}}
  <style>
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

    .logo {
      max-width: 15%;
      height: auto;
    }

    .encabezado3 {
      text-align: left;
      padding: 5px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      font-family: Arial, sans-serif;
    }

    th, td {
      border: 0.5px solid black;
      padding: 4px;
      text-align: center;
    }

    th {
      background-color: #bd12c6;
    }

input[type="text"],
input[type="number"],
textarea {
  width: 100%;
  box-sizing: border-box;
  padding: 2px 4px;
  font-size: 9px;
  border: none;
  height: 25px;
}

textarea {
  resize: none;
  overflow: hidden;
  height: 30px;
}


    .firma {
      width: 50%;
      margin: 30px auto;
      text-align: center;
    }

    .lineaFirma {
      border-bottom: 1px solid black;
      height: 20px;
      margin-bottom: 8px;
    }

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
