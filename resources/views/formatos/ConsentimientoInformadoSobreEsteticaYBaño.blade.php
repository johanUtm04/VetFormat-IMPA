@extends('layouts.PlantillaFormatos')
@section('title', 'Consentimiento Informado sobre estetica y baño')
@section('MessageHeader')
Consentimiento Informado sobre estetica y baño
@endsection

@section('content')

<div class="ContornoReporte">

  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Consentimiento Informado sobre estetica y baño</h2>

    <div class="encabezado3">
      <label>Forma 027</label> <br>
      <label>Reporte no______</label> <br>
      <label>Fecha___________</label>
    </div>
  </div>



<h3 class="subtitulo">Datos del propietario</h3>

<div class="campo">
<label for="nombre">Nombre:</label>
<input type="number" id="nombre" name="nombre" class="inputsReporte" placeholder="Ingresa el peso" min="0" step="0.01" required>
</div>

<div class="campo">
<label for="direccion">Dirección:</label>
<input type="number" id="direccion" name="direccion" class="inputsReporte" placeholder="Ingresa el peso" min="0" step="0.01" required>
</div>

<div class="campo">
<label for="telefono">Telefono:</label>
<input type="number" id="telefono" name="telefono" class="inputsReporte" placeholder="Ingresa el peso" min="0" step="0.01" required>
</div>

<h4 class="subtitulo">Datos del ejemplar</h4>
<div class="campo">
<label for="nombreEjemplar">Nombre:</label>
<input type="number" id="nombreEjemplar" name="nombreEjemplar" class="inputsReporte" placeholder="Ingresa el peso" min="0" step="0.01" required>
<label for="edad">Edad(meses):</label>
<input type="number" id="edad" name="edad" class="inputsReporte" placeholder="Ingresa el peso" min="0" step="0.01" required>
  <div>
    <label>Talla:</label>
    <input type="radio" id="cc1" name="condicion_corporal" value="1/5" required>
    <label for="cc1">ch</label>
    <input type="radio" id="cc2" name="condicion_corporal" value="2/5">
    <label for="cc2">M</label>
    <input type="radio" id="cc3" name="condicion_corporal" value="3/5">
    <label for="cc3">G</label>
  </div>
</div>

<div class="campo">
<label for="telefono">Raza:</label>
<input type="number" id="telefono" name="telefono" class="inputsReporte" placeholder="Ingresa el peso" min="0" step="0.01" required>
<label for="telefono">Fecha ultima vacunación:</label>
<input type="number" id="telefono" name="telefono" class="inputsReporte" placeholder="Ingresa el peso" min="0" step="0.01" required>
</div>


<div class="campo">

<label for="edad">Edad(meses):</label>
<input type="number" id="edad" name="edad" class="inputsReporte" placeholder="Ingresa el peso" min="0" step="0.01" required>
  

<div>
    <label>SEXO:</label>
    <input type="radio" id="cc1" name="condicion_corporal" value="1/5" required>
    <label for="cc1">ch</label>
    <input type="radio" id="cc2" name="condicion_corporal" value="2/5">
    <label for="cc2">M</label>
    <input type="radio" id="cc3" name="condicion_corporal" value="3/5">
    <label for="cc3">G</label>
  </div>

<div class="campo">
<label for="telefono">Fecha ultima desparacitación:</label>
<input type="number" id="telefono" name="telefono" class="inputsReporte" placeholder="Ingresa el peso" min="0" step="0.01" required>
</div>

</div>


<h4 class="subtitulo">Antecedentes del ejemplar y observaciones del dueño</h4>

  <div>
    <label>Conducta:</label>
    <input type="radio" id="caracter" name="condicion_corporal" value="1/5" required>
    <label for="caracter">Ansiedad</label>
    <input type="radio" id="caracter" name="condicion_corporal" value="2/5">
    <label for="caracter">Agresividad</label>
  </div>

    <p>Observaciones<textarea></textarea></p>
<h3>Lineamientos para la estética</h3>
<p>
I. En la realización de esta estética prevalece la paciencia, respeto, confianza e higiene para los ejemplares.<br>
II. Su cupo es limitado por día para garantizar calidad en el video.<br>
III. El ejemplar no será maltratado.<br>
IV. Durante su estancia, el ejemplar nunca se queda solo.<br>
V. El mobiliario de la estética se encuentra en óptimas condiciones que garantizan la seguridad de los ejemplares.<br>
VI. No se utilizan anestésicos.<br>
VII. Beneficios del procedimiento: mejorar su imagen, bienestar, higiene y salud.<br>
VIII. Entendiéndose que en nuestra institución son utilizados implementos individuales y esterilizados, ya que nos interesa sobremanera disminuir al máximo el riesgo implicado por enfermedades de piel.<br>
IX. Sabiéndose que se trabaja con seres vivos los cuales algunas veces se comportan de una manera inadvertida, pudiéndose producir un accidente en el estilo de corte de pelo, como una leve herida, para la cual se correrá con la atención médica (no los gastos de medicamento).<br>
X. Factores de riesgo cardiovasculares:<br>
a. Edad b. Cardiopatías de base c. Sobrepeso d. Hipertensión e. Hipotiroidismo f. Coagulopatías
</p>
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>
</div>




<style>
.print-spacer {
  display: block;
  height: var(--print-spacer-height, 100px); 
}

.ContornoReporte{width:100%;padding:20px 80px;box-sizing:border-box;background:white;border:5px solid; border-image:linear-gradient(135deg,#7F00FF,#E100FF) 1; border-radius:20px;}

.ContornoReporte p {
  color: #000 !important;
}


.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
}

  .encabezado {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: white;
    padding: 10px;
  }
  
    .encabezado3 label{
    font-weight: bold;}

  .logo {
    max-width: 10%;
    height: auto;
  }
  .ContornoReporte {
    text-align: left;
    background-color: white;
    max-width: 100%;
    padding: 20px;
    box-sizing: border-box;
  }

    .subtitulo {
    text-align: center;
    border: 2px solid black;
    padding: 5px;
    margin: 15px 0;
  }
  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    flex-wrap: wrap;
  }
  .campo label {
    font-size: 12px;
    margin-right: 10px;
  }

  .textarea {
  width: 100%;
  border: 1px solid #000;
  padding: 6px;
  box-sizing: border-box;
  resize: none;
  font-size: 12px;
}

  .inputsReporte {
    flex: 1;
    min-width: 150px;
    border: none;
    border-bottom: 0.5px solid black;
    outline: none;
    font-size: 12px;
    padding: 4px;
    margin-right: 10px;
  }

textarea {
  width: 100%;
  border: 1px solid #000;
  padding: 6px;
  box-sizing: border-box;
  resize: none;
  font-size: 12px;
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

@media print{
  .ContornoReporte{border:0 !important; border-image:none !important; box-shadow:none !important;}
}

</style>
@endsection
