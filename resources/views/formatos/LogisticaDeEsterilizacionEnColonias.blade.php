@extends('layouts.PlantillaFormatos')
@section('title', 'Logistica de esterilizacion en colonias')
@section('MessageHeader')
Logistica de esterilizacion en colonias
@endsection

@section('content')

<div class="ContornoReporte">

  {{-- ENCABEZADO --}}
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Logistica de esterilizacion en colonias</h2>
    <div class="encabezado3">
      <label>Forma 028</label> <br>
      <label>Reporte no______</label> <br>
      <label>Fecha___________</label>
    </div>
  </div>

  {{-- TÍTULO PRINCIPAL --}}
  <h3 class="subtitulos" style="margin-top: 50px;">LOGÍSTICA Y REQUISITOS PARA LA REALIZACIÓN DE PROCEDIMIENTO QUIRÚRGICO DE ESTERILIZACIÓN EN COLONIAS, TENENCIAS Y COMUNIDADES</h3>

  {{-- LISTA DE REQUISITOS --}}
  <ol class="textos" style="margin-top: 20px; font-size: 12px;">
    <li>
      Una vez acordada la fecha para la campaña, el responsable de la unidad deberá garantizar las siguientes características:
      <ol type="a">
        <li>Superficie plana con acceso al 100% de sombra para médicos y usuarios.</li>
        <li>Asignar un espacio dentro del mismo predio para recuperación postquirúrgica.</li>
        <li>El espacio deberá contar con toldo y sillas para los propietarios.</li>
        <li>Asignar un responsable de la unidad, quien coordinará junto con personal del Instituto.</li>
        <li>La agenda de esterilización será proporcionada previamente.</li>
      </ol>
    </li>
    <li>Se recomienda avisar con tiempo suficiente a los usuarios.</li>
    <li>Los dueños deberán presentarse 15 minutos antes de su cita.</li>
    <li>La jornada iniciará a las 9:00 hrs.</li>
    <li>Se recibe al propietario del ejemplar en la unidad móvil.</li>
    <li>Modificaciones en los animales solo las realizará personal autorizado.</li>
    <li>Ejemplares con mínimo 8 hrs. de ayuno (agua y comida).</li>
    <li>Más de 5 meses de vida o practicarse el ayuno por indicación médica.</li>
    <li>El ejemplar debe llevar correa o caja transportadora adecuada.</li>
    <li>Se solicitará copia de INE y comprobante de domicilio vigente.</li>
    <li>No se recibirán animales sin propietario responsable.</li>
    <li>Se llena un formato antes de cirugía.</li>
    <li>No se atenderá a ejemplares sin propietario el día de la cirugía.</li>
    <li>No se aceptarán ejemplares presentados por menores de edad.</li>
    <li>No se operarán hembras en celo, lactancia o preñadas.</li>
    <li>Gatos deben ir en caja transportadora (no costales, mochilas o bolsas).</li>
    <li>El propietario deberá llevar una cobija o manta para su ejemplar.</li>
  </ol>

  {{-- FIRMAS --}}
  <div class="firmas" style="margin-top: 50px;">
    <div class="firma">
      <div class="lineaFirma"></div>
      <label>Nombre y Firma del Encargado de Campaña</label>
    </div>
    <div class="firma">
      <div class="lineaFirma"></div>
      <label>Responsable de Logística IMPA</label>
    </div>
  </div>

  {{-- PIE DE PÁGINA --}}
  <footer style="text-align: center; margin-top: 60px; font-size: 12px;">
    Instituto Moreliano de Protección Animal
  </footer>

  {{-- CierreForm --}}
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>
</div>

{{-- ESTILOS INTERNOS --}}
<style>

  .ContornoReporte {
    padding: 20px;
    background-color: white;
  }

  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
  }

  .logo {
    max-width: 10%;
    height: auto;
  }

  .encabezado3 {
    text-align: left;
    font-size: 12px;
  }

  .encabezado3 label {
    font-weight: bold;
  }

.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
  /* arriba, derecha, abajo, izquierda */
}

  .subtitulos {
    text-align: center;
    margin: 20px 0 10px 0;
    font-size: 16px;
    border: 2px solid black;
    padding: 5px;
  }

  .textos {
    font-size: 12px;
    text-align: justify;
  }

  .firmas {
    display: flex;
    justify-content: space-between;
    margin-top: 40px;
  }

  .firma {
    width: 48%;
    text-align: center;
  }

  .lineaFirma {
    border-bottom: 1px solid black;
    margin-bottom: 8px;
    height: 20px;
  }

  @media print {
    button, .botonContenedor {
      display: none !important;
    }
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

      .print-spacer {
    display: block;
    height: var(--print-spacer-height, 130px); /* valor por defecto */
  }
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
