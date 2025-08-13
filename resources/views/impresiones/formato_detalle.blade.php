@extends('layouts.PlantillaFormatos')

@section('title', 'Inventario de Ejemplares - Vista')

@section('MessageHeader')
Inventario de Ejemplares - Vista
@endsection

@section('content')
<div class="ContornoReporte">

  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato">Inventario de Ejemplares</h2>
    <div class="encabezado3">
      <label>Forma 018</label> <br>
      <label>Reporte no______</label> <br>
      <label>Fecha___________</label>
    </div>
  </div>

  {{-- Sección 1: Anexo --}}
  <h3>Anexo</h3>
  <div class="campo">
    <label>Dirección: Calle:</label>
    <p>{{ $datos_formato['direccion_calle'] ?? '---' }}</p>

    <label style="margin-left:5px;">Número:</label>
    <p>{{ $datos_formato['direccion_numero'] ?? '---' }}</p>
  </div>

  <div class="campo">
    <label>Colonia:</label>
    <p>{{ $datos_formato['colonia'] ?? '---' }}</p>
    <label style="margin-left:10px;">Morelia, Michoacán.</label>
  </div>

  <div class="campo">
    <label>Expediente:</label>
    <p>{{ $datos_formato['expediente'] ?? '---' }}</p>

    <label style="margin-left:10px;">Reporte:</label>
    <p>{{ $datos_formato['reporte'] ?? '---' }}</p>

    <label style="margin-left:10px;">Carpeta de investigación:</label>
    <p>{{ $datos_formato['carpeta'] ?? '---' }}</p>
  </div>

  {{-- Sección 2: Lista de ejemplares --}}
  <h3>Ejemplares</h3>
  @for ($i = 1; $i <= 10; $i++)
  <div class="campo" style="flex-wrap: wrap;">
    <label>{{ $i }}.- Especie:</label>
    <p>{{ $datos_formato['especie_'.$i] ?? '---' }}</p>

    <label>Sexo:</label>
    <p>{{ $datos_formato['sexo_'.$i] ?? '---' }}</p>

    <label style="margin-left:10px;">Raza:</label>
    <p>{{ $datos_formato['raza_'.$i] ?? '---' }}</p>

    <label>Tamaño:</label>
    <p>{{ $datos_formato['tamano_'.$i] ?? '---' }}</p>

    <label style="margin-left:10px;">Edad (meses):</label>
    <p>{{ $datos_formato['edad_'.$i] ?? '---' }}</p>

    <label style="margin-left:10px;">Color:</label>
    <p>{{ $datos_formato['color_'.$i] ?? '---' }}</p>

    <label style="margin-left:10px;">C.C.:</label>
    <p>{{ $datos_formato['cc_'.$i] ?? '---' }}</p>

    <label style="margin-left:10px;">Resguardo:</label>
    <p>{{ $datos_formato['resguardo_'.$i] ?? '---' }}</p>
  </div>
  @endfor

  {{-- Sección 3: Observaciones --}}
  <div class="campo" style="align-items: flex-start;">
    <label>Observaciones</label>
    <p>{{ $datos_formato['observaciones'] ?? '---' }}</p>
  </div>

</div>

<style>
  /* Copia aquí tus estilos para que se vea bien */
  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    flex-wrap: wrap;
  }
  .campo label {
    width: 150px;
    font-weight: bold;
  }
  .campo p {
    margin: 0 10px 0 0;
  }
  .ContornoReporte {
    background-color: white;
    padding: 20px;
  }
  .tituloformato {
    margin-bottom: 10px;
  }
</style>

@endsection
