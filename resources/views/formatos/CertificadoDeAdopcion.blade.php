@extends('layouts.PlantillaFormatos')

@section('title', 'Certificado de adopción')

@section('MessageHeader')
Certificado de adopción
@endsection

@section('content')

<div class="ContornoReporte">

  <!-- ENCABEZADO -->
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Certificado de adopción</h2>
    <div class="encabezado3">
      <label>Forma 015</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>
    {{-- FORMULARIO --}}
  <form method="POST" action="{{ route('guardar.formato') }}">
  <!-- SECCIÓN: MENSAJE LEGAL -->
  <p class="mensaje">
    De conformidad con los Artículos 2 y 4 de la Ley de Derechos, Bienestar y Protección a los Animales del Estado de Michoacán de Ocampo, se establece que los animales no humanos deben gozar de las siguientes libertades fundamentales:
  </p>
  <ul class="mensaje">
    <li>I. De hambre y sed, contando con acceso a agua fresca y una dieta adecuada para mantener plena salud y vigor.</li>
    <li>II. De incomodidad, disponiendo de un entorno adecuado que incluya refugio y una zona de descanso confortable.</li>
    <li>III. De dolor, lesiones o enfermedades, mediante la prevención, diagnóstico y tratamiento médico veterinario oportuno y profesional.</li>
    <li>IV. De miedo y angustia, garantizando condiciones que eviten cualquier sufrimiento físico o mental.</li>
    <li>V. Para expresar su comportamiento natural, contando con espacio suficiente, instalaciones adecuadas y autonomía para manifestar las conductas naturales propias de su especie.</li>
  </ul>

  <!-- SECCIÓN: DATOS DEL CIUDADANO -->
  <h3 class="subtitulos">Datos del Ciudadano</h3>
  <div class="campo"><label>Nombre:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Domicilio:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Colonia:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Teléfono:</label><input type="text" class="inputsReporte"></div>

  <p class="mensaje">
    Una vez recibida la plática de concientización y con conocimiento de que el maltrato animal está tipificado como delito en el Código Penal del Estado de Michoacán de Ocampo, manifiesta su deseo de adoptar al siguiente ejemplar:
  </p>

  <!-- SECCIÓN: DATOS DEL EJEMPLAR -->
  <h3 class="subtitulos">Datos del Ejemplar Adoptado</h3>
  <div class="campo"><label>Nombre:</label><input type="text" class="inputsReporte">
  <label>Edad (meses):</label><input type="text" class="inputsReporte">
  </div>
  <div class="campo"><label>Especie:</label><input type="text" class="inputsReporte">
    <label>Talla:</label>
    <input type="radio" name="talla"> Ch
    <input type="radio" name="talla"> M
    <input type="radio" name="talla"> G
  </div>

  <div class="campo"><label>Raza:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Peso:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Color:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Otras características:</label><input type="text" class="inputsReporte"></div>

  <p class="mensaje">
    Aceptando los derechos y obligaciones que implica la presente adopción, se autoriza formalmente la adopción del ejemplar detallado, bajo apercibimiento de que, en caso de incumplimiento de las condiciones de bienestar animal, se dará vista a la Fiscalía Especializada en la Persecución de los Delitos en Contra del Medio Ambiente y la Fauna. Se realizarán visitas de supervisión de seguimiento de adopción.
  </p>

  <!-- SECCIÓN: DECLARACIÓN -->
  <h4 class="subtitulos">Conociendo detalladamente las obligaciones a las que quedó sujeto el adoptante, manifiesta que:<br>
    "ACEPTO la responsabilidad absoluta de la adopción que me ha sido otorgada".
  </h4>

  <!-- SECCIÓN: FIRMAS -->
  <div class="campoFirma" style="margin-top: 30px; display: flex; justify-content: space-between;">
    <div class="firmaCentro">
      <div class="lineaFirma"></div>
      <label>Nombre y firma del adoptante</label>
    </div>
    <div class="firmaCentro">
      <div class="lineaFirma"></div>
      <label>Responsable del Instituto Moreliano de Protección Animal</label>
    </div>
  </div>

  {{-- CierreForm --}}
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>
</div>

<!-- ESTILOS -->
<style>
  .ContornoReporte {
    text-align: left;
    background-color: white;
    max-width: 100%;
    padding: 20px;
    box-sizing: border-box;
  }

  .encabezado {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
  }

  .logo {
    max-width: 12%;
    height: auto;
  }


.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
  /* arriba, derecha, abajo, izquierda */
}

  .encabezado3 {
    text-align: left;
    padding: 5px;
  }

  .encabezado3 label {
    font-weight: bold;
  }

  .subtitulos {
    text-align: center;
    margin: 20px 0 10px 0;
    border: 2px solid black;
    padding: 5px;
  }

  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    flex-wrap: wrap;
  }

  .campo label {
    font-size: 12px;
    margin-right: 10px;
    min-width: 150px;
  }

  .inputsReporte {
    flex: 1;
    min-width: 150px;
    border: none;
    border-bottom: 0.5px solid black;
    outline: none;
    font-size: 12px;
    padding: 4px;
  }

  .radios {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
  }

  .mensaje {
    font-size: 8px;
    margin: 10px 0;
    color: black;
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
