@extends('layouts.PlantillaFormatos')
@section('title', 'Atención a Reportes de Ejemplares Agresores')
@section('MessageHeader')
Atención a Reportes de Ejemplares Agresores
@endsection

@section('content')

<div class="ContornoReporte">

  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Atención a Reportes de Ejemplares Agresores</h2>

    <div class="encabezado3">
      <label>Forma 023</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>

<br>
  <h2 class="subtitulo">ATENCIÓN A REPORTES DE EJEMPLARES AGRESORES</h2>

  <p>
    Al Instituto Moreliano de Protección Animal, le corresponde tener en observación por un término de 10 días a ejemplares, que se encuentren en supuesto de haber atacado a una o varias personas u otros animales; a fin de detectar alguna enfermedad zoonótica y evaluar el comportamiento y conducta del ejemplar, por lo cual siendo las 
    <input type="text" class="inputsReporte" /> horas, se da atención al reporte número 
    <input type="text" class="inputsReporte" /> del día 
    <input type="text" class="inputsReporte" /> del mes de 
    <input type="text" class="inputsReporte" /> del año 20
    <input type="text" class="inputsReporte" />. En cuanto al Instituto Moreliano de Protección Animal, entiendo la diligencia con 
    <input type="text" class="inputsReporte"/>, quien se identifica, se le hace saber el motivo de mi visita, por lo que se procede a instrumentar la presente actuación.
  </p>


  <h3 class="subtitulo">Propietario del Ejemplar Agresor</h3>

  <div class="campo">
    <label>Nombre:</label>
    <input type="text" class="inputsReporte" />
  </div>
  <div class="campo">
    <label>Domicilio:</label>
    <input type="text" class="inputsReporte" />
  </div>
  <div class="campo">
    <label>Colonia:</label>
    <input type="text" class="inputsReporte" />
  </div>
  <div class="campo">
    <label>Teléfono:</label>
    <input type="text" class="inputsReporte" />
  </div>

  <p>A fin de realizar el periodo de observación del ejemplar agresor:</p>

  <div class="campo">
    <label><input type="radio" name="lugar_observacion" /> En el Instituto Moreliano de Protección Animal</label>
    <label><input type="radio" name="lugar_observacion" /> En el domicilio del propietario o poseedor</label>
    <label><input type="radio" name="lugar_observacion" /> Mixta (describir fechas)</label>
  </div>
<br>
<br>
  <h3 class="subtitulo">Descripción del Ejemplar</h3>

  <div class="campo">
    <label>Nombre:</label>
    <input type="text" class="inputsReporte" />
  </div>
  <div class="campo">
    <label>Edad:</label>
    <input type="text" class="inputsReporte" />
  </div>
  <div class="campo">
    <label>Especie:</label>
    <input type="text" class="inputsReporte" />
  </div>
  <div class="campo">
    <label>Raza:</label>
    <input type="text" class="inputsReporte" />
  </div>
  <div class="campo">
    <label>Talla:</label>
    <input type="checkbox" /> CH
    <input type="checkbox" /> M
    <input type="checkbox" /> G
  </div>
  <div class="campo">
    <label>Sexo:</label>
    <input type="checkbox" /> H
    <input type="checkbox" /> M
  </div>
  <div class="campo">
    <label>Peso:</label>
    <input type="text" class="inputsReporte" />
  </div>
  <div class="campo">
    <label>Otras Características:</label>
    <textarea class="inputsReporte" style="height:30px;"></textarea>
  </div>
  <br>
  <br>
  <br>
  <div class="campo">
    <label>C.C.:</label>
    <input type="radio" name="cc" /> 1/5
    <input type="radio" name="cc" /> 2/5
    <input type="radio" name="cc" /> 3/5
    <input type="radio" name="cc" /> 4/5
    <input type="radio" name="cc" /> 5/5
  </div>

  <p>A fin de que cumplan con el periodo de observación que:</p>

  <div class="campo">
    <label>Inicia el día:</label>
    <input type="date" />
  </div>
  <div class="campo">
    <label>Concluye el día:</label>
    <input type="date" />
  </div>

  <p>Por haber agredido a:</p>
  <textarea class="inputsReporte" style="height:20px;"></textarea>

  <div class="firmas">
    <div>
      <label>Por el Instituto Moreliano de Protección Animal</label>
      <input type="text" class="inputsReporte" />
    </div>
    <div>
      <label>Propietario y/o poseedor del ejemplar</label>
      <input type="text" class="inputsReporte"/>
    </div>
  </div>

</div>
<style>
  body {
    font-size: 10px;
  }

  p{
    color:rgb(0, 0, 0);
  }
  .subtitulo {
    border: 2px solid black;
    text-align: center;
    padding: 3px;
    margin: 10px 0 5px 0;
    font-weight: bold;
    color: rgb(0, 0, 0);
    font-size: 11px;
  }

.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
  /* arriba, derecha, abajo, izquierda */
}

  .ContornoReporte {
    text-align: left;
    background-color: white;
    max-width: 100%;
    padding: 8px;
    box-sizing: border-box;
  }

  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 6px;
    box-sizing: border-box;
  }

  .encabezado3 label {
    font-weight: bold;
    font-size: 10px;
  }

  .logo {
    max-width: 12%;
  }

  .inputsReporte {
    flex: 1;
    min-width: 70px;
    padding: 4px;
    font-size: 9px;
    border: none;
    border-bottom: 1px solid #000;
    background: transparent;
    outline: none;
    transition: border-color 0.3s ease;
  }

  .inputsReporte:focus {
    border-bottom: 1.5px solid #7F00FF;
  }

  textarea.inputsReporte {
    border: 1px solid black;
    resize: vertical;
    width: 100%;
    padding: 4px;
    font-size: 9px;
  }

  .campo {
    display: flex;
    flex-wrap: wrap;
    gap: 5px 10px;
    margin-bottom: 8px;
    align-items: center;
  }

  .campo label {
    min-width: 80px;
    font-weight: bold;
    font-size: 9.5px;
  }

  .campo input,
  .campo textarea,
  .campo select {
    flex: 1;
    min-width: 100px;
    padding: 4px;
    font-size: 9px;
    border: none;
    border-bottom: 1px solid #000;
    background: transparent;
    outline: none;
  }

  .campo input[type="checkbox"],
  .campo input[type="radio"] {
    flex: initial;
    min-width: initial;
    margin-right: 3px;
  }

  .firmas {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin-top: 10px;
  }

  .firmas div {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 4px;
  }

  .btn-imprimir {
    background: linear-gradient(135deg, #7F00FF, #E100FF);
    color: #fff;
    padding: 8px 14px;
    border: none;
    border-radius: 8px;
    font-size: 12px;
    margin-top: 10px;
    cursor: pointer;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.12);
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
    margin-top: 20px;
  }

  @media (max-width: 600px) {
    .campo {
      flex-direction: column;
      gap: 5px;
    }
    .campo label {
      min-width: auto;
    }
  }

  @media print {
    body {
      margin: 0;
      padding: 0;
      font-size: 9px;
    }
    .btn-imprimir, .botonContenedor {
      display: none;
    }
    .ContornoReporte {
      padding: 0;
    }
    .campo {
      margin-bottom: 5px;
    }
    .subtitulo {
      font-size: 10px;
      margin: 5px 0;
      padding: 3px;
    }
    .tituloformato {
      font-size: 11px;
      padding: 3px;
    }
    .inputsReporte {
      font-size: 8px;
    }
    textarea.inputsReporte {
      font-size: 8px;
    }
  }
</style>

@endsection
