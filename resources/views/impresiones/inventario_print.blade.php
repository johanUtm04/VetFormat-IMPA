@extends('layouts.PlantillaFormatos')

@section('title', 'Inventario de Ejemplares Impreso')

@section('MessageHeader')
Inventario de Ejemplares
@endsection

@section('content')
@php
    $datos = json_decode($formato->datos_formato, true);
@endphp

<div class="ContornoReporte">
Estas por Imprimir + $formato
  </div>

  
  {{-- Sección 3: Observaciones --}}
  <div class="campo" style="align-items: flex-start;">
    <label>Observaciones:</label>
    <p>{{ $datos['observaciones'] ?? '' }}</p>
  </div>

  {{-- Botón de impresión --}}
  <div style="text-align: right; margin-top: 20px;">
    <button onclick="window.print()" class="btn-historial">
      <i class="fas fa-print"></i> Imprimir
    </button>
  </div>

</div>

<style>
  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 10px;
    box-sizing: border-box;
  }
  .logo {
    max-width: 10%;
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
    padding: 20px;
    box-sizing: border-box;
  }
  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    flex-wrap: wrap;
  }
  .campo label {
    font-size: 10px;
    margin-right: 5px;
    font-weight: bold;
  }
  .campo span, .campo p {
    font-size: 10px;
    margin-right: 10px;
  }
  .btn-historial {
    background-color: #007BFF;
    color: white;
    padding: 8px 14px;
    text-decoration: none;
    border-radius: 5px;
    border: none;
    font-size: 14px;
  }
  .btn-historial:hover {
    background-color: #0056b3;
  }
</style>

@endsection
