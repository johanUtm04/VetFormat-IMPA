@extends('layouts.PlantillaFormatos')
@section('title', 'Responsiva de esterilizacion')
@section('MessageHeader')
Responsiva de Autorización para Procedimiento Quirúrgico de Esterilización
@endsection

@section('content')
<div class="ContornoReporte">
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Responsiva de Autorización para <br>
      Procedimiento Quirúrgico de Esterilización</h2>

    <div class="encabezado3">
      <label>Forma 019</label> <br>
      <label>Reporte no______</label> <br>
      <label>Fecha___________</label>
    </div>
  </div>

  {{-- Sección 1: Datos del Solicitante --}}
  <h3>Datos del Solicitante</h3>

  <div class="campo">
    <label>Nombre:</label>
    <input type="text" class="inputsReporte" style="flex:1">
  </div>

  <div class="campo">
    <label>Domicilio:</label>
    <input type="text" class="inputsReporte" style="flex:1">
  </div>

  <div class="campo">
    <label>Teléfono(s):</label>
    <input type="text" class="inputsReporte" style="flex:1">
  </div>

  {{-- Sección 2: Declaraciones --}}
  <h3>Responsiva</h3>

  <p>Manifiesto <strong>BAJO PROTESTA DE DECIR VERDAD</strong> y me obligo a lo siguiente:</p>

  <p>- Aceptar de antemano los riesgos que normalmente implican una cirugía y el uso de anestesia general durante la misma.</p>
  <p>- Permanecer en el lugar de la campaña desde el registro y durante la cirugía hasta que el médico responsable autorice el alta del ejemplar.</p>
  <p>- Me comprometo a seguir estrictamente las instrucciones que el médico veterinario responsable de la cirugía me señale para el cuidado <strong>POS-OPERATORIO</strong> de mi ejemplar.</p>
  <p>- Que mi ejemplar se encuentra con las horas requeridas de ayuno previamente indicadas.</p>
  <p>- En presentar los estudios pre-operatorios de mi ejemplar antes de que sea intervenido quirúrgicamente y en caso de no ser presentados será bajo mi estricta responsabilidad por los daños causados.</p>
  <p>- A conocer cuál es el tipo de cirugía que se le realiza a mi ejemplar según corresponde a su sexo.</p>

  <strong>
    <p style="text-align:center;">A los machos se les realiza la <strong>orquiectomía</strong> (retiro de testículos).</p>
  </strong>

  <strong>
    <p style="text-align:center;">A las hembras se les realiza <strong>ovariohisterectomía</strong> (retiro de ovarios y útero) y/o alguna otra intervención quirúrgica a realizarse.</p>
  </strong>

  <p>- Hago constar de haber leído y entendido la autorización para el procedimiento quirúrgico antes mencionado, sus ventajas, desventajas y posibles complicaciones, y en caso de una muerte accidental y/o posterior a la intervención quirúrgica no reclamaré o fincaré responsabilidad al médico veterinario zootecnista que realizó dicho procedimiento.</p>

  <p>- Por lo tanto, acepto y reafirmo haber entendido todo lo antes mencionado y por este medio <strong>AUTORIZO</strong> que se realice el procedimiento quirúrgico a mi ejemplar que a continuación se describe:</p>

{{-- Sección 3: Datos del ejemplar --}}
<h3 class="subtitulo">Datos del Ejemplar</h3>

<div class="campo">
  <label style="min-width: 60px;">Nombre:</label>
  <input type="text" class="inputsReporte" style="width:120px;">

  <label style="min-width: 60px;">Especie:</label>
  <label><input type="radio" name="especie" value="Canino" style="transform: scale(0.9); margin-left:4px;"> Canino</label>
  <label><input type="radio" name="especie" value="Felino" style="transform: scale(0.9); margin-left:4px;"> Felino</label>

  <label style="min-width: 60px; margin-left: 10px;">Sexo:</label>
  <label><input type="radio" name="sexo_ejemplar" value="Macho" style="transform: scale(0.9); margin-left:4px;"> Macho</label>
  <label><input type="radio" name="sexo_ejemplar" value="Hembra" style="transform: scale(0.9); margin-left:4px;"> Hembra</label>
</div>

<div class="campo">
  <label style="min-width: 60px;">Raza:</label>
  <input type="text" class="inputsReporte" style="width:100px;">

  <label style="min-width: 60px;">Color:</label>
  <input type="text" class="inputsReporte" style="width:100px;">

  <label style="min-width: 60px;">Edad:</label>
  <input type="text" class="inputsReporte" style="width:50px;">

  <label style="min-width: 50px;">Peso:</label>
  <input type="text" class="inputsReporte" style="width:50px;">

  <label style="min-width: 60px;">Tamaño:</label>
  <label><input type="radio" name="tamano" value="Gde" style="transform: scale(0.9); margin-left:4px;"> G</label>
  <label><input type="radio" name="tamano" value="Med" style="transform: scale(0.9); margin-left:4px;"> M</label>
  <label><input type="radio" name="tamano" value="Ch" style="transform: scale(0.9); margin-left:4px;"> CH</label>
</div>

<div class="campo">
  <label style="min-width: 150px;">Estudios pre-operatorios:</label>
  <label><input type="radio" name="estudios" value="Si" style="transform: scale(0.9); margin-left:4px;"> Sí</label>
  <label><input type="radio" name="estudios" value="No" style="transform: scale(0.9); margin-left:4px;"> No</label>

  <label style="min-width: 160px; margin-left:10px;">Hora que comenzó el ayuno:</label>
  <input type="text" class="inputsReporte" style="width:80px;">
</div>

  {{-- Firmas --}}
  <div class="campo" style="justify-content: space-between; margin-top:80px;">
    <div style="text-align:center; width:45%;">
      <div style="border-top: 1px solid black; height: 0px; margin-bottom: 10px;"></div>
      <label>Nombre y Firma del Consentimiento</label>
    </div>

    <div style="text-align:center; width:45%;">
      <div style="border-top: 1px solid black; height: 0px; margin-bottom: 10px;"></div>
      <label>Nombre y Firma del MVZ Responsable</label>
      <br>
      <label>Céd. Prof.</label>
    </div>
  </div>

</div>
  {{-- CierreForm --}}
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>

</div>

<style>
.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
}
  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 8px; /* reducido */
    box-sizing: border-box;
  }

  .encabezado3 label {
    font-weight: bold;
    font-size: 11px; /* tamaño reducido */
  }

  .logo {
    max-width: 15%; /* un poco más pequeño */
    height: auto;
  }

  .encabezado3 {
    text-align: left;
    padding: 5px;
  }

  .ContornoReporte {
    text-align: left;
    background-color: white;
    max-width: 100%;
    padding: 15px; /* menos padding */
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
  }

  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 10px; /* menos margen */
    flex-wrap: wrap;
  }

  p{
    color: black;
  }
  .campo label {
    font-size: 11px; /* un poco más pequeño */
    margin-right: 4px;
  }

  .inputsReporte {
    border: none;
    border-bottom: 0.5px solid black;
    outline: none;
    font-size: 10px; /* más pequeño */
    padding: 3px; /* menos padding */
    box-sizing: border-box;
    margin-right: 4px;
  }

  textarea.inputsReporte {
    resize: vertical;
  }

  p {
    font-size: 11px; /* más pequeño */
    margin-bottom: 8px;
  }

  /* Botón imprimir */
  .btn-imprimir {
    background: linear-gradient(135deg, #7F00FF, #E100FF);
    color: #fff;
    padding: 10px 20px; /* más pequeño */
    border: none;
    border-radius: 12px;
    font-size: 14px; /* más pequeño */
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
