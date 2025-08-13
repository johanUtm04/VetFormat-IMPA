@extends('layouts.PlantillaFormatos')

@section('title', 'Donación de ejemplares')

@section('MessageHeader')
Donación de ejemplares
@endsection

@section('content')

<div class="ContornoReporte">

  <!-- ENCABEZADO -->
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Donación de ejemplares</h2>
    <div class="encabezado3">
      <label>Forma 016</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>

  <!-- SECCIÓN 1: DATOS DEL DONANTE -->
  <h3 class="subtitulo">Datos del Donante</h3>

  <div class="campo"><label>Nombre:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Domicilio:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Colonia:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Teléfono:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Motivo de la donación:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Identificación:</label><input type="text" class="inputsReporte"></div>

  <div class="campo">
    <label>Copia de:</label>
    <div class="radio-group">
      <input type="checkbox" id="copiaINE"><label for="copiaINE">INE</label>
      <input type="checkbox" id="copiaComprobante"><label for="copiaComprobante">Comprobante de domicilio</label>
    </div>
  </div>

  <!-- SECCIÓN 2: DATOS DEL EJEMPLAR -->
  <h3 class="subtitulo">Descripción del ejemplar donado</h3>

  <div class="campo"><label>Nombre:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Edad (meses):</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Especie:</label><input type="text" class="inputsReporte">
  
        <label>Talla:</label>
    <div class="radio-group">
      <input type="radio" id="tallaCh" name="talla"><label for="tallaCh">Chico</label>
      <input type="radio" id="tallaM" name="talla"><label for="tallaM">Mediano</label>
      <input type="radio" id="tallaG" name="talla"><label for="tallaG">Grande</label>
    </div>
  
  </div>


  <div class="campo"><label>Raza:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Peso:</label><input type="text" class="inputsReporte">
  
      <label>Sexo:</label>
    <div class="radio-group">
      <input type="radio" id="sexoH" name="sexo"><label for="sexoH">Hembra</label>
      <input type="radio" id="sexoM" name="sexo"><label for="sexoM">Macho</label>
    </div>
  
  </div>

  <div class="campo"><label>Color:</label><input type="text" class="inputsReporte"></div>

  <div class="campo">
    <label>C.P.:</label>
    <div class="radio-group">
      <input type="radio" id="cp1" name="cp"><label for="cp1">1/5</label>
      <input type="radio" id="cp2" name="cp"><label for="cp2">2/5</label>
      <input type="radio" id="cp3" name="cp"><label for="cp3">3/5</label>
      <input type="radio" id="cp4" name="cp"><label for="cp4">4/5</label>
      <input type="radio" id="cp5" name="cp"><label for="cp5">5/5</label>
    </div>
  </div>

  <div class="campo"><label>Otras características:</label><input type="text" class="inputsReporte"></div>

 <!-- SECCIÓN 3: VALORACIÓN -->
<h3 class="subtitulo">Valoración</h3>

<div class="campo">
  <label style="min-width: 220px;">¿Se encuentra justificada la donación?</label>
  <input type="checkbox" id="justificadaSi">
  <label for="justificadaSi" style="margin-right: 10px;">Sí</label>
  <label style="min-width: 50px;">Motivo:</label>
  <input type="text" class="inputsReporte" style="flex: 1;">
</div>

<div class="campo">
  <label style="min-width: 220px;">Documentación anexada:</label>
  <input type="checkbox" id="docsINE">
  <label for="docsINE" style="margin-right: 10px;">INE</label>
  <input type="checkbox" id="docsComp">
  <label for="docsComp">Comprobante de domicilio</label>
</div>

<div class="campo">
  <label style="min-width: 220px;">¿No se encuentra justificada?</label>
  <input type="checkbox" id="noJustificadaSi">
  <label for="noJustificadaSi" style="margin-right: 10px;">Sí</label>
  <label style="min-width: 50px;">Sanción:</label>
  <input type="text" class="inputsReporte" style="flex: 1;">
</div>

<div class="campo">
  <label style="min-width: 220px;">Se requiere verificación en domicilio:</label>
  <input type="checkbox" id="verificacionSi">
  <label for="verificacionSi">Sí</label>
</div>

<div class="campo">
  <label style="min-width: 220px;">No se anexa documentación:</label>
  <input type="checkbox" id="noAnexaDocs">
  <label for="noAnexaDocs">Sí</label>
</div>


  <!-- MENSAJE -->
  <p class="mensaje">
    Al firmar este documento, pierde todo derecho sobre el ejemplar o ejemplares, así como la posibilidad de solicitar información del mismo. A partir de la entrega y firma, el ejemplar queda a disposición del Instituto Moreliano de Protección Animal.
  </p>

  <!-- FIRMAS -->
  <div class="campoFirma" style="margin-top: 30px; display: flex; justify-content: space-between;">
    <div class="firmaCentro">
      <div class="lineaFirma"></div>
      <label>Nombre y firma del donante</label>
    </div>
    <div class="firmaCentro">
      <div class="lineaFirma"></div>
      <label>Nombre y firma del receptor del ejemplar (IMPA)</label>
    </div>
  </div>

</div>

<style>
body {
  .print-spacer {
    display: block;
    height: var(--print-spacer-height, 20px); /* valor por defecto */
  }
}
  /* Fuente general para todo el formato */
  .ContornoReporte {
    background-color: white;
    padding: 15px;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 11px;
    color: #000;
  }

  .encabezado {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 8px 0;
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

  .encabezado3 label {
    font-weight: normal;
    font-size: 10px;
  }

  .subtitulo {
    text-align: center;
    margin: 15px 0 8px 0;
    font-size: 12px;
    border: 1.5px solid black;
    padding: 4px;
    background-color: #f5f5f5;
  }

  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 7px;
    flex-wrap: wrap;
  }

  .campo label {
    min-width: 140px;
    font-size: 10px;
    font-weight: normal;
  }

  .inputsReporte {
    flex: 1;
    border: none;
    border-bottom: 1.5px solid black;
    font-size: 10px;
    padding: 3px;
  }

  .radios {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 7px;
  }

  .radios label {
    font-size: 11px;
    font-weight: normal;
  }

  .mensaje {
    font-size: 11px;
    margin: 8px 0;
  }

  .firmaCentro {
    text-align: center;
  }

  .lineaFirma {
    border-bottom: 1px solid black;
    width: 220px;
    margin: 0 auto 6px auto;
    height: 16px;
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
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
  }

  .btn-imprimir:hover {
    background-color: #ffffff;
    color: #7F00FF;
    transform: translateY(-3px);
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
