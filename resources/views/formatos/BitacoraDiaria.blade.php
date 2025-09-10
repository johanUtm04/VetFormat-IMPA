@extends('layouts.PlantillaFormatos')

@section('title', 'Bitacora Diaria')

@section('MessageHeader')
Bitacora Diaria
@endsection

@section('content')

<div class="ContornoReporte">

  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    
    <h2 class="tituloformato nombre_formato">Bitacora Diaria</h2>

    
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

  <div class="campo radios">
    <label>Talla:</label>
    <input type="radio" id="tallaChica" name="talla" value="Chica" required>
    <label for="tallaChica">Chica</label>
    <input type="radio" id="tallaMediana" name="talla" value="Mediana">
    <label for="tallaMediana">Mediana</label>
    <input type="radio" id="tallaGrande" name="talla" value="Grande">
    <label for="tallaGrande">Grande</label>
  </div>

  <div class="campo">
    <label for="raza">Raza:</label>
    <input type="text" id="raza" name="raza" class="inputsReporte" placeholder="Ingresa la raza" required>
  </div>

  <div class="campo radios">
    <label>Especie:</label>
    <input type="radio" id="especieCanino" name="especie" value="Canino" required>
    <label for="especieCanino">Canino</label>
    <input type="radio" id="especieFelino" name="especie" value="Felino">
    <label for="especieFelino">Felino</label>
  </div>

  <div class="campo radios">
    <label>Sexo:</label>
    <input type="radio" id="sexoMacho" name="sexo" value="Macho" required>
    <label for="sexoMacho">Macho</label>
    <input type="radio" id="sexoHembra" name="sexo" value="Hembra">
    <label for="sexoHembra">Hembra</label>
  </div>

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

  <h4>Bitácora de alimentación</h4>

  <div class="campo">
    <label for="marcaAlimento">Marca de alimento:</label>
    <input type="text" id="marcaAlimento" name="marcaAlimento" class="inputsReporte" placeholder="Ingresa marca de alimento" required>
  </div>

  <div class="campo">
    <label for="cantidadIndicada">Cantidad indicada:</label>
    <input type="text" id="cantidadIndicada" name="cantidadIndicada" class="inputsReporte" placeholder="Ingresa cantidad indicada" required>
  </div>

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

  <div class="campo">
    <label for="comentarios">Observaciones generales:</label>
    <textarea id="comentarios" name="comentarios" class="inputsReporte" placeholder="Escribe tus comentarios aquí" required></textarea>
  </div>
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
</div>

<style>
  body { --print-spacer-height: 0px; }

  .encabezado { display: flex; justify-content: space-between; align-items: center; background-color: white; padding: 10px; box-sizing: border-box; }

  .logo { max-width: 15%; height: auto; }

  .tituloformato { border: 3px solid black; padding: 1px 30px; }

  .encabezado3 { text-align: left; padding: 5px; }

  .encabezado3 label { font-weight: bold; }

  .ContornoReporte { width: 100%; padding: 20px 80px; box-sizing: border-box; background: white; border: 5px solid; border-image: linear-gradient(135deg, #7f00ff, #e100ff) 1; border-radius: 20px; }

  .campo { display: flex; align-items: center; margin-bottom: 12px; }

  .campo label { width: 180px; font-size: 12px; }

  .inputsReporte { flex: 1; border: none; border-bottom: 0.5px solid black; outline: none; font-size: 10px; padding: 6px; margin-left: 10px; }

  textarea.inputsReporte { height: 25px; resize: none; overflow: hidden; }

  .btn-imprimir { background: linear-gradient(135deg, #7f00ff, #e100ff); color: #fff; padding: 14px 25px; border: none; border-radius: 12px; font-size: 14px; margin-top: 20px; cursor: pointer; box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15); transition: all 0.3s ease; }

  .btn-imprimir:hover { background-color: #ffffff; color: #7f00ff; transform: translateY(-5px); }

  .botonContenedor { display: flex; justify-content: center; }

  @media print {
    body { width: 8.5in; height: 7in; }
    .ContornoReporte { border: 0 !important; border-image: none !important; box-shadow: none !important; height: 40%; }
    .btn-imprimir { display: none !important; }
  }
</style>

@endsection
