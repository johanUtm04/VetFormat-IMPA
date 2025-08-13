@extends('layouts.PlantillaFormatos')
@section('title', 'Valoracion Al Examen Medico Fisico Y Clinico')
@section('MessageHeader')
  Valoracion Al Examen Medico Fisico Y Clinico
@endsection

@section('content')
<div class="ContornoReporte">

  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Valoracion Al Examen Medico Fisico Y Clinico</h2>
    <div class="encabezado3">
      <label>Forma 009</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>


  <div class="seccion1">
    <h3 class="subtitulos">Datos del Propietario</h3>
    <div class="campo">
      <label>Nombre:</label>
      <input type="text" class="inputsReporte" required>
    </div>
    <div class="campo">
      <label>Dirección:</label>
      <input type="text" class="inputsReporte" required>
    </div>
    <div class="campo">
      <label>Teléfono Fijo:</label>
      <input type="tel" class="inputsReporte" required>
    </div>
    <div class="campo">
      <label>Teléfono Móvil:</label>
      <input type="tel" class="inputsReporte" required>
    </div>
  </div>

  <div class="seccion2">
    <h3 class="subtitulos">Datos del Paciente</h3>
    <div class="campo">
      <label>Nombre:</label>
      <input type="text" class="inputsReporte" required>

      <label>Especie:</label>
      <input type="text" class="inputsReporte" required>

      <label>Raza:</label>
      <input type="text" class="inputsReporte" required>
    </div>

    <div class="campo">
      <label>Sexo:</label>
      <input type="radio" id="sexo_h" name="sexo" required>
      <label for="sexo_h">H</label>
      <input type="radio" id="sexo_m" name="sexo">
      <label for="sexo_m">M</label>

      <label>Edad:</label>
      <input type="text" class="inputsReporte" required>

      <label>Peso:</label>
      <input type="text" class="inputsReporte" required>

      <label>Color:</label>
      <input type="text" class="inputsReporte" required>
    </div>

    <div class="campo">
      <label>Talla:</label>
      <input type="radio" id="talla_ch" name="talla" required>
      <label for="talla_ch">CH</label>
      <input type="radio" id="talla_m" name="talla">
      <label for="talla_m">M</label>
      <input type="radio" id="talla_g" name="talla">
      <label for="talla_g">G</label>

      <label>Otras características:</label>
      <input type="text" class="inputsReporte">
    </div>

    <div class="campo">
      <label>Historia General:</label>
      <input type="text" class="inputsReporte" required>
    </div>

    <div class="campo">
      <label>Hábitat:</label>
      <input type="text" class="inputsReporte" required>
    </div>

    <div class="campo">
      <label>Reproducción:</label>
      <input type="radio" id="reproduccion_si" name="reproduccion" required>
      <label for="reproduccion_si">Sí</label>
      <input type="radio" id="reproduccion_no" name="reproduccion">
      <label for="reproduccion_no">No</label>

      <label>Esterilización:</label>
      <input type="radio" id="esterilizacion_si" name="esterilizacion" required>
      <label for="esterilizacion_si">Sí</label>
      <input type="radio" id="esterilizacion_no" name="esterilizacion">
      <label for="esterilizacion_no">No</label>

      <label>Fecha:</label>
      <input type="date" class="inputsReporte" required>
    </div>

    <div class="campo">
      <label>Enfermedades o cirugías previas:</label>
      <input type="text" class="inputsReporte" required>
    </div>
  </div>

  <div class="seccion3">
    <h3 class="subtitulos">Historia Clínica</h3>
    <textarea class="textAreaReporte" rows="3"></textarea>
  </div>



    <div class="seccion4">
      <h3 class="subtitulos">Examen Clínico</h3>

      <div class="campo">
        <label>FC:</label>
        <input type="text" class="inputsReporte" required>

        <label>Temperatura:</label>
        <input type="number" step="0.1" class="inputsReporte" required>

        <label>Palpitación abdominal:</label>
        <input type="text" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>FR:</label>
        <input type="text" class="inputsReporte" required>

        <label>Hidratación:</label>
        <input type="text" class="inputsReporte" required>

        <label>Sonidos abdominales:</label>
        <input type="text" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>Pulso:</label>
        <input type="text" class="inputsReporte" required>

        <label>Mucosas:</label>
        <input type="text" class="inputsReporte" required>

        <label>Campos pulmonares:</label>
        <input type="text" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>TLLC:</label>
        <input type="text" class="inputsReporte" required>

        <label>Linfonodos:</label>
        <input type="text" class="inputsReporte" required>

        <label>Otros:</label>
        <input type="text" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>Peso:</label>
        <input type="number" step="0.1" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>RT:</label>
        <input type="radio" id="rt_pos" name="rt" required>
        <label for="rt_pos">(+) </label>
        <input type="radio" id="rt_neg" name="rt">
        <label for="rt_neg">(-)</label>

        <label>RD:</label>
        <input type="radio" id="rd_pos" name="rd" required>
        <label for="rd_pos">(+) </label>
        <input type="radio" id="rd_neg" name="rd">
        <label for="rd_neg">(-)</label>
      </div>

      <div class="campo">
        <label>Observaciones:</label>
        <textarea class="textAreaReporte" rows="2"></textarea>
      </div>
    </div>


  <div class="hoja2">
    <br> <br> <br>
    <div class="seccion5">
      <h3 class="subtitulos">Examen Fisico</h3>

      <div class="campo">
        <label>Ojos:</label>
        <input type="text" class="inputsReporte" required>

        <label>Nariz:</label>
        <input type="number" step="0.1" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>Boca:</label>
        <input type="text" class="inputsReporte" required>

        <label>Orejas:</label>
        <input type="text" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>Cuello:</label>
        <input type="text" class="inputsReporte" required>

        <label>Tórax:</label>
        <input type="text" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>Abdomen:</label>
        <input type="text" class="inputsReporte" required>

        <label>Dorso:</label>
        <input type="text" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>Cola:</label>
        <input type="text" class="inputsReporte" required>

        <label>Genitales:</label>
        <input type="text" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>Extremidades ant. :</label>
        <input type="text" class="inputsReporte" required>

        <label>Extremidades post. :</label>
        <input type="text" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>Observaciones:</label>
        <textarea class="textAreaReporte" rows="2"></textarea>
      </div>
    </div>

    <div class="seccion6">
      <h3 class="subtitulos">Diagnóstico Presuntivo</h3>

      <div class="campo">
        <label>1:</label>
        <input type="text" class="inputsReporte" required>

        <label>2:</label>
        <input type="number" step="0.1" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>3:</label>
        <input type="text" class="inputsReporte" required>

        <label>4:</label>
        <input type="text" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>5:</label>
        <input type="text" class="inputsReporte" required>

        <label>6:</label>
        <input type="text" class="inputsReporte" required>
      </div>

      <div class="campo">
        <label>Observaciones:</label>
        <textarea class="textAreaReporte" rows="2"></textarea>
      </div>
    </div>

    <div class="seccion7">
      <h3 class="subtitulos">Diagnóstico Final</h3>
      <div class="campo">
        <textarea class="textAreaReporte" rows="2"></textarea>
      </div>
    </div>

    <div class="seccion7">
      <h3 class="subtitulos">Tratamiento</h3>
      <div class="campo">
        <textarea class="textAreaReporte" rows="2"></textarea>
      </div>
    </div>

  </div>
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>

</div>

<style>
body {
  .print-spacer {
    display: block;
    height: var(--print-spacer-height, 250px); /* valor por defecto */
  }
}
  .ContornoReporte {
    text-align: left;
    background: #fff;
    max-width: 100%;
    padding: 20px;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }

  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #fff;
    padding: 10px;
    box-sizing: border-box;
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

  .tituloformato {
    border: 3px solid black;
  }

  .subtitulos {
    text-align: center;
    font-size: 15px;
    border: 2px solid black;
  }
  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 4px;
    flex-wrap: wrap;
  }

  .campo label {
    width: 120px;
    font-size: 10px;
    font-weight: bold;
    margin-right: 5px;
  }

.inputsReporte {
  flex: 1;
  border: none;
  border-bottom: 0.5px solid black;
  outline: none;
  font-size: 10px;       /* antes 12px */
  padding: 2px 4px;       /* menos padding */
  box-sizing: border-box;
  margin-left: 5px;
  min-width: 80px;        /* opcional: menor ancho mínimo */
  font-family: Arial, sans-serif;
}


  .campo input[type="radio"] {
    margin: 0 5px 0 2px;
  }

  .textAreaReporte {
    width: 100%;
    resize: none;
    border: 0.5px solid black;
    padding: 5px;
    font-size: 12px;
    font-family: Arial, sans-serif;
  }

  @media print {
    .hoja2 {
      page-break-before: always;
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
