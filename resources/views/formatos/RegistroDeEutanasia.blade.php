@extends('layouts.PlantillaFormatos')
@section('title', 'Registro de eutanasia')
@section('MessageHeader')
Registro de eutanasia
@endsection

@section('content')
<div class="ContornoReporte">
  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Registro de eutanasia</h2>

    <div class="encabezado3">
      <label>Forma 006</label> <br>
      <label>Reporte no______</label> <br>
      <label>Fecha___________</label>
    </div>
  </div>

  <strong>Datos Generales</strong> <br>

<div class="campo"><input type="date" class="inputsReporte" placeholder="Fecha de Eutanasia"></div>
<div class="campo"><input type="text" class="inputsReporte" placeholder="Total Caninos H/M"></div>
<div class="campo"><input type="text" class="inputsReporte" placeholder="Total Felinos H/M"></div>
<div class="campo"><input type="text" class="inputsReporte" placeholder="Total Eutanasias H/M"></div>
<div class="campo"><input type="text" class="inputsReporte" placeholder="Xilacina Utilizada"></div>
<div class="campo"><input type="text" class="inputsReporte" placeholder="Pentobarbital Utilizado"></div>

  <p>Detalle de Ejemplares</p>

  <table style="width: 100%;border-collapse: collapse; font-size: 10px;">
    <thead>
      <tr>
        <th>No. Reg</th>
        <th>Especie Can/Fel</th>
        <th>Raza</th>
        <th>Sexo H/M</th>
        <th>Edad (meses)</th>
        <th>Alzada Ch/M/G</th>
        <th>Peso Aprox</th>
        <th>ML Xilacina</th>
        <th>ML Pentobarbital</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < 7; $i++)
      <tr>
        <td><input type="text" class="inputsReporte"></td>
        <td>Can<input type="checkbox"> <br> Fel<input type="checkbox"></td>
        <td><input type="text" class="inputsReporte"></td>
        <td>H<input type="checkbox"> <br> M<input type="checkbox"></td>
        <td><input type="number" class="inputsReporte"></td>
        <td>Ch<input type="checkbox"><br>M<input type="checkbox"><br>G<input type="checkbox"></td>
        <td><input type="text" class="inputsReporte"></td>
        <td><input type="number" step="0.01" class="inputsReporte"></td>
        <td><input type="number" step="0.01" class="inputsReporte"></td>
      </tr>
      @endfor
    </tbody>
  </table>

  <!-- SECCIÓN: FIRMAS -->
  <div class="campoFirma" style="margin-top: 0px; display: flex; justify-content: space-between;">
    <div class="firmaCentro">
      <div class="lineaFirma"></div>
    <label>M.V.Z. Responsable <br> (nombre y firma)</label>    </div>
    <div class="firmaCentro">
      <div class="lineaFirma"></div>
    <label>M.V.Z. Responsable <br> (nombre y firma)</label>    </div>
  </div>

</div>

<style>
body {
body {
  font-size: 10px;
}

.logo {
  max-width: 12%;
  height: auto;
}

.tituloformato {
  border: 2px solid black;
  padding: 2px 20px;
  font-size: 13px;
}

.ContornoReporte {
  text-align: left;
  background-color: rgb(255, 255, 255);
  max-width: 100%;
  padding: 15px;
  box-sizing: border-box;
}

.encabezado {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 8px;
}

.encabezado3 {
  text-align: left;
  padding: 2px;
  font-size: 10px;
}

.encabezado3 label {
  font-weight: bold;
}

.subtitulo {
  text-align: center;
  border: 1px solid black;
  padding: 3px;
  margin: 10px 0;
  font-size: 10px;
}

table,
th,
td {
  border: 1px solid black;
  font-size: 9px;
}

th, td {
  padding: 2px 3px;
  text-align: center;
}

.inputsReporte {
  width: 100%;
  padding: 2px 3px;
  font-size: 9px;
  box-sizing: border-box;
  height: 20px;
}

textarea.inputsReporte {
  height: 30px;
}

.firmaCentro {
  text-align: center;
  margin-top: 15px;
  font-size: 9px;
}

.lineaFirma {
  border-bottom: 1px solid black;
  width: 200px;
  margin: 0 auto 6px auto;
  height: 14px;
}

.campo {
  margin-bottom: 4px;
  font-size: 10px;
}

.campo label {
  font-weight: bold;
}

.btn-imprimir {
  background: linear-gradient(135deg, #7F00FF, #E100FF);
  color: #fff;
  padding: 10px 18px;
  border: none;
  border-radius: 10px;
  font-size: 13px;
  margin-top: 15px;
  cursor: pointer;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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
}

</style>
@endsection
