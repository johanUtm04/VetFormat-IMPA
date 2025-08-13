@extends('layouts.PlantillaFormatos')
@section('title', 'Visita de inspección')
@section('MessageHeader')
Visita de inspección
@endsection

@section('content')

<div class="ContornoReporte">

  {{-- HEADER --}}
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Visita de inspección</h2>
    <div class="encabezado3">
      <label>Forma 022</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>

 <br>

   {{-- Hoja 1 --}}
  <div class="hoja1">
  <h4 class="seccionTitulo">Visita de Inspección, Supervisión y Verificación</h4>

  {{-- Datos generales --}}
  <div class="campo">
    <label>En la ciudad de Morelia Michoacán, siendo las</label>
    <input type="text" class="inputsReporte">
    <label>, del día</label>
    <input type="text" class="inputsReporte">
    <label>de</label>
    <input type="text" class="inputsReporte">
    <label>del año 20</label>
    <input type="text" class="inputsReporte">
  </div>
 <br>
  <div class="campo">
    <label>Reunidos en calle</label>
    <input type="text" class="inputsReporte">
    <label>Número</label>
    <input type="text" class="inputsReporte">
    <label>, Colonia</label>
    <input type="text" class="inputsReporte">
  </div>
 <br>
  <div class="campo">
    <label>Los C.D.</label>
    <input type="text" class="inputsReporte">
    <label>, personal del Instituto Moreliano de Protección Animal.</label>
  </div>
 <br>
  <div class="campo">
    <label>Reporte número</label>
    <input type="text" class="inputsReporte">
    <label>, de fecha</label>
    <input type="text" class="inputsReporte">
    <label>, consistente en</label>
    <input type="text" class="inputsReporte">
  </div>
 <br>
  <div class="seccionTitulo">HECHOS</div>
 <br>

  {{-- Hechos --}}
  <div class="campo">
    <label>ÚNICO. Debidamente constituidos e identificados, entendemos la presente diligencia con</label>
    <input type="text" class="inputsReporte">
    <label>, quien se identifica con</label>
    <input type="text" class="inputsReporte">
  </div>
 <br>
  <div class="campo">
    <label>A quien se informa el motivo de nuestra visita y manifiesta que:</label>
  </div>
 <br>
  {{-- Testigos --}}
  <div class="campo">
    <label>Señalar testigos:</label>
    <div style="display:flex;flex-wrap:wrap;gap:10px;align-items:center;">
      <label><input type="radio" name="testigo" value="1"> 1</label>
      <input type="text" class="inputsReporte" placeholder="Nombre">
      <input type="text" class="inputsReporte" placeholder="INE">
      <input type="text" class="inputsReporte" placeholder="Firma">

      <label><input type="radio" name="testigo" value="2"> 2</label>
      <input type="text" class="inputsReporte" placeholder="Nombre">
      <input type="text" class="inputsReporte" placeholder="INE">
      <input type="text" class="inputsReporte" placeholder="Firma">

      <label><input type="radio" name="testigo" value="no"> No desea señalar Testigos</label>
    </div>
  </div>
 <br>
  {{-- Acceso --}}
  <div class="campo">
    <label>Acceso:</label>
    <div style="display:flex;flex-wrap:wrap;gap:10px;align-items:center;">
      <label><input type="radio" name="acceso" value="si"> Otorga acceso voluntario</label>
      <input type="text" class="inputsReporte" placeholder="Firma">
      <label><input type="radio" name="acceso" value="no"> Inspección al exterior</label>
    </div>
  </div>
 <br>
  {{-- Condiciones Inmueble --}}
  <div class="campo">
    <label>Condiciones Inmueble:</label>
    <div style="display:flex;flex-wrap:wrap;gap:10px;">
      <label><input type="checkbox"> Aparentemente habitado</label>
      <label><input type="checkbox"> Aparentemente deshabitado</label>
      <label><input type="checkbox"> Heces</label>
      <label><input type="checkbox"> Orina</label>
      <label><input type="checkbox"> Basura</label>
      <label><input type="checkbox"> Deshechos</label>
      <label><input type="checkbox"> Huele mal</label>
    </div>
  </div>

  
  </div> {{-- Fin hoja 1 --}}

  
  {{-- Hoja 2 --}}
  <div class="hoja2">
    <br> <br> <br> <br>   
  {{-- Condiciones ejemplares --}}
  <div class="campo">
    <label>Condiciones ejemplares:</label>
    <div style="display:flex;flex-wrap:wrap;gap:10px;">
      <label><input type="checkbox"> Un ejemplar a la vista</label>
      <label>Descripción:</label>
      <label><input type="radio" name="tipoEjemplar" value="perro"> Perro</label>
      <label><input type="radio" name="tipoEjemplar" value="gato"> Gato</label>
      <input type="text" class="inputsReporte" placeholder="Raza">
      <input type="text" class="inputsReporte" placeholder="Sexo">
      <input type="text" class="inputsReporte" placeholder="Edad">
      <input type="text" class="inputsReporte" placeholder="Color">
      <input type="text" class="inputsReporte" placeholder="Características">
    </div>
 <br>
    <div style="display:flex;flex-wrap:wrap;gap:10px;margin-top:10px;">
      <label><input type="checkbox"> Más de un ejemplar — ¿Cuántos?</label>
      <input type="text" class="inputsReporte" style="width:60px;">
    </div>
 <br>
    <div style="display:flex;flex-wrap:wrap;gap:10px;margin-top:10px;">
      <label><input type="checkbox"> Sin esquema preventivo</label>
      <label><input type="checkbox"> Sin condiciones de salud</label>
      <input type="text" class="inputsReporte" placeholder="¿Cuáles?">
      <input type="text" class="inputsReporte">
      <input type="text" class="inputsReporte">
    </div>
 <br>
    <div style="display:flex;flex-wrap:wrap;gap:10px;margin-top:10px;">
      <label><input type="checkbox"> Sin esterilizar</label>
      <label><input type="checkbox"> Encadenado</label>
      <label><input type="checkbox"> En azotea</label>
      <label><input type="checkbox"> Patio trasero</label>
      <label><input type="checkbox"> Afuera del domicilio</label>
      <label><input type="checkbox"> Frente del domicilio</label>
      <label><input type="checkbox"> Interior del domicilio</label>
    </div>
  </div>
 <br>

  {{-- Condición Corporal --}}
  <div class="seccionTitulo">Condición Corporal</div>
  <div class="campo">
    <div style="display:flex;flex-direction:column;gap:5px;">
      <label><input type="checkbox"> 1/5 Desnutrido, deshidratado o grave</label>
      <label><input type="checkbox"> 2/5 Problemas de piel, lesión o enfermedad</label>
      <label><input type="checkbox"> 3/5 Aparentemente bien sin cartilla</label>
      <label><input type="checkbox"> 4/5 Bien con cartilla y condiciones adecuadas</label>
      <label><input type="checkbox"> 5/5 Excelente estado</label>
    </div>
  </div>
 <br>

</div>
  {{-- CierreForm --}}
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>
  </div> {{-- Fin hoja 2 --}}

<style>
body {
  .print-spacer {
    display: block;
    height: var(--print-spacer-height, 320px); /* valor por defecto */
  }
}
  .ContornoReporte {
    text-align: left;
    background-color: #fff;
    max-width: 100%;
    padding: 20px;
    box-sizing: border-box;
  }

/* Encabezado */
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
  padding: 1px 30px 1px 30px;
  /* arriba, derecha, abajo, izquierda */
}

  .seccionTitulo {
    border: 2px solid black;
    text-align: center;
    margin: 20px 0 10px 0;
    font-weight: bold;
  }

  .campo {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin-bottom: 10px;
    border: 1px solid #000;
    padding: 5px;
  }

  .campo label {
    font-size: 13px;
    margin-right: 5px;
  }

.inputsReporte {
  flex: 1;
  min-width: 100px;
  padding: 5px 5px 3px 5px;
  font-size: 12px;
  margin: 3px;
  border: none;
  border-bottom: 1.5px solid #000;
  background: transparent;
  outline: none;
  transition: border-color 0.3s ease;
}

.inputsReporte:focus {
  border-bottom: 2px solid #7F00FF;
}


  input[type="radio"], input[type="checkbox"] {
    margin-right: 5px;
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

  @media print {
    .hoja2, .hoja3 { page-break-before: always; }
  }
</style>

@endsection
