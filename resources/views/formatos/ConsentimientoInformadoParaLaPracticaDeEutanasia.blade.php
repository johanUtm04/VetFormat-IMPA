@extends('layouts.PlantillaFormatos')

@section('title', 'Consentimiento Informado para Eutanasia')

@section('MessageHeader')
Consentimiento Informado para Eutanasia
@endsection

@section('content')

<div class="ContornoReporte">

  <!-- ENCABEZADO -->
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Consentimiento Informado para Eutanasia</h2>
    <div class="encabezado3">
      <label>Forma 011</label><br>
   <label>Reporte no______</label> <br>
      <label>Fecha___________</label>
    </div>
  </div>

  <!-- SECCIÓN: PROPIETARIO O POSEEDOR -->
  <h3 class="subtitulos">Propietario o Poseedor del Ejemplar</h3>

  <div class="campo"><label>Nombre:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Domicilio:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Colonia:</label><input type="text" class="inputsReporte"></div>
  <div class="campo"><label>Teléfono:</label><input type="text" class="inputsReporte"></div>

  <!-- SECCIÓN: CARACTERÍSTICAS DEL EJEMPLAR -->
  <h3 class="subtitulos">DECLARO TENER FACULTADES PLENAS DE DOMINIO, POSESIÓN Y PROPIEDAD SOBRE EL EJEMPLAR DE LAS SIGUIENTES CARACTERÍSTICAS</h3>

  <div class="campo"><label>Nombre:</label><input type="text" class="inputsReporte"></div>

  <div class="campo">
    <label>Edad:</label><input type="text" class="inputsReporte">
    <label>Especie:</label>
    <input type="radio" name="especie" value="C"> C
    <input type="radio" name="especie" value="F"> F
  </div>

  <div class="campo">
    <label>Raza:</label><input type="text" class="inputsReporte">
    <label>Talla:</label>
    <input type="radio" name="talla" value="C"> C
    <input type="radio" name="talla" value="N"> N
    <input type="radio" name="talla" value="G"> G
  </div>

  <div class="campo">
    <label>Pelo:</label>
    <input type="radio" name="pelo" value="C"> C
    <input type="radio" name="pelo" value="M"> M
    <input type="radio" name="pelo" value="L"> L
  </div>

  <div class="campo"><label>Color:</label><input type="text" class="inputsReporte"></div>

  <div class="campo">
    <label>Sexo:</label>
    <input type="radio" name="sexo" value="H"> H
    <input type="radio" name="sexo" value="M"> M
  </div>

  <div class="campo"><label>Otras características:</label><input type="text" class="inputsReporte"></div>

  <div class="campo">
    <label>C.C.:</label>
    <input type="radio" name="cc" value="1/5"> 1/5
    <input type="radio" name="cc" value="2/5"> 2/5
    <input type="radio" name="cc" value="3/5"> 3/5
    <input type="radio" name="cc" value="4/5"> 4/5
    <input type="radio" name="cc" value="5/5"> 5/5
  </div>

  <!-- SECCIÓN: CONSENTIMIENTO -->
  <h3 class="subtitulos">Consentimiento</h3>

  <p class="parrafo">
    Por lo que solicito se practique eutanasia humanitaria al ejemplar descrito, por ser mi voluntad y a fin de evitar sufrimiento innecesario, estando plenamente informado de la gravedad de la situación médica y/o de conducta y comportamiento que presenta el ejemplar.
  </p>

  <p class="parrafo">
    Quedo conforme con la explicación que me brinda el médico veterinario zootecnista adscrito al Instituto Moreliano de Protección Animal sobre el estado de salud y comportamiento, así como el procedimiento de eutanasia.
  </p>

  <p class="parrafo">
    Acepto y autorizo al Instituto Moreliano de Protección Animal y al M.V.Z. 
    <input type="text" class="inputsLinea"> 
    con cédula 
    <input type="text" class="inputsLinea"> 
    responsable, para que se lleve a cabo el proceso de eutanasia conforme a la Norma Oficial Mexicana NOM-033-SAG/ZOO-2014.
  </p>

  <!-- FIRMA -->
  <div class="firmaCentro">
    <div class="lineaFirma"></div>
    <label>Nombre y Firma del propietario o poseedor</label>
  </div>
  {{-- CierreForm --}}
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>

</div>
<!-- ESTILOS -->
<style>
.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
  /* arriba, derecha, abajo, izquierda */
}
  .ContornoReporte {
    text-align: left;
    background-color: #fff;
    max-width: 100%;
    padding: 20px;
    box-sizing: border-box;
  }

  .encabezado {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: white;
    padding: 10px;
  }

  .logo {
    max-width: 10%;
    height: auto;
  }
    .encabezado3 {
    text-align: left;
    padding: 5px;
  }

      .encabezado3 label{
    font-weight: bold;}

.subtitulos {
  text-align: center;
  margin: 20px 0 10px 0;
  border: 2px solid black;
}
  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    flex-wrap: wrap;
  }

.subtitulos {
  text-align: center;
  margin: 20px 0 10px 0;
  font-size: 14px;
  border: 2px solid black;
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
  font-size: 12px;
  padding: 6px;
  box-sizing: border-box;
  margin-left: 10px;
  min-width: 100px;
  font-family: Arial, sans-serif;
  resize: vertical;
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
    font-size: 12px;
    padding: 6px;
    box-sizing: border-box;
    margin-left: 10px;
    min-width: 100px;
  }

  .inputsLinea {
    border: none;
    border-bottom: 1px solid black;
    width: 200px;
    display: inline-block;
    outline: none;
    margin: 0 5px;
    font-size: 12px;
  }

  .parrafo {
    font-size: 12px;
    text-align: justify;
    margin-bottom: 10px;
  }

  .firmaCentro {
    text-align: center;
    margin-top: 10px;
  }

  .lineaFirma {
    border-bottom: 1px solid black;
    width: 200px;
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
  p{
  color: black;
  }
</style>

@endsection
