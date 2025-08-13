@extends('layouts.PlantillaFormatos')

@section('title', 'Resguardo de Ejemplares')

@section('MessageHeader')
Resguardo de Ejemplares
@endsection

@section('content')

<div class="ContornoReporte">

  <!-- ENCABEZADO -->
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Resguardo de Ejemplares</h2>
    <div class="encabezado3">
      <label>Forma 012</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>


  <!-- SECCIÓN: FECHAS -->
  <div class="campo">
    <label>Fecha de resguardo:</label>
    <input type="date" name="fecha_resguardo" class="inputsReporte" required>
    <label style="margin-left: 20px;">Fecha de entrega en esta dirección:</label>
    <input type="date" name="fecha_entrega" class="inputsReporte" style="max-width: 180px;" required>
  </div>

  <!-- SECCIÓN: CARACTERÍSTICAS DE LOS EJEMPLARES -->
  <h4>Características de los ejemplares</h4>

  <div class="campo radios">
    <label>Especie:</label>
    <input type="radio" id="especieCanino" name="especie" value="Canino" required>
    <label for="especieCanino">Canino</label>
    <input type="radio" id="especieFelino" name="especie" value="Felino">
    <label for="especieFelino">Felino</label>

    <label style="margin-left: 30px;">Sexo:</label>
    <input type="radio" id="sexoMacho" name="sexo" value="Macho" required>
    <label for="sexoMacho">Macho</label>
    <input type="radio" id="sexoHembra" name="sexo" value="Hembra">
    <label for="sexoHembra">Hembra</label>

    <label style="margin-left: 30px;">Raza:</label>
    <input type="text" id="raza" name="raza" class="inputsReporte" style="max-width: 180px;" placeholder="Ingresa la raza" required>
  </div>

  <div class="campo">
    <label>Edad aproximada:</label>
    <input type="text" id="edad" name="edad" class="inputsReporte" placeholder="Edad aproximada" required>

    <label style="margin-left: 30px;">Color:</label>
    <input type="text" id="color" name="color" class="inputsReporte" placeholder="Color" required>
  </div>

  <div class="campo radios">
    <label>Condición corporal:</label>
    <input type="radio" id="cc1" name="condicion_corporal" value="1/5" required>
    <label for="cc1">1/5</label>
    <input type="radio" id="cc2" name="condicion_corporal" value="2/5">
    <label for="cc2">2/5</label>
    <input type="radio" id="cc3" name="condicion_corporal" value="3/5">
    <label for="cc3">3/5</label>
    <input type="radio" id="cc4" name="condicion_corporal" value="4/5">
    <label for="cc4">4/5</label>
    <input type="radio" id="cc5" name="condicion_corporal" value="5/5">
    <label for="cc5">5/5</label>
  </div>

  <!-- SECCIÓN: DIRECCIÓN DE ORIGEN -->
  <div class="campo">
    <label>Dirección de donde se obtuvieron los ejemplares:</label>
  </div>

  <div class="campo">
    <label>Calle:</label>
    <input type="text" id="calle" name="calle" class="inputsReporte" placeholder="Calle" required>

    <label style="margin-left: 30px;">Número:</label>
    <input type="text" id="numero" name="numero" class="inputsReporte" placeholder="Número" required>
  </div>

  <div class="campo">
    <label>Colonia:</label>
    <input type="text" id="colonia" name="colonia" class="inputsReporte" placeholder="Colonia" required>

    <label style="margin-left: 30px;">Ciudad:</label>
    <input type="text" id="ciudad" name="ciudad" class="inputsReporte" placeholder="Ciudad" required>
  </div>

  <div class="campo">
    <label>Número de expediente / reporte / parte:</label>
    <input type="text" id="num_expediente" name="num_expediente" class="inputsReporte" placeholder="Número" required>
  </div>

  <!-- SECCIÓN: HECHOS -->
  <div class="campo">
    <label>Hechos que dieron origen al resguardo (descripción breve):</label>
    <textarea id="hechos" name="hechos" class="inputsReporte" placeholder="Descripción breve" required></textarea>
  </div>

  <!-- SECCIÓN: ENCARGADO -->
  <h4>Encargado de los ejemplares:</h4>

  <div class="campo">
    <label>Nombre:</label>
    <input type="text" id="nombre_encargado" name="nombre_encargado" class="inputsReporte" placeholder="Nombre" required>
  </div>

  <div class="campo">
    <label>Cargo:</label>
    <input type="text" id="cargo_encargado" name="cargo_encargado" class="inputsReporte" placeholder="Cargo" required>
  </div>

  <div class="campo">
    <label>Dependencia:</label>
    <input type="text" id="dependencia_encargado" name="dependencia_encargado" class="inputsReporte" placeholder="Dependencia" required>
  </div>

  <!-- FIRMAS -->
  <div class="firmaCentro">
    <div class="lineaFirma"></div>
    <label>Nombre y Firma</label>
  </div>

  <div class="firmaCentro">
    <div class="lineaFirma"></div>
    <label>Nombre y Firma del personal que recibe</label>
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
    font-family: Arial, sans-serif;
  }

  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
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

  h4 {
    margin: 20px 0 10px 0;
    font-size: 14px;
    border: 1px solid black;
    text-align: center;
  }

  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    flex-wrap: wrap;
  }

  .campo label {
    width: 180px;
    font-size: 12px;
    font-weight: bold;
  }

.inputsReporte {
  flex: 1;
  border: none;
  border-bottom: 0.5px solid black;
  outline: none;
  font-size: 11px;        /* antes 12px */
  padding: 4px;           /* antes 6px */
  box-sizing: border-box;
  margin-left: 8px;       /* antes 10px */
  min-width: 100px;
}


textarea.inputsReporte {
  height: 65px;           /* antes 80px */
  resize: vertical;
  overflow: auto;
}


  .radios input {
    margin-left: 10px;
  }

  .radios label {
    margin-right: 15px;
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

@media print {
  input {
    border: none;
    border-bottom: 1px solid black;
    color: black;
  }

  input::placeholder {
    color: transparent;
  }

  .btn-imprimir {
    display: none;
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
