@extends('layouts.PlantillaFormatos')
@section('title', 'Inventario de Ejemplares')
@section('MessageHeader')
Inventario de Ejemplares
@endsection

@section('content')
<div class="ContornoReporte">

  
    @csrf
    <input type="hidden" name="nombre_formato" value="Inventario de Ejemplares">

    {{-- Encabezado --}}
    <div class="encabezado">
      <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
      <h2 class="tituloformato nombre_formato">Inventario de Ejemplares</h2>
      <div class="encabezado3">
        <label>Forma 018</label><br>
        <label>Reporte no______</label><br>
        <label>Fecha___________</label>
      </div>
    </div>
    {{-- FORMULARIO --}}
  <form method="POST" action="{{ route('guardar.formato') }}">
    <br><br><br>
    {{-- Sección 1: Anexo --}}
    <h3>Anexo</h3>
    <div class="campo">
      <label>Dirección: Calle:</label>
      <input type="text" name="direccion_calle" class="inputsReporte" style="flex:2;">
      <label style="margin-left:5px;">Número:</label>
      <input type="text" name="direccion_numero" class="inputsReporte" style="width:100px;">
    </div>

    <div class="campo">
      <label>Colonia:</label>
      <input type="text" name="colonia" class="inputsReporte" style="flex:2;">
      <label style="margin-left:10px;">Morelia, Michoacán.</label>
    </div>

    <div class="campo">
      <label>Expediente:</label>
      <input type="text" name="expediente" class="inputsReporte" style="width:150px;">
      <label style="margin-left:10px;">Reporte:</label>
      <input type="text" name="reporte" class="inputsReporte" style="width:150px;">
      <label style="margin-left:10px;">Carpeta de investigación:</label>
      <input type="text" name="carpeta" class="inputsReporte" style="width:200px;">
    </div>

    {{-- Sección 2: Lista de ejemplares --}}
    <h3>Ejemplares</h3>
    @for ($i = 1; $i <= 15; $i++)
    <div style="display:flex; align-items:center; flex-wrap: nowrap; font-size:10px; gap:8px; margin-bottom:10px;">
      <label>{{ $i }}.- Especie:</label>
      <input type="text" name="especie_{{ $i }}" class="inputsReporte" style="width:70px; padding:2px 4px; font-size:10px;">

      <label>Sexo:</label>
      <label><input type="radio" name="sexo_{{ $i }}" value="H" style="transform: scale(0.8); margin-left:2px;" required>H</label>
      <label><input type="radio" name="sexo_{{ $i }}" value="M" style="transform: scale(0.8); margin-left:2px;">M</label>

      <label style="margin-left:10px;">Raza:</label>
      <input type="text" name="raza_{{ $i }}" class="inputsReporte" style="width:90px; padding:2px 4px; font-size:10px;">

      <label>Tamaño:</label>
      <label><input type="radio" name="tamano_{{ $i }}" value="Chica" style="transform: scale(0.8); margin-left:2px;" required>Ch</label>
      <label><input type="radio" name="tamano_{{ $i }}" value="Mediana" style="transform: scale(0.8); margin-left:2px;">M</label>
      <label><input type="radio" name="tamano_{{ $i }}" value="Grande" style="transform: scale(0.8); margin-left:2px;">Gde</label>

      <label style="margin-left:10px;">Edad (meses):</label>
      <input type="text" name="edad_{{ $i }}" class="inputsReporte" style="width:40px; padding:2px 4px; font-size:10px;">

      <label style="margin-left:10px;">Color:</label>
      <input type="text" name="color_{{ $i }}" class="inputsReporte" style="width:70px; padding:2px 4px; font-size:10px;">

      <label style="margin-left:10px;">C.C.:</label>
      @for ($j = 1; $j <= 5; $j++)
      <label><input type="radio" name="cc_{{ $i }}" value="{{ $j }}/5" style="transform: scale(0.8); margin-left:2px;" required>{{ $j }}/5</label>
      @endfor

      <label style="margin-left:10px;">Resguardo:</label>
      <label><input type="radio" name="resguardo_{{ $i }}" value="Domicilio" style="transform: scale(0.8); margin-left:2px;" required>Domicilio</label>
      <label><input type="radio" name="resguardo_{{ $i }}" value="IMPA" style="transform: scale(0.8); margin-left:2px;">IMPA</label>
    </div>
    @endfor

    {{-- Observaciones --}}
    <div class="campo" style="align-items: flex-start;">
      <label>Observaciones</label>
      <textarea name="observaciones" class="inputsReporte" style="height:50px; flex:1;"></textarea>
    </div>
  </form>

  {{-- CierreForm --}}
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>
</div>

<style>
body {
  .print-spacer {
    display: block;
    height: var(--print-spacer-height, 200px); /* valor por defecto */
  }
}
  /* Contorno y fuente */
  .ContornoReporte {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 11px;
    background-color: white;
    padding: 20px;
    box-sizing: border-box;
    max-width: 100%;
    color: #000;
    text-align: left;
  }

  /* Encabezado */
  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 0;
  }

  .logo {
    max-width: 15%;
    height: auto;
  }

  .encabezado3 {
    text-align: left;
    padding: 5px;
  }

  .encabezado3 label {
    font-weight: bold;
    font-size: 11px;
  }
.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
  /* arriba, derecha, abajo, izquierda */
}

  /* Campos */
  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    flex-wrap: wrap;
  }

  .campo label {
    font-size: 10px;
    margin-right: 5px;
    white-space: nowrap;
  }

  /* Inputs con borde inferior 0.5px */
  .inputsReporte {
    border: none;
    border-bottom: 0.5px solid black;
    outline: none;
    font-size: 11px;
    padding: 4px 6px;
    margin-right: 8px;
    box-sizing: border-box;
  }

  textarea.inputsReporte {
    resize: none;
    overflow: hidden;
  }

  /* Botón imprimir */
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
