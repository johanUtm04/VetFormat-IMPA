@extends('layouts.PlantillaFormatos')
@section('title', 'Encuesta de adopcion')
@section('MessageHeader')
Encuesta de adopcion
@endsection

@section('content')




<div class="ContornoReporte">
<div class="seccion1">
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">

    <h2 class="tituloformato nombre_formato">Encuesta de adopcion</h2>

        <div class="encabezado3">
      <label>Forma 025</label> <br>
      <label>Reporte no______</label> <br>
      <label>Fecha___________</label>
    </div>
  </div>

<br>
<br>
<br>

  <div class="campo">
    <label for="fechaSolicitud">Fecha de solicitud:</label>
    <input type="text" id="fechaSolicitud" name="fechaSolicitud" class="inputsReporte" placeholder="Ingresa la fecha de solicitud" required>
  </div>

  <div class="campo">
    <label for="ejemplarInteres">Ejemplar de interés:</label>
    <input type="text" id="ejemplarInteres" name="ejemplarInteres" class="inputsReporte" placeholder="Ejemplar de interés" required>
  </div>

  <div class="campo">
    <label for="encuestador">Encuestador:</label>
    <input type="text" id="encuestador" name="encuestador" class="inputsReporte" placeholder="Nombre del encuestador" required>
  </div>

  <h4>Datos Personales</h4>

  <div class="campo">
    <label for="nombreCompleto">Nombre completo:</label>
    <input type="text" id="nombreCompleto" name="nombreCompleto" class="inputsReporte" placeholder="Nombre completo" required>
  </div>

  <div class="campo">
    <label for="calleNumero">Calle y número:</label>
    <input type="text" id="calleNumero" name="calleNumero" class="inputsReporte" placeholder="Calle y número" required>
  </div>

  <div class="campo">
    <label for="colonia">Colonia:</label>
    <input type="text" id="colonia" name="colonia" class="inputsReporte" placeholder="Colonia" required>
  </div>

  <div class="campo">
    <label for="ocupacion">Ocupación:</label>
    <input type="text" id="ocupacion" name="ocupacion" class="inputsReporte" placeholder="Ocupación" required>
    <div class="campoAnidado">
      <label for="edad">Edad:</label>
      <input type="text" id="edad" name="edad" class="inputsReporte" placeholder="Edad" required>
    </div>
  </div>

  <div class="campo">
    <label for="whatsapp">Teléfono con WhatsApp:</label>
    <input type="text" id="whatsapp" name="whatsapp" class="inputsReporte" placeholder="Número de WhatsApp" required>
    <input type="text" id="otroWhatsapp" name="otroWhatsapp" class="inputsReporte" placeholder="¿Algún otro?" required>
  </div>

  <h4>Cuestionario</h4>

  <div class="campo">
    <label for="adoptadoAnteriormente">¿Ha adoptado anteriormente?</label>
    <input type="text" id="adoptadoAnteriormente" name="adoptadoAnteriormente" class="inputsReporte" placeholder="Sí / No" required>
  </div>

  <div class="campo">
    <label for="otrasMascotas">¿Tiene otras mascotas? ¿Edades?</label>
    <input type="text" id="otrasMascotas" name="otrasMascotas" class="inputsReporte" placeholder="..." required>
  </div>

  <div class="campo">
    <label for="personasDomicilio">¿Cuántas personas viven en su domicilio?</label>
    <input type="text" id="personasDomicilio" name="personasDomicilio" class="inputsReporte" placeholder="Número de personas" required>
  </div>

  <div class="campo">
    <input type="radio" id="casaPropia" name="tipoVivienda" value="Casa propia" required>
    <label for="casaPropia">Casa propia</label>
    <input type="radio" id="casaRentada" name="tipoVivienda" value="Rentada">
    <label for="casaRentada">Rentada</label>
  </div>

  <div class="campo">
    <label for="niveles">¿Cuántos niveles tiene la casa?</label>
    <input type="text" id="niveles" name="niveles" class="inputsReporte" placeholder="Niveles de la casa" required>
  </div>

  <div class="campo">
    <label for="niñosEdades">¿Hay niños? ¿Qué edades?</label>
    <input type="text" id="niñosEdades" name="niñosEdades" class="inputsReporte" placeholder="Edades de los niños" required>
  </div>

  </div>

<div class="seccion2">
  <h4>¿Por qué perdió su última mascota?</h4>

  <div class="campo">
    <label>Lo di en adopción</label>
    <input type="radio" id="adopcionSi" name="adopcion" value="Sí" required>
    <label for="adopcionSi">Sí</label>
    <input type="radio" id="adopcionNo" name="adopcion" value="No">
    <label for="adopcionNo">No</label>
  </div>

  <div class="campo">
    <label>Se extravió</label>
    <input type="radio" id="extravioSi" name="extravio" value="Sí" required>
    <label for="extravioSi">Sí</label>
    <input type="radio" id="extravioNo" name="extravio" value="No">
    <label for="extravioNo">No</label>
  </div>

  <div class="campo">
    <label>Me lo robaron</label>
    <input type="radio" id="robaronSi" name="robaron" value="Sí" required>
    <label for="robaronSi">Sí</label>
    <input type="radio" id="robaronNo" name="robaron" value="No">
    <label for="robaronNo">No</label>
  </div>

  <div class="campo">
    <label>Muerte por edad</label>
    <input type="radio" id="muerteEdadSi" name="muerteEdad" value="Sí" required>
    <label for="muerteEdadSi">Sí</label>
    <input type="radio" id="muerteEdadNo" name="muerteEdad" value="No">
    <label for="muerteEdadNo">No</label>
  </div>

  <div class="campo">
    <label>Muerte accidental</label>
    <input type="radio" id="muerteAccidentalSi" name="muerteAccidental" value="Sí" required>
    <label for="muerteAccidentalSi">Sí</label>
    <input type="radio" id="muerteAccidentalNo" name="muerteAccidental" value="No">
    <label for="muerteAccidentalNo">No</label>
  </div>

  <div class="campo">
    <label for="como">¿Cómo?</label>
    <input type="text" id="como" name="como" class="inputsReporte" placeholder="Causa o situación" required>
  </div>

  <div class="campo">
    <label>Muerte por enfermedad</label>
    <input type="radio" id="enfermedadSi" name="enfermedad" value="Sí" required>
    <label for="enfermedadSi">Sí</label>
    <input type="radio" id="enfermedadNo" name="enfermedad" value="No">
    <label for="enfermedadNo">No</label>
  </div>

  <div class="campo">
    <label for="cual">¿Cuál?</label>
    <input type="text" id="cual" name="cual" class="inputsReporte" placeholder="Enfermedad" required>
  </div>

  <div class="campo">
    <label>Eutanasia</label>
    <input type="radio" id="eutanasiaSi" name="eutanasia" value="Sí" required>
    <label for="eutanasiaSi">Sí</label>
    <input type="radio" id="eutanasiaNo" name="eutanasia" value="No">
    <label for="eutanasiaNo">No</label>
  </div>

  <div class="campo">
    <label for="porque">¿Por qué?</label>
    <input type="text" id="porque" name="porque" class="inputsReporte" placeholder="Motivo" required>
  </div>

  <div class="campo">
    <label for="parteCasa">¿Qué parte de la casa ocuparía el ejemplar?</label>
    <input type="text" id="parteCasa" name="parteCasa" class="inputsReporte" placeholder="Espacio en casa" required>
  </div>

  <div class="campo">
    <label>Acepta firmar un contrato de adopción</label>
    <input type="radio" id="contratoSi" name="contratoAdopcion" value="Sí" required>
    <label for="contratoSi">Sí</label>
    <input type="radio" id="contratoNo" name="contratoAdopcion" value="No">
    <label for="contratoNo">No</label>
  </div>

  <div class="campo">
    <label>Acepta visitas de seguimiento</label>
    <input type="radio" id="seguimientoSi" name="seguimiento" value="Sí" required>
    <label for="seguimientoSi">Sí</label>
    <input type="radio" id="seguimientoNo" name="seguimiento" value="No">
    <label for="seguimientoNo">No</label>
  </div>

  <div class="campo">
    <label>Envío semanal de fotos</label>
    <input type="radio" id="fotosSi" name="envioFotos" value="Sí" required>
    <label for="fotosSi">Sí</label>
    <input type="radio" id="fotosNo" name="envioFotos" value="No">
    <label for="fotosNo">No</label>
  </div>

  <div class="campo">
    <label>Cubre costo de esterilización</label>
    <input type="radio" id="esterilizacionSi" name="esterilizacion" value="Sí" required>
    <label for="esterilizacionSi">Sí</label>
    <input type="radio" id="esterilizacionNo" name="esterilizacion" value="No">
    <label for="esterilizacionNo">No</label>
  </div>

<strong>Se le hace saber que el maltrato y crueldad animal esta penado, como lo establecen los
  articulos 309, 310 y 311 del codigo penal del estado de Michoacan
</strong>

<p>Tener en cuenta que el maltrato consiste en:</p>

<p>
-Tenerlos sin agua y alimento <br>
-Mantenerlos atados durante mucho tiempo <br>
-Dejarlos a la interperie rodeaos de heces, basura o desperdicios<br>
-Confrontarlos por diversion<br>
-Falta de Aseo<br>
-Enfermedades sin tratamiento o auxilio Medico<br>
-Confinamiento en jaulas o comportamientos damasiado pequeños o compartidos con mas animales<br>
-Mas animales<br>
-Abandonar al ejemplar<br>
</p>

<div class="campoFirma">
<div class="firmaCentro">
<div class="lineaFirma"></div>
<label>Por el instituto moreliano de proteccion Animal <br> (Nombre y firma)</label>
</div>

<div class="firmaCentro">
<div class="lineaFirma"></div>
<label>Propietario o Poseedor del Ejemplar <br> (Nombre y firma)</label>
</div>
</div>


</div>


</div>


<style>
body {
  .print-spacer {
    display: block;
    height: var(--print-spacer-height, 25px); /* valor por defecto */
  }
}
  .ContornoReporte {
    text-align: left;
    background-color: #fff;
    max-width: 100%;
    padding: 20px;
    box-sizing: border-box;
  }

.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
  /* arriba, derecha, abajo, izquierda */
}

  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 10px;
    box-sizing: border-box;
  }


    .encabezado3 {
    text-align: left;
    padding: 5px;
  }


  .encabezado3 label {
    font-weight: bold;

  }

    .inputsReporte {
    flex: 1;
    border: none;
    border-bottom: 0.5px solid black;
    outline: none;
    font-size: 13px;
    padding: 4px;
    box-sizing: border-box;
    margin-left: 1px;
  }

  .logo {
    max-width: 15%;
  }

  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    gap: 10px;
  }
  .campo label {
    width: 120px; 
    font-size: 13px;
  }

  .campoAnidado{
        display: flex;
    align-items: center;
    margin-bottom: 1px;
  }

    .campoAnidado label{
    width: 40px; 
    font-size: 12px;
  }

  
.campoFirma{
margin-top: 30px; 
display: flex; 
justify-content: space-between;
}

  .firmaCentro {
  text-align: center;
  margin-top: 30px;
}

.lineaFirma {
  border-bottom: 1px solid black;
  width: 250px; /* ancho de la línea */
  margin: 0 auto 8px auto; /* centra horizontal y deja espacio abajo */
  height: 20px;
}
  
  

 @media print {
  .seccion2 {
    page-break-before: always;
  }
}

@media print {
  input::placeholder {
    color: transparent;
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
  
p{
  color: black;
}
  
</style>

@endsection
