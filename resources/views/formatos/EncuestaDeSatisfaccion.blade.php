@extends('layouts.PlantillaFormatos')
@section('title', 'Encuesta de satisfacción')
@section('MessageHeader')
Encuesta de satisfacción
@endsection

@section('content')
<div class="ContornoReporte">
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    
    <h2 class="tituloformato nombre_formato">Encuesta de satisfacción</h2>

    <div class="encabezado3">
      <label>Forma 026</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>
    {{-- FORMULARIO --}}
  <div class="contenedor">
  <h4 style="font-size:11px; margin-top:10px;">
    Estimado ciudadano, la presente encuesta está encaminada a detectar las áreas de oportunidad de mejora de nuestro servicio, y por ello, agradecemos su tiempo y opinión en la presente encuesta.
  </h4>
  <br> <br>
  <div class="campo">
    <label for="nombreCiudadano">Nombre del ciudadano:</label>
    <input type="text" id="nombreCiudadano" name="nombreCiudadano" class="inputsReporte" required>
  </div>
  <br>
  <br>
  <br>
  {{-- Primera Tabla --}}
  <table>
    <thead>
      <tr>
        <th>¿Cómo calificarías nuestros servicios de atención al ciudadano?</th>
        <th><span class="emoji-grande">😞</span></th>
        <th><span class="emoji-grande">😐</span></th>
        <th><span class="emoji-grande">😊</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Tiempo de espera para ingresar</td>
        <td><input type="radio" name="espera" value="triste"></td>
        <td><input type="radio" name="espera" value="neutral"></td>
        <td><input type="radio" name="espera" value="feliz"></td>
      </tr>
      <tr>
        <td>¿Recibió la información necesaria?</td>
        <td><input type="radio" name="informacion" value="triste"></td>
        <td><input type="radio" name="informacion" value="neutral"></td>
        <td><input type="radio" name="informacion" value="feliz"></td>
      </tr>
      <tr>
        <td>Calidad del servicio</td>
        <td><input type="radio" name="calidad" value="triste"></td>
        <td><input type="radio" name="calidad" value="neutral"></td>
        <td><input type="radio" name="calidad" value="feliz"></td>
      </tr>
    </tbody>
  </table>

  <br>
  <br>
  <br>
  {{-- Segunda Tabla --}}
  <table>
    <thead>
      <tr>
        <th>¿Cómo calificas la atención recibida en?</th>
        <th><span class="emoji-grande">😞</span></th>
        <th><span class="emoji-grande">😐</span></th>
        <th><span class="emoji-grande">😊</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Área de cobro</td>
        <td><input type="radio" name="atencion" value="triste"></td>
        <td><input type="radio" name="atencion" value="neutral"></td>
        <td><input type="radio" name="atencion" value="feliz"></td>
      </tr>
      <tr>
        <td>Área médica</td>
        <td><input type="radio" name="medica" value="triste"></td>
        <td><input type="radio" name="medica" value="neutral"></td>
        <td><input type="radio" name="medica" value="feliz"></td>
      </tr>
      <tr>
        <td>Área de adopción</td>
        <td><input type="radio" name="adopcion" value="triste"></td>
        <td><input type="radio" name="adopcion" value="neutral"></td>
        <td><input type="radio" name="adopcion" value="feliz"></td>
      </tr>
      <tr>
        <td>Área de atención al reporte</td>
        <td><input type="radio" name="reporte" value="triste"></td>
        <td><input type="radio" name="reporte" value="neutral"></td>
        <td><input type="radio" name="reporte" value="feliz"></td>
      </tr>
    </tbody>
  </table>

  <br>
  <br>
  <br>

  {{-- Tercera Tabla --}}
  <table>
    <thead>
      <tr>
        <th>Satisfacción del servicio</th>
        <th><span class="emoji-grande">😞</span></th>
        <th><span class="emoji-grande">😐</span></th>
        <th><span class="emoji-grande">😊</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>¿El horario se ajusta a sus necesidades?</td>
        <td><input type="radio" name="horario" value="triste"></td>
        <td><input type="radio" name="horario" value="neutral"></td>
        <td><input type="radio" name="horario" value="feliz"></td>
      </tr>
      <tr>
        <td>Instalaciones en general</td>
        <td><input type="radio" name="instalaciones" value="triste"></td>
        <td><input type="radio" name="instalaciones" value="neutral"></td>
        <td><input type="radio" name="instalaciones" value="feliz"></td>
      </tr>
      <tr>
        <td>¿Desea dejar una queja, sugerencia o comentario?</td>
        <td><input type="radio" name="comentarios" value="triste"></td>
        <td><input type="radio" name="comentarios" value="neutral"></td>
        <td><input type="radio" name="comentarios" value="feliz"></td>
      </tr>
    </tbody>
  </table>

  <br>
  <br>
  <br>

  <div class="campo">
    <h4 style="font-size:11px;">¿Cómo se enteró de nuestros servicios?</h4>
    <label><input type="checkbox"> Radio</label>
    <label><input type="checkbox"> Televisión</label>
    <label><input type="checkbox"> Redes Sociales</label>
    <label><input type="checkbox"> Conocidos</label>
    <label><input type="checkbox"> Otro medio</label>
  </div>
</div>
</div>
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
<style>
  p{
    color: #000;
  }
  body {
    font-family: Arial, sans-serif;
    color: black;
  }
.contenedor{
  margin-top: 50px;
}
  .ContornoReporte {
    font-size: 10px;
    padding: 15px;
    color: #000;
  }

  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 10px;
  }

  .logo {
    max-width: 15%;
    height: auto;
  }

  .tituloformato {
    border: 3px solid black;
    padding: 1px 30px 1px 30px;
  }

  .encabezado3 label {
    font-weight: bold;
    font-size: 10px;
  }

  .campo {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 8px;
    font-size: 10px;
  }

  .campo label {
    margin-right: 10px;
    font-size: 10px;
  }

  .inputsReporte {
    flex: 1;
    border: none;
    border-bottom: 1px solid black;
    outline: none;
    font-size: 10px;
    padding: 3px 6px;
    
  }

  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 10px;
  }

  th, td {
    border: 1px solid #000;
    padding: 4px;
    text-align: center;
    color: #000;
    font-size: 12px;
    
  }

  td:first-child {
    text-align: left;
  }

  h4 {
    margin-top: 10px;
    font-size: 11px;
  }

  .emoji-grande {
    font-size: 20px;
  }

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
