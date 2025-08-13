@extends('layouts.PlantillaFormatos')

@section('title', 'Acta')

@section('MessageHeader')
Acta
@endsection

@section('content')

<div class="ContornoReporte">

  {{-- Encabezado --}}
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Acta</h2>

    <div class="encabezado3">
      <label>Forma 020</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>

  {{-- Hoja 1 --}}
  <div class="hoja1">

    <div class="campo">
      <label>En la ciudad de Morelia, Michoacán, siendo las</label>
      <input type="text" class="inputsReporte" style="width:80px;">
      <label>, del día</label>
      <input type="text" class="inputsReporte" style="width:50px;">
      <label>de</label>
      <input type="text" class="inputsReporte" style="width:100px;">
      <label>del año 20</label>
      <input type="text" class="inputsReporte" style="width:50px;">
    </div>

    <div class="campo">
      <label>Reunidos en</label>
      <input type="text" class="inputsReporte" style="flex:1;">
    </div>

    <div class="campo">
      <label>Los CC.</label>
      <input type="text" class="inputsReporte" style="flex:1;">
    </div>

    <p><strong>Personal del Instituto Moreliano De Protección Animal</strong>, quienes al final de la presente firman para debida constancia legal; para asentar y documentar los siguientes:</p>

    <h3 class="subtituloformato">ANTECEDENTES</h3>
    <textarea class="inputsReporte" style="height:60px;"></textarea>

    <h3 class="subtituloformato">HECHOS</h3>

    <div class="campo" style="flex-wrap:wrap;">
      <label><strong>PRIMERO.</strong> Debidamente identificados, entendemos la presente diligencia con</label>
      <input type="text" class="inputsReporte" style="width:200px;">
      <label>, quien se identifica con</label>
      <input type="text" class="inputsReporte" style="width:200px;">
      <label>, a quien se informa el motivo de nuestra visita y una vez escuchado lo anterior, manifiesta que:</label>
    </div>

    <div class="campo">
      <input type="checkbox"> <label>Desea señalar testigos</label>
    </div>
    <textarea class="inputsReporte" style="height:40px;"></textarea>

    <div class="campo">
      <input type="checkbox"> <label>No desea señalar testigos</label>
    </div>

    <div class="campo">
      <label><strong>SEGUNDO.</strong> Se tiene a la vista un inmueble de las siguientes características:</label>
    </div>
    <textarea class="inputsReporte" style="height:40px;"></textarea>

    <div class="campo">
      <label>Y ejemplares siguientes:</label>
    </div>
    <textarea class="inputsReporte" style="height:25px;"></textarea>
    <h3 class="subtituloformato">TERCERO.</h3>
    <textarea class="inputsReporte" style="height:60px;"></textarea>

    <p>Lo anterior acorde a lo previsto por el artículo 4 de la Ley de Derechos, el Bienestar y Protección a los Animales del Estado de Michoacán de Ocampo, aunado a que el maltrato y crueldad animal está penada por la Ley.</p>

        <h3 class="subtituloformato">RECOMENDACIONES</h3>

    <div class="campo" style="flex-wrap:wrap;">
      <label>Recomendaciones escritas en un término de:</label>
      <input type="radio" name="reco" value="inmediatas"><label>Inmediatas</label>
      <input type="radio" name="reco" value="1dia"><label>1 día</label>
      <input type="radio" name="reco" value="2dias"><label>2 días</label>
      <input type="radio" name="reco" value="3dias"><label>3 días</label>
    </div>
        <div class="campo">
      <label>Otro término:</label>
      <input type="text" class="inputsReporte" style="flex:1;">
    </div>
  </div> {{-- Fin hoja 1 --}}

  {{-- Hoja 2 --}}
  <div class="hoja2">





    <h3 class="subtituloformato">Acciones de mejora de bienestar animal a realizar:</h3>

    <div class="campo"><label>Fecha:</label><input type="text" class="inputsReporte" style="width:200px;"></div>

<div class="campo checkboxes">
  <label><input type="checkbox"> Entrega del ejemplar o ejemplares para resguardo.</label>
  <label><input type="checkbox"> No mantener atado.</label>
  <label><input type="checkbox"> Proveer de sombra y protección contra el clima.</label>
  <label><input type="checkbox"> Esterilizar. Fecha: <input type="text" class="inputsReporte" style="width:100px;"></label>
  <label><input type="checkbox"> Llevar a atención veterinaria.</label>
  <label><input type="checkbox"> Aplicar esquema preventivo.</label>
  <label><input type="checkbox"> Pasear con correa y supervisión.</label>
  <label><input type="checkbox"> Recoger sus heces.</label>
  <label><input type="checkbox"> Proveer agua limpia y alimento diario.</label>
  <label><input type="checkbox"> Sacar a pasear.</label>
  <label><input type="checkbox"> Baño y estética.</label>
  <label><input type="checkbox"> Cambiar de espacio.</label>
  <label><input type="checkbox"> Otro: <input type="text" class="inputsReporte" style="flex:1;"></label>
</div>

    <h4 class="subtituloformato">COMPARECIENTE Y OBSERVACIONES</h4>

    <div class="campo">
      <label>Uso de la voz al compareciente:</label>
    </div>
    <textarea class="inputsReporte" style="height:50px;"></textarea>
<br>
    <div class="campo">
      <label>Observaciones:</label>
    </div>
    <textarea class="inputsReporte" style="height:50px;"></textarea>

    <p>Lo anterior de conformidad con lo establecido por el artículo 4 de la Ley de Derechos, el Bienestar y Protección a los Animales del Estado de Michoacán de Ocampo.</p>

    <div class="campo">
      <label>Siendo todo lo que se actúa, siendo las</label>
      <input type="text" class="inputsReporte" style="width:80px;">
      <label>, de la fecha presente, se da por terminada, firmando los que en ella participaron y quisieron hacerlo. Se hace constar</label>
      <input type="text" class="inputsReporte" style="flex:1;">
    </div>

    {{-- Firmas --}}
    <h3 style="text-align:center;">Instituto Moreliano de Protección Animal</h3>

    <div class="firmas">
      <div style="text-align:center;">
        ____________________________________<br>
        Personal Actuante
      </div>
      <div style="text-align:center;">
        ____________________________________<br>
        Personal Actuante
      </div>
    </div>

    <div class="firmaCentro">
      ____________________________________<br>
      Compareciente
    </div>

    {{-- Footer --}}
    <div class="footerActa">
      {{-- Aquí puedes colocar tu texto o imagen de footer --}}
      <p >Instituto Moreliano de Protección Animal — Todos los derechos reservados</p>
    </div>


  </div> {{-- Fin hoja 2 --}}


</div>

<style>
body {
  .print-spacer {
    display: block;
    height: var(--print-spacer-height, 125px); /* valor por defecto */
  }
}
.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
  /* arriba, derecha, abajo, izquierda */
}  .subtituloformato { border: 1px solid rgb(0, 0, 0); background-color: #ffffff }
  .ContornoReporte { background: #fff; padding: 20px; box-sizing: border-box; }
  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px;
  }
    .encabezado3 { text-align: left; padding: 5px; font-size: 12px; }
  .encabezado3 label { font-weight: bold; }
  .logo { max-width: 15%; }
  .campo { display: flex; align-items: center; margin-bottom: 10px; flex-wrap: wrap; }
  .campo label { font-size: 12px; margin-right: 5px; }
  .inputsReporte { border: none; border-bottom: 0.5px solid black; outline: none; padding: 5px; font-size: 10px; margin-right: 5px; }
  textarea.inputsReporte { border: 1px solid black; resize: vertical; width: 100%; padding: 5px; font-size: 10px; }
  .firmas { display: flex; justify-content: space-around; margin-top: 20px; }
  .firmaCentro { text-align: center; margin-top: 20px; }

  @media print {
    .hoja2, .hoja3 { page-break-before: always; }
  }
 p{
  color: black;
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
  .checkboxes {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.checkboxes label {
  width: calc(33.33% - 10px); /* 3 por línea con espacio de 10px entre ellas */
  font-size: 12px;
  display: flex;
  align-items: center;
}

</style>

@endsection
