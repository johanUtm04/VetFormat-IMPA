@extends('layouts.PlantillaFormatos')

@section('title', 'Etograma Canino')

@section('MessageHeader')
  Etograma Canino
@endsection

@section('content')

<div class="ContornoReporte">

  <!-- ENCABEZADO -->
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Etograma Canino</h2>
    <div class="encabezado3">
      <label>Forma 010</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>
    {{-- FORMULARIO --}}
  <form method="POST" action="{{ route('guardar.formato') }}">
  <!-- DATOS GENERALES -->
  <div class="seccion1">
    <h3 class="subtitulos">Datos Generales</h3>

    <div class="campo">
      <label for="nombreJaula">Nombre de la jaula:</label>
      <input type="text" id="nombreJaula" name="nombreJaula" class="inputsReporte" required>

      <label for="color">Color:</label>
      <input type="text" id="color" name="color" class="inputsReporte" required>

      <label>Sexo:</label>
      <input type="radio" id="sexoM" name="sexo" value="M" required>
      <label for="sexoM">M</label>
      <input type="radio" id="sexoH" name="sexo" value="H">
      <label for="sexoH">H</label>
    </div>

    <div class="campo">
      <label for="numRegistro">N° Registro:</label>
      <input type="text" id="numRegistro" name="numRegistro" class="inputsReporte" required>

      <label for="numReporte">N° Reporte:</label>
      <input type="text" id="numReporte" name="numReporte" class="inputsReporte" required>

      <label for="fecha">Fecha:</label>
      <input type="date" id="fecha" name="fecha" class="inputsReporte" required>
    </div>
  </div>

  <!-- REGISTRO CONDUCTUAL -->
  <div class="seccion2">
    <h3 class="subtitulos">Registro Conductual</h3>

    <!-- Conductas Sociales -->
    <h4 class="subtitulos">Conductas Sociales</h4>
    <table class="tablaConducta">
      <thead>
        <tr>
          <th>Conducta</th>
          <th>L</th>
          <th>M</th>
          <th>M</th>
          <th>J</th>
          <th>V</th>
          <th>S</th>
          <th>D</th>
        </tr>
      </thead>
      <tbody>
        @foreach (['Come y bebe', 'Es manipulable en su totalidad', 'Olfatea su entorno y a otros perros', 'Orina y defeca con normalidad', 'Se relaja con normalidad', 'Chilla o gruñe ante una molestia', 'Se relaciona adecuadamente con otros perros'] as $conducta)
        <tr>
          <td>{{ $conducta }}</td>
          @for ($i = 0; $i < 7; $i++)
          <td><input type="checkbox"></td>
          @endfor
        </tr>
        @endforeach
      </tbody>
    </table>

    <!-- Miedos o Inseguridades -->
    <h4 class="subtitulos">Miedos o Inseguridades</h4>
    <table class="tablaConducta">
      <thead>
        <tr>
          <th>Miedo o Inseguridad</th>
          <th>L</th>
          <th>M</th>
          <th>M</th>
          <th>J</th>
          <th>V</th>
          <th>S</th>
          <th>D</th>
        </tr>
      </thead>
      <tbody>
        @foreach (['Miedo al ofrecerle alimento', 'Siente inseguridad cuando lo tocamos', 'Gruñe ante una molestia', 'Tiene miedo a las personas', 'Tiene miedo a otros perros', 'Solo se relaja en cama u otros espacios', 'Tiene miedo al manejo'] as $miedo)
        <tr>
          <td>{{ $miedo }}</td>
          @for ($i = 0; $i < 7; $i++)
          <td><input type="checkbox"></td>
          @endfor
        </tr>
        @endforeach
      </tbody>
    </table>

    <!-- Conductas No Deseables -->
    <h4 class="subtitulos">Conductas No Deseables</h4>
    <table class="tablaConducta">
      <thead>
        <tr>
          <th>Conducta No Deseable</th>
          <th>L</th>
          <th>M</th>
          <th>M</th>
          <th>J</th>
          <th>V</th>
          <th>S</th>
          <th>D</th>
        </tr>
      </thead>
      <tbody>
        @foreach (['Protege la comida', 'Gruñe o muerde si lo manipulamos', 'Se encuentra estresado o angustiado', 'Se muestra poco amigable o agresivo', 'Corre o no sabe caminar con normalidad', 'Reacciona agresivamente con otros perros y su entorno', 'Muerde ante una molestia', '¿Tiene manejo?'] as $conductaND)
        <tr>
          <td>{{ $conductaND }}</td>
          @for ($i = 0; $i < 7; $i++)
          <td><input type="checkbox"></td>
          @endfor
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- Observaciones -->
  <div>
    <h3 class="subtitulos">Observaciones</h3>
    <textarea class="areaObservaciones" cols="160" rows="6" ></textarea>
  </div>

  <!-- Firma -->
  <div class="firmaCentro">
    <div class="lineaFirma"></div>
    <label>Nombre y Firma</label>
  </div>

  {{-- CierreForm --}}
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>


  
</div>

<!-- ESTILOS -->
<style>
body {
  .print-spacer {
    display: block;
    height: var(--print-spacer-height, 70px); /* valor por defecto */
  }
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
    background-color: #fff;
    max-width: 100%;
    padding: 0px;
    box-sizing: border-box;
  }

  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #fff;
    padding: 10px;
    box-sizing: border-box;
  }


  .encabezado3 {
    text-align: left;
    padding: 5px;
  }

  .encabezado3 label {
    font-weight: bold;
    /* Puedes añadir border-bottom aquí si quieres punteado o no */
  }

  .subtitulos {
    text-align: center;
    margin: 20px 0 10px 0;
  }

  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    border: 2px solid black;
    flex-wrap: wrap;
    padding: 5px;
  }

  .campo label {
    width: auto;
    font-size: 12px;
    margin-right: 5px;
  }

  .inputsReporte {
    flex: 1;
    border: none;
    outline: none;
    font-size: 12px;
    padding: 6px;
    box-sizing: border-box;
    margin-left: 5px;
    min-width: 100px;
  }

  .tablaConducta {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
  }

  .tablaConducta th,
  .tablaConducta td {
    border: 1px solid #000;
    text-align: center;
    padding: 3px;
    font-size: 10px;
  }

  .campo input[type="radio"] {
    margin: 0 5px;
  }

  .firmaCentro {
    text-align: center;
    margin-top: 30px;
  }

  .lineaFirma {
    border-bottom: 1px solid black;
    width: 250px;
    margin: 0 auto 8px auto;
    height: 10px;
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
