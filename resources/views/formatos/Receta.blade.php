@extends('layouts.PlantillaFormatos')

@section('title', 'Receta')

@section('MessageHeader')
Receta
@endsection

@section('content')

<div class="ContornoReporte">

  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Receta</h2>
    <div class="encabezado3">
      <label>Forma 014</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>

  <div class="campo">
    <label>MVZ:</label>
    <input type="text" class="inputsReporte">
  </div>
  <div class="campo">
    <label>Céd. Prof.:</label>
    <input type="text" class="inputsReporte">
  </div>

  <div class="campo">
    <label>Rx:</label>
  </div>
  <div class="campo">
    <textarea rows="15" class="inputsReporte" style="width: 100%;"></textarea>
  </div>

  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
</div>

<style>
body {
  .print-spacer {
    display: block;
    height: var(--print-spacer-height, 500px);
  }
}
.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
}

  .ContornoReporte {
    text-align: left;
    background-color: white;
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

  textarea.inputsReporte {
    height: 100px;
    resize: none;
    overflow: hidden;
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

  textarea.inputsReporte {
    border: none !important;
  }

}
</style>

@endsection
