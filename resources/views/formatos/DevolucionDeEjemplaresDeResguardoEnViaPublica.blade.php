@extends('layouts.PlantillaFormatos')

@section('title', 'Devolución de ejemplar')

@section('MessageHeader')
Devolución de ejemplar
@endsection

@section('content')

<div class="ContornoReporte">

  <!-- ENCABEZADO -->
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Devolución de ejemplar</h2>
    <div class="encabezado3">
      <label>Forma 013</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>

  <!-- SECCIÓN: DATOS DEL ACTO -->
  <div class="campo">
    <label>Corresponde al Instituto Moreliano de Protección Animal tener bajo su resguardo a los ejemplares que se encuentren en vía pública, por lo cual, siendo las</label>
    <input type="text" class="inputsReporte">
    <label>del día</label>
    <input type="text" class="inputsReporte">
    <label>del mes de</label>
    <input type="text" class="inputsReporte">
    <label>del 20_________</label>
  </div>

  <!-- SECCIÓN: DATOS DEL CIUDADANO -->
  <h3 class="subtitulos">Datos del ciudadano</h3>

  <div class="campo"><label>Nombre:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Domicilio:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Colonia:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Teléfono:</label><input type="text" class="inputsReporte"></div>

  <div class="campo">
    <label>A fin de reclamar la propiedad del ejemplar capturado en vía pública.</label>
  </div>

  <div class="campo"><label>Fecha de captura:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Lugar de captura:</label><input type="text" class="inputsReporte"></div>

  <!-- SECCIÓN: DESCRIPCIÓN DEL EJEMPLAR -->
  <h3 class="subtitulos">Descripción del ejemplar capturado</h3>

  <div class="campo">
    <label>Nombre:</label><input type="text" class="inputsReporte">
    <label>Edad (meses):</label><input type="text" class="inputsReporte">
  </div>

  <div class="campo">
    <label>Especie:</label><input type="text" class="inputsReporte">
    <label>Talla:</label>
    <input type="radio" name="talla" value="Ch"><label>Ch</label>
    <input type="radio" name="talla" value="M"><label>M</label>
    <input type="radio" name="talla" value="G"><label>G</label>
  </div>

  <div class="campo">
    <label>Raza:</label><input type="text" class="inputsReporte">
    <label>Color:</label><input type="text" class="inputsReporte">
    <label>Sexo:</label>
    <input type="radio" name="sexo" value="H"><label>H</label>
    <input type="radio" name="sexo" value="M"><label>M</label>
  </div>

  <div class="campo">

  </div>

  <div class="campo"><label>Otras características:</label><input type="text" class="inputsReporte"></div>

  <div class="campo"><label>Y cuya propiedad acredita con:</label><input type="text" class="inputsReporte"></div>

  <div class="campo">
    <label>Una vez cubierto lo establecido por el Artículo 25, Fracción I, Inciso E de la Ley de Ingresos y el costo de esterilización (en su caso), según recibos No.</label>
    <input type="text" class="inputsReporte">
    <label>debiendo cumplir con las siguientes medidas:</label>
  </div>

 <!-- SECCIÓN: MEDIDAS -->
@php
$medidas = [
  "No mantener atado",
  "Colocar al ejemplar o ejemplares en un lugar donde puedan cubrirse de las inclemencias del tiempo",
  "Esterilizar",
  "Llevar atención médica veterinaria",
  "Realizar esquema de salud preventivo y asentar en cartilla de vacunación",
  "No dejar salir a la vía pública sin correa, cadena y sólo bajo supervisión",
  "Recoger sus heces y mantener limpia el área",
  "Proveer de agua limpia diaria y alimento suficiente y necesario",
];
$medidasAgrupadas = [
  "Sacar a pasear",
  "Llevar a estética y baño para el cuidado de la piel y pelaje",
  "Cambiar de espacio"
];
@endphp

<!-- Medidas normales (excepto las 3 que agruparemos) -->
@foreach($medidas as $key => $medida)
  @if(!in_array($key, [3,4,5]))
    <div class="campo">
      <input type="checkbox" name="medidas[]" value="{{ $key + 1 }}">
      <label>{{ $medida }}</label>
      @if($medida == 'Esterilizar' || $medida == 'No mantener atado')
        <input type="text" class="inputsReporte" placeholder="Especificar">
      @endif
    </div>
  @endif
@endforeach

<!-- Estas 3 en una misma línea -->
<div class="campo">
  <input type="checkbox" name="medidas[]" value="4">
  <label>Llevar atención médica veterinaria</label>

  <input type="checkbox" name="medidas[]" value="5">
  <label>Realizar esquema de salud preventivo y asentar en cartilla de vacunación</label>

  <input type="checkbox" name="medidas[]" value="6">
  <label>No dejar salir a la vía pública sin correa, cadena y sólo bajo supervisión</label>
</div>

<!-- Agrupadas en una sola línea -->
<div class="grupoMedidas">
  @foreach($medidasAgrupadas as $i => $medida)
    <div class="campo">
      <input type="checkbox" name="medidas[]" value="{{ $i + 9 }}">
      <label>{{ $medida }}</label>
    </div>
  @endforeach
</div>



  <!-- SECCIÓN: FIRMAS -->
  <div class="campoFirma" style="margin-top: 10px; display: flex; justify-content: space-between;">
    <div class="firmaCentro">
      <div class="lineaFirma"></div>
      <label>Por el Instituto Moreliano de Protección Animal<br>(Nombre y firma)</label>
    </div>
    <div class="firmaCentro">
      <div class="lineaFirma"></div>
      <label>Propietario o Poseedor del ejemplar<br>(Nombre y firma)</label>
    </div>
  </div>

  {{-- CierreForm --}}
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>

</div>

<!-- ESTILOS -->
<style>
  .tituloformato {
    border: 3px solid black;
    padding: 1px 30px;
    font-size: 14px;
  }

  .ContornoReporte {
    text-align: left;
    background-color: white;
    max-width: 100%;
    padding: 8px;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
    font-size: 15px;
  }

  .encabezado {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 8px;
  }

  .logo {
    max-width: 9%;
    height: auto;
  }

  .encabezado3 {
    text-align: left;
    padding: 3px;
    font-size: 11px;
  }

  .encabezado3 label {
    font-weight: bold;
  }

  .subtitulos {
    text-align: center;
    margin: 15px 0 8px 0;
    border: 2px solid black;
    font-size: 12px;
    padding: 3px;
  }

  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 4px;
    flex-wrap: wrap;
  }

  .campo label {
    font-size: 11px;
    margin-right: 8px;
  }

  .inputsReporte {
    flex: 1;
    min-width: 120px;
    border: none;
    border-bottom: 0.5px solid black;
    outline: none;
    font-size: 9px;
    padding: 2px 3px;
    margin-right: 8px;
  }

  .grupoMedidas {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 10px;
  }

  .grupoMedidas .campo {
    display: flex;
    align-items: center;
  }

  .grupoMedidas .campo label {
    font-size: 10px;
    margin-left: 4px;
  }

  .firmaCentro {
    text-align: center;
    margin-top: 8px;
  }

  .lineaFirma {
    border-bottom: 1px solid black;
    width: 220px;
    margin: 0 auto 6px auto;
    height: 18px;
  }

  .btn-imprimir {
    background: linear-gradient(135deg, #7F00FF, #E100FF);
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    font-size: 14px;
    margin-top: 16px;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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

    {{-- Estilos especiales para impresión --}}
  @media print {
    .ContornoReporte {
  width: 100%;
  padding: 20px 80px;
  box-sizing: border-box;
  background: white;
}
}
</style>


@endsection
