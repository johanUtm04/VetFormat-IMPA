@extends('layouts.PlantillaFormatos')
@section('title', 'Resolución Respecto de Ejemplares Agresores')
@section('MessageHeader')
Resolución Respecto de Ejemplares Agresores
@endsection

@section('content')

<div class="ContornoReporte">

  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Resolución Respecto de Ejemplares Agresores</h2>

    <div class="encabezado3">
      <label>Forma 024</label> <br>
      <label>Reporte no______</label> <br>
      <label>Fecha___________</label>
    </div>
  </div>
      {{-- FORMULARIO --}}
  <form method="POST" action="{{ route('guardar.formato') }}">
  {{-- Hoja 1 --}}
  <div class="hoja1">
  <p>
    Corresponde al Instituto Moreliano de Protección Animal, tener en observación por un término de 10 días a los animales que se encuentren en supuesto de haber atacado a una o varias personas y/o animales, a fin de descartar enfermedad zoonótica y evaluar su conducta y comportamiento.
  </p>

  <h3 class="subtitulo">Datos del Propietario</h3>

  <div class="campo">
    <label>Nombre:</label>
    <input type="text" class="input-largo" />
  </div>

  <div class="form-row">
    <label>Domicilio:</label>
    <input type="text" class="input-largo" />
  </div>

  <div class="form-row">
    <label>Colonia:</label>
    <input type="text" class="input-largo" />
  </div>

  <div class="form-row">
      <label>Teléfono:</label>
    <input type="text" class="input-largo" />
  </div>

  <h3 class="subtitulo">Descripción del Ejemplar</h3>

  <div class="form-row">
    <label>Nombre:</label>
    <input type="text" class="input-largo" />
  </div>

    <div class="form-row">
    <label>Especie:</label>
    <input type="text" class="input-largo" />
  </div>

 <div class="form-row">
    <label>Raza:</label>
    <input type="text" class="input-largo" />
  </div>

  <div class="form-row">
    <label>Sexo:</label>
    <label><input type="checkbox" /> H</label>
    <label><input type="checkbox" /> M</label>
  </div>

  <div class="form-row">
    <label>Otras Características:</label>
    <input type="text" class="input-largo" />
  </div>

  <div class="form-row">
    <label>Edad:</label>
    <input type="text" class="input-corto" />
  </div>

  <div class="form-row">
    <label>Talla:</label>
    <label><input type="checkbox" /> CH</label>
    <label><input type="checkbox" /> M</label>
    <label><input type="checkbox" /> G</label>
  </div>

  <div class="form-row">
    <label>Peso:</label>
    <input type="text" class="input-corto" />
  </div>

  <div class="form-row">
    <label>Color:</label>
    <input type="text" class="input-largo" />
  </div>

  <p>El cual se encontraba bajo observación por:</p>
  <textarea class="textarea-largo"></textarea>
  <div class="hoja2"> 
  <p>Haber agredido a:</p>
  <textarea class="textarea-largo"></textarea>
  </div>


  <h3 class="subtitulo">Dictamen</h3>

  <p>
    Por lo que una vez descartada enfermedad zoonótica y haber resultado apto para reintegrarse a su familia o a la comunidad, en el dictamen de conducta y comportamiento:
  </p>

  <p><strong>DEVUÉLVASE EJEMPLAR</strong>, quedando apercibido respecto de la reincidencia y sometido a dar cumplimiento con las siguientes medidas:</p>

  <div class="form-row">
    <label><input type="checkbox" /> No mantener atado</label>
  </div>
  <div class="form-row">
    <label><input type="checkbox" /> Colocar a ejemplar o ejemplares en un lugar donde puedan cubrirse de las inclemencias del tiempo</label>
  </div>
  <div class="form-row">
    <label><input type="checkbox" /> Esterilizar</label>
    <label>Fecha de esterilización:</label>
    <input type="date" class="input-mediano" />
  </div>
  <div class="form-row">
    <label><input type="checkbox" /> Llevar a atención médica veterinaria</label>
  </div>
  <div class="form-row">
    <label><input type="checkbox" /> Realizar esquema de salud preventivo y asentar en cartilla de vacunación</label>
  </div>
  <div class="form-row">
    <label><input type="checkbox" /> No dejar salir a la vía pública sin correa y cadenas y solo bajo supervisión</label>
  </div>
  <div class="form-row">
    <label><input type="checkbox" /> Recoger sus heces, limpieza en áreas</label>
  </div>
  <div class="form-row">
    <label><input type="checkbox" /> Proveer de agua limpia diaria y alimento suficiente y necesario</label>
  </div>
  <div class="form-row">
    <label><input type="checkbox" /> Sacar a pasear</label>
  </div>
  <div class="form-row">
    <label><input type="checkbox" /> Llevar a estética y baño para cuidado de piel y pelaje</label>
  </div>
  <div class="form-row">
    <label><input type="checkbox" /> Cambiar de espacio</label>
  </div>
  <div class="form-row">
    <label>Otro (especificar):</label>
    <input type="text" class="input-largo" />
  </div>

  <p><strong>Morelia 2024-2027</strong></p>

  <h3 class="subtitulo">No Procedente</h3>

  <div class="form-row">
    <label><input type="checkbox" /> Se le hace saber al ciudadano propietario o poseedor del ejemplar agresor que NO ES PROCEDENTE LA DEVOLUCIÓN DEL EJEMPLAR por lo siguiente:</label>
  </div>

  <div class="form-row">
    <label><input type="checkbox" /> Presentó sintomatología correspondiente a una enfermedad zoonótica (¿Cuál?):</label>
    <input type="text" class="input-largo" />
  </div>

  <div class="form-row">
    <label><input type="checkbox" /> Resultó negativo el dictamen de conducta y comportamiento</label>
  </div>

  <div class="form-row">
    <label><input type="checkbox" /> No cumplió el propietario o poseedor del ejemplar agresor con los requisitos que acrediten la legal procedencia de la obtención del ejemplar y por no contar con las condiciones de bienestar animal en el domicilio señalado</label>
  </div>

<div class="firmas">
  <div>
    <label>Por el Instituto Moreliano de Protección Animal</label>
    <div class="linea-firma"></div>
  </div>
  <div>
    <label>Propietario y/o poseedor del ejemplar</label>
    <div class="linea-firma"></div>
  </div>
</div>
</div>
</div>

  {{-- CierreForm --}}
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>
</div>

<style>
body {
  .print-spacer {
    display: block;
    height: var(--print-spacer-height, 20px); /* valor por defecto */
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
    background-color: #fff;
    padding: 10px;
    box-sizing: border-box;
  }

  .encabezado3 label {
    font-weight: bold;
  }

  .logo {
    max-width: 15%;
    height: auto;
  }

  .encabezado3 {
    text-align: left;
    padding: 5px;
  }

  .subtitulo {
    border: 2px solid black;
    text-align: center;
    padding: 3px;
    margin: 10px 0 5px 0;
    font-weight: bold;
    color: rgb(0, 0, 0);
    font-size: 16px;
  }


  .campo,
  .form-row {
    margin-bottom: 10px;
  }

  label {
    margin-right: 5px;
  }

  input[type="text"],
  input[type="date"],
  textarea {
    border: 1px solid #000;
    padding: 5px;
    font-size: 1em;
  }

  input.input-corto {
    width: 80px;
  }

  input.input-mediano {
    width: 150px;
  }

  input.input-largo {
    width: 100%;
  }

  textarea.textarea-largo {
    width: 100%;
    height: 80px;
    resize: vertical;
  }

  .firmas {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
  }

  .firmas > div {
    width: 48%;
  }
@media print {
  .hoja2, .hoja3 { page-break-before: always; }
}



.firmas {
  display: flex;
  justify-content: space-between;
  margin-top: 30px;
  gap: 10px;
}

.firmas > div {
  flex: 1;
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.firmas label {
  font-weight: bold;
  font-size: 10px;
}

.linea-firma {
  border-bottom: 1px solid #000;
  height: 20px;
  margin-top: 5px;
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
    color: #000;
  }

</style>

@endsection
