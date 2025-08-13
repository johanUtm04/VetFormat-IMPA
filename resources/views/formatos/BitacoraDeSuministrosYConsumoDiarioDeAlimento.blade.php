@extends('layouts.PlantillaFormatos')
@section('title', 'Bitacora de suministrados')
@section('MessageHeader')
Bitacora de suministrados y consumo diarios de alimentos
@endsection

@section('content')
<div class="ContornoReporte">

  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Bitácora de suministros y consumo diario de alimentos</h2>

    <div class="encabezado3">
      <label>Forma 007</label> <br>
      <label>Reporte no______</label> <br>
      <label>Fecha___________</label>
    </div>
  </div>

      {{-- FORMULARIO --}}
  <form method="POST" action="{{ route('guardar.formato') }}">
  <div class="tabla">
      <table>
        <thead>
          <tr>
            <th>Dia</th>
            <th>Kg en existencia</th>
            <th>Kg de alimento</th>
            <th>Kg área de tránsito</th>
            <th>Kg área de adopción</th>
            <th>Kg área de gatera</th>
            <th>Total del día</th>
            <th>Observaciones</th>
          </tr>
        </thead>
          <tbody>
          @for($i = 0; $i < 11; $i++)
          <tr>
          <td><input type="number" name="dia[]"></td>
          <td><input type="number" name="kgExistencia[]"></td>
          <td><input type="number" name="kgEntrada[]"></td>
          <td><input type="number" name="kgTransito[]"></td>
          <td><input type="number" name="kgAdopcion[]"></td>
          <td><input type="number" name="kgGatera[]"></td>
          <td><input type="number" name="totalDia[]"></td>
          <td>
          <textarea name="observaciones[]" rows="3" style="resize: vertical; font-size:9px; padding: 0px;"></textarea>
          </td>
          </tr>
          @endfor
          </tbody>
      </table>

      <div class="firma">
        <div class="lineaFirma"></div>
        <label>Responsable <br> (nombre y firma)
        </label>
      </div>

    </form>
  </div>
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>
</div>

<style>
  body {
    font-size: 10px;
  }

  .tituloformato {
    border: 2px solid black;
    padding: 1px 20px;
    font-size: 12px;
  }

  .ContornoReporte {
    text-align: left;
    background-color: #fff;
    max-width: 100%;
    padding: 12px;
    box-sizing: border-box;
  }

  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px;
  }

  .logo {
    max-width: 12%;
    height: auto;
  }

  .encabezado3 {
    text-align: left;
    padding: 2px;
    font-size: 10px;
  }

  .encabezado3 label {
    font-weight: bold;
  }

  .tabla {
    margin: 15px 0;
  }

  table {
    border-collapse: collapse;
    width: 100%;
    table-layout: fixed;
    font-family: Arial, sans-serif;
    font-size: 9px;
  }

  th,
  td {
    border: 1px solid black;
    padding: 2px;
    text-align: center;
    vertical-align: middle;
  }

  th {
    background-color: #8b039d;
    color: white;
    font-weight: bold;
    font-size: 9px;
  }

  input[type="text"],
  input[type="number"],
  input[type="date"],
  textarea {
    width: 100%;
    box-sizing: border-box;
    padding: 2px 3px;
    font-size: 9px;
    border: none;
  }

  textarea {
    resize: vertical;
    min-height: 16px;
    max-height: 60px;
    overflow-y: auto;
  }

  .firma {
    width: 50%;
    margin: 20px auto 10px;
    text-align: center;
  }

  .lineaFirma {
    border-bottom: 1px solid black;
    height: 18px;
    margin-bottom: 6px;
  }

  @media print {
    body {
      margin: 0;
    }

    .ContornoReporte {
      padding: 0;
    }

    table {
      page-break-inside: avoid;
    }

    .tabla {
      overflow: visible;
    }
  }

  .btn-imprimir {
    background: linear-gradient(135deg, #7F00FF, #E100FF);
    color: #fff;
    padding: 10px 18px;
    border: none;
    border-radius: 10px;
    font-size: 14px;
    margin-top: 15px;
    cursor: pointer;
    box-shadow: 0 5px 12px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
  }

  .btn-imprimir:hover {
    background-color: #ffffff;
    color: #7F00FF;
    transform: translateY(-4px);
  }

  .botonContenedor {
    display: flex;
    justify-content: center;
  }
</style>

@endsection
