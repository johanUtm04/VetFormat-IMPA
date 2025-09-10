@extends('layouts.PlantillaFormatos')

@section('title', 'Resguardo de Ejemplares')

@section('MessageHeader')
  Resguardo de Ejemplares
@endsection

@section('content')

<div class="ContornoReporte">

  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Resguardo de Ejemplares</h2>
    <div class="encabezado3">
      <label>Forma 021</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>

  <div class="hoja1">

    <h3 class="subtitulo">Datos de la Diligencia</h3>
    <p>En la ciudad de Morelia, Michoacán, siendo las <input type="text" class="inputtexto"> horas del día <input type="text" class="inputtexto"> de <input type="text" class="inputtexto"> del año 20<input type="text" class="inputtexto">, los suscritos CC <input type="text" class="inputtexto"> y <input type="text" class="inputtexto">, con cargo de <input type="text" class="inputtexto"> y <input type="text" class="inputtexto"> respectivamente, identificados con credenciales emitidas por el H. Ayuntamiento de Morelia, acreditados como trabajadores y que nos faculta para realizar la función de <strong>INSPECCIÓN, VERIFICACIÓN Y SUPERVISIÓN</strong> del INSTITUTO MORELIANO DE PROTECCIÓN ANIMAL. Nos constituimos en calle <input type="text" class="inputtexto">, número <input type="text" class="inputtexto">, colonia <input type="text" class="inputtexto"> de esta ciudad capital a fin de:</p>

    <p>I. Dar cumplimiento a la verificación del reporte número <input type="text" class="inputtexto">, de fecha ______.</p>
    <p>II. (Si aplica) Dar atención a la vista realizada por la dirección de inspección y vigilancia representada en este acto <input type="text" class="inputtexto">, con cargo <input type="text" class="inputtexto">, quien informa que se detecta que: <input type="text" class="inputtexto"></p>

    <p>Acto seguido procedemos a entrevistar a C. <input type="text" class="inputtexto">, quien dice ser:</p>

    <div class="checkbox-group">
      <label><input type="checkbox"> Propietario</label>
      <label><input type="checkbox"> Poseedor</label>
    </div>

    <p>Del ejemplar o ejemplares de la presente acción, quien se identifica con <input type="text" class="inputtexto"> número <input type="text" class="inputtexto">, o <input type="checkbox"> No se identifica por no considerar importante hacerlo o no contar con documento idóneo para ello en este momento.</p>

    <p>Le hacemos saber el motivo de nuestra presencia y se le requiere conforme al artículo 110 del Código de Justicia Administrativa del Estado de Michoacán de Ocampo a designar dos testigos:</p>

    <div class="checkbox-group">
      <label><input type="checkbox"> Desea señalar testigos</label>
    </div>

    <p>1 <input type="text" class="inputtexto"> INE <input type="text" class="inputtexto"> Firma <input type="text" class="inputtexto"></p>
    <p>2 <input type="text" class="inputtexto"> INE <input type="text" class="inputtexto"> Firma <input type="text" class="inputtexto"></p>

    <label><input type="checkbox"> No desea señalar testigos</label>

    <h3 class="subtitulo">Condiciones del Inmueble y Ejemplares</h3>
    <p>Se le solicita acceso voluntario al inmueble a fin de constatar condiciones del o los ejemplares y del inmueble o entorno donde habitan el ejemplar o ejemplares materia de la presente actuación. Firma de consentimiento <input type="text" class="inputtexto"></p>

    <strong>Condiciones del inmueble:</strong>
    <div class="checkbox-group">
      <label><input type="checkbox"> Habilitado</label>
      <label><input type="checkbox"> Deshabitado</label>
      <label><input type="checkbox"> Heces</label>
      <label><input type="checkbox"> Orina</label>
      <label><input type="checkbox"> Basura</label>
      <label><input type="checkbox"> Deshechos</label>
      <label><input type="checkbox"> Huele mal</label>
    </div>

    <p>Por lo que se advierte de la presente que se encuentran las siguientes anomalías:</p>
    <textarea></textarea>

    <strong>Condiciones de los ejemplares:</strong>
    <div class="checkbox-group">
      <label><input type="checkbox"> Un ejemplar a la vista</label>
      <label><input type="checkbox"> Más de uno ¿Cuántos? <input type="text" class="inputtexto"></label>
    </div>

    <div class="checkbox-group" style="flex-wrap: wrap;">
      <label><input type="checkbox"> Encadenado</label>
      <label><input type="checkbox"> Correa corta</label>
      <label><input type="checkbox"> Collar apretado</label>
      <label><input type="checkbox"> Bajo intemperie</label>
      <label><input type="checkbox"> En azotea</label>
      <label><input type="checkbox"> Patio trasero</label>
      <label><input type="checkbox"> Amarrado fuera</label>
      <label><input type="checkbox"> Interior domicilio</label>
      <label><input type="checkbox"> Otros <input type="text" class="inputtexto"></label>
    </div>

  </div>

  <div class="hoja2">

    <p>Lo anterior constituye faltas. <strong>Como medida de seguridad</strong> para proteger la integridad de los ejemplares, la salud pública y el orden e interés social y general...</p>

    <h3 class="subtitulo">Inventario de Ejemplares</h3>

    <label><input type="checkbox"> Un ejemplar</label>
    <p>Descripción:
      <label><input type="checkbox"> Perro</label>
      <label><input type="checkbox"> Gato</label>
      Raza <input type="text" class="inputtexto">, Sexo <input type="text" class="inputtexto">, Edad aprox. <input type="text" class="inputtexto">, Color <input type="text" class="inputtexto">, Característica especial <input type="text" class="inputtexto">, Condición corporal:
      <select class="inputtexto">
        <option>1/5</option>
        <option>2/5</option>
        <option>3/5</option>
        <option>4/5</option>
        <option>5/5</option>
      </select>
    </p>

    <label><input type="checkbox"> Más de un ejemplar ¿Cuántos? <input type="text" class="inputtexto"></label>

      </div> 
    <p>Acto seguido, se le otorga el uso de la voz, quien desea manifestar que:</p>
    <textarea class="textareacorto"></textarea>

    <p>Observaciones:</p>
    <textarea class="textareacorto"></textarea>

    <p>Se hace entrega del original y se le informa que cuenta con 3 días hábiles para acudir al Instituto Moreliano de Protección Animal...</p>

    <h3 class="subtitulos">Personal Actuante del Instituto Moreliano de Protección Animal</h3>
    <table style="width: 100%; margin-top: 30px;">
      <tr>
        <td style="text-align: center;"><br><br>______________________________<br>Nombre y Cargo</td>
        <td style="text-align: center;"><br><br>______________________________<br>Nombre y Cargo</td>
      </tr>
    </table>

    <h3 class="subtitulos">Persona con quien se entendió la Diligencia</h3>
    <table style="width: 100%; margin-top: 30px;">
      <tr>
        <td style="text-align: center;">Testigo<br><br><br>______________________________<br>Nombre</td>
        <td style="text-align: center;">Testigo<br><br><br>______________________________<br>Nombre</td>
      </tr>
    </table>

    <p>La presente hoja de firmas corresponde al formato de resguardo de ejemplares de fecha <input type="text" class="inputtexto"> levantada en <input type="text" class="inputtexto"></p>

  </div>
</div>
</div>
<style>

.ContornoReporte{width:100%;padding:20px 80px;box-sizing:border-box;background:white;border:5px solid; border-image:linear-gradient(135deg,#7F00FF,#E100FF) 1; border-radius:20px;}
.encabezado {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  box-sizing: border-box;
}


  .encabezado3 {
    text-align: left;
    padding: 5px;
  }

.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
}
p{
  color: #000;
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
}

.subtitulos {
  text-align: center;
  margin: 20px 0 10px 0;
  font-weight: bold;
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
  border: 1px solid #000;
  outline: none;
  font-size: 12px;
  padding: 6px;
  box-sizing: border-box;
  margin-left: 5px;
  min-width: 100px;
}

.campo input[type="radio"] {
  margin: 0 5px;
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
  padding: 5px;
  font-size: 12px;
}

textarea {
  width: 100%;
  border: 1px solid #000;
  padding: 6px;
  box-sizing: border-box;
  resize: none;
  font-size: 12px;
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

.page-break {
  page-break-before: always;
}

@media print {
body {
  .print-spacer {
    display: block;
    height: var(--print-spacer-height, 240px); 
  }
  .ContornoReporte{border:0 !important; border-image:none !important; box-shadow:none !important;}

}
  }

  .ContornoReporte {
    border: none;
    padding: 0;
    margin: 0;
  }

  p, label, h3 {
    margin: 3px 0;
  }

  .inputsReporte, textarea, input[type="text"] {
    font-size: 11px;
    padding: 4px;
  }

  textarea {
    height: 50px;
  }

  .checkbox-group label {
    font-size: 11px;
  }

  .firmaCentro, .lineaFirma {
    page-break-inside: avoid;
  }

  .page-break {
    page-break-before: always;
  }

  .ContornoReporte {
    font-size: 11px;
  }

  .encabezado {
    align-items: flex-start;
  }

  .logo {
    max-width: 80px;
  }

  .subtitulo, .subtitulos {
    text-align: center;
    font-size: 12px;
    margin: 6px 0;
  }

  table {
    margin: 10px 0;
  }

  .firma {
    width: 50%;
    margin: 20px auto;
    text-align: center;
  }

  .lineaFirma {
    border-bottom: 1px solid black;
    height: 16px;
    margin-bottom: 6px;
  }
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
  .inputtexto {
  border: none;
  border-bottom: 1px solid black;
  font-size: 12px;
  width: auto;
  min-width: 50px;
  padding: 2px 4px;
  margin: 0 4px;
  background-color: transparent;
  outline: none;
}


  @media print {
    .hoja2, .hoja3 { page-break-before: always; }
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
