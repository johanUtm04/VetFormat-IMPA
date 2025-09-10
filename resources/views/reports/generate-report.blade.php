@extends('layouts.app2')

@section('title', 'Reporte de Historial')

@section('MessageHeader')
  <h3>Generar Reporte</h3>
@endsection

@section('content')
  <div class="form_box5">
    <div class="form" style="flex: 1;">

      <h2>Reporte de la fecha: ""</h2>

      <div class="">
        <div class="registro">
          <h1>Fecha Seleccionada:</h1>
          Miércoles, 3 de mayo de 1995 a las 08:27 p.m
        </div>
      </div>

      <br>

      <div class="Generacion_Box">
        <button class="btn_filtro">Generar Reporte</button>

        <div class="iconos-descarga">
          <img src="{{ asset('/images/pdf.png') }}" alt="PDF">
          <img src="{{ asset('/images/word.png') }}" alt="Word">
          <img src="{{ asset('/images/excel.png') }}" alt="Excel">
        </div>
      </div>

    </div>
  </div>
@endsection
