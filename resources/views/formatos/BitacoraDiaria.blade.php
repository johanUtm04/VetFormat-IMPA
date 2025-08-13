{{-- Extiende la plantilla base que contiene la estructura general del sitio --}}
@extends('layouts.PlantillaFormatos')

{{-- Define el título de la página que se usará en la etiqueta <title> --}}
@section('title', 'Bitacora Diaria')

{{-- Sección que se insertará en un espacio reservado llamado 'MessageHeader' dentro de la plantilla --}}
@section('MessageHeader')
Bitacora Diaria
@endsection

{{-- Inicio de la sección de contenido principal de la vista --}}
@section('content')

{{-- Contenedor principal que da formato y espacio al reporte --}}
<div class="ContornoReporte">

  {{-- ENCABEZADO CON LOGO Y DATOS --}}
  <div class="encabezado">
    {{-- Imagen con ruta al archivo dentro de la carpeta public/images --}}
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    
    {{-- Título central del formato --}}
    <h2 class="tituloformato nombre_formato">Bitacora Diaria</h2>

    
    {{-- Sección de datos de encabezado al lado derecho --}}
    <div class="encabezado3">
      <label>Formato 002</label><br>
      <label>Reporte no_______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>

  <div class="campo">
    <label for="nombreUsuario">Nombre/ #Registro:</label>
    <input type="text" id="nombreUsuario" name="nombreUsuario" class="inputsReporte" placeholder="Ingresa tu nombre" required>
  </div>

  {{-- Y así sucesivamente cada campo es similar: etiqueta + input para recolectar datos --}}

  <div class="campo">
    <label for="numeroReporte"># De Reporte:</label>
    <input type="text" id="numeroReporte" name="numeroReporte" class="inputsReporte" placeholder="Ingresa número de reporte" required>
  </div>

  <div class="campo">
    <label for="edadMeses">Edad (Meses):</label>
    <input type="text" id="edadMeses" name="edadMeses" class="inputsReporte" placeholder="Ingresa la edad en meses" required>
  </div>

  <div class="campo">
    <label for="folio"># Folio:</label>
    <input type="text" id="folio" name="folio" class="inputsReporte" placeholder="Ingresa el folio" required>
  </div>

  {{-- Grupo de radio buttons para seleccionar talla --}}
  <div class="campo radios">
    <label>Talla:</label>
    <input type="radio" id="tallaChica" name="talla" value="Chica" required>
    <label for="tallaChica">Chica</label>
    <input type="radio" id="tallaMediana" name="talla" value="Mediana">
    <label for="tallaMediana">Mediana</label>
    <input type="radio" id="tallaGrande" name="talla" value="Grande">
    <label for="tallaGrande">Grande</label>
  </div>

  {{-- Campos de captura simples como raza, peso, etc. --}}
  <div class="campo">
    <label for="raza">Raza:</label>
    <input type="text" id="raza" name="raza" class="inputsReporte" placeholder="Ingresa la raza" required>
  </div>

  {{-- Radio buttons para especie --}}
  <div class="campo radios">
    <label>Especie:</label>
    <input type="radio" id="especieCanino" name="especie" value="Canino" required>
    <label for="especieCanino">Canino</label>
    <input type="radio" id="especieFelino" name="especie" value="Felino">
    <label for="especieFelino">Felino</label>
  </div>

  {{-- Radio buttons para sexo --}}
  <div class="campo radios">
    <label>Sexo:</label>
    <input type="radio" id="sexoMacho" name="sexo" value="Macho" required>
    <label for="sexoMacho">Macho</label>
    <input type="radio" id="sexoHembra" name="sexo" value="Hembra">
    <label for="sexoHembra">Hembra</label>
  </div>

  {{-- Campos de texto para peso, estado de celo, gestación, lactancia, temperatura, FR y FC --}}
  <div class="campo">
    <label for="peso">Peso:</label>
    <input type="text" id="peso" name="peso" class="inputsReporte" placeholder="Ingresa el peso" required>
  </div>

  <div class="campo">
    <label for="celo">CELO:</label>
    <input type="text" id="celo" name="celo" class="inputsReporte" placeholder="Ingresa estado de celo" required>
  </div>

  <div class="campo">
    <label for="gestacion">GESTACIÓN:</label>
    <input type="text" id="gestacion" name="gestacion" class="inputsReporte" placeholder="Ingresa estado de gestación" required>
  </div>

  <div class="campo">
    <label for="lactando">LACTANDO:</label>
    <input type="text" id="lactando" name="lactando" class="inputsReporte" placeholder="Ingresa estado de lactancia" required>
  </div>

  <div class="campo">
    <label for="temperatura">T°:</label>
    <input type="text" id="temperatura" name="temperatura" class="inputsReporte" placeholder="Temperatura" required>
  </div>

  <div class="campo">
    <label for="fr">FR: Respiraciones /min</label>
    <input type="text" id="fr" name="fr" class="inputsReporte" placeholder="Frecuencia respiratoria" required>
  </div>

  <div class="campo">
    <label for="fc">FC: Latidos/min</label>
    <input type="text" id="fc" name="fc" class="inputsReporte" placeholder="Frecuencia cardiaca" required>
  </div>

  {{-- Subtítulo para la bitácora de alimentación --}}
  <h4>Bitácora de alimentación</h4>

  {{-- Campos para capturar marca, cantidad de alimento y dieta especial --}}
  <div class="campo">
    <label for="marcaAlimento">Marca de alimento:</label>
    <input type="text" id="marcaAlimento" name="marcaAlimento" class="inputsReporte" placeholder="Ingresa marca de alimento" required>
  </div>

  <div class="campo">
    <label for="cantidadIndicada">Cantidad indicada:</label>
    <input type="text" id="cantidadIndicada" name="cantidadIndicada" class="inputsReporte" placeholder="Ingresa cantidad indicada" required>
  </div>

  {{-- Radio buttons para especificar si hay dieta especial --}}
  <div class="campo radios">
    <label>¿Dieta especial?</label>
    <input type="radio" id="dietaSi" name="dietaEspecial" value="Sí" required>
    <label for="dietaSi">Sí</label>
    <input type="radio" id="dietaNo" name="dietaEspecial" value="No">
    <label for="dietaNo">No</label>
  </div>

  <div class="campo">
    <label for="cualDieta">Cuál:</label>
    <input type="text" id="cualDieta" name="cualDieta" class="inputsReporte" placeholder="Especifica la dieta especial" required>
  </div>

  {{-- Textarea para observaciones generales --}}
  <div class="campo">
    <label for="comentarios">Observaciones generales:</label>
    <textarea id="comentarios" name="comentarios" class="inputsReporte" placeholder="Escribe tus comentarios aquí" required></textarea>
  </div>

  {{-- CierreForm --}}
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">



</div>

{{-- ESTILOS EN LÍNEA PARA DAR FORMATO AL REPORTE --}}
<style>
body {
  --print-spacer-height: 0px;
}

  {{-- Estilos del encabezado --}}
  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 10px;
    box-sizing: border-box;
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

  .encabezado3 {
    text-align: left;
    padding: 5px;
  }

  .encabezado3 label {
    font-weight: bold;
  }

  .ContornoReporte {
    text-align: left;
    background-color: white;
    max-width: 100%;
    padding: 20px;
    box-sizing: border-box;
  }

  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
  }

  .campo label {
    width: 180px;
    font-size: 12px;
  }

  .inputsReporte {
    flex: 1;
    border: none;
    border-bottom: 0.5px solid black;
    outline: none;
    font-size: 10px;
    padding: 6px;
    margin-left: 10px;

  }

textarea.inputsReporte {
  height: 25px;
  resize: none;
  overflow: hidden;
}

  .btn-imprimir {
    background: linear-gradient(135deg, #7F00FF, #E100FF);
    color: #fff;
    padding: 14px 25px;
    border: none;
    border-radius: 12px;
    font-size: 14px;
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
    body {
      width: 8.5in;
      height: 7in;
    }

    .ContornoReporte {
  width: 100%;
  padding: 20px 80px;
  box-sizing: border-box;
  background: white;
}

    .btn-imprimir {
      display: none !important;
    }

    .ContornoReporte {
      height: 40%;
    }
  }
</style>

{{-- Cierre de la sección de contenido --}}
@endsection
