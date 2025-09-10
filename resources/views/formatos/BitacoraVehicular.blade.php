@extends('layouts.PlantillaFormatos')

@section('title', 'Bitacora Vehicular')

@section('MessageHeader')
Bitacora Vehicular
@endsection

@section('content')

<div class="ContornoReporte">

  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    
    <h2 class="tituloformato nombre_formato">Bitacora Vehicular</h2>

    <div class="encabezado3">
      <label>Forma 003</label> <br>
      <label>Reporte no______</label> <br>
      <label>Fecha___________</label>
    </div>
  </div>


    <div class="tabla">
    
    <form action="guardar_datos.php" method="POST">
      <table id="miTabla">
        <thead>
          <tr>
            <th>Hora</th>
            <th>Colonia/Sector</th>
            <th>Km Inicio</th>
            <th>Km Final</th>
            <th>Autorización de control de gasolina y mantenimiento</th>
            <th>Observaciones</th>
          </tr>
        </thead>

        <tbody>
          @for($i = 0; $i <7; $i++)
          <tr>
            <td><input type="time" name="hora"></td>
            
            <td><textarea name="colonia"></textarea></td>
            
            <td><input type="number" name="kmInicio"></td>
            
            <td><input type="number" name="kmFinal"></td>
            
            <td><input type="text" name="gasolina"></td>
            
            <td><textarea name="observaciones"></textarea></td>
          </tr>
          @endfor
        </tbody>
      </table>
      <div class="firma">
        <div class="lineaFirma"></div>
        <label>Conductor Responsable <br> (Nombre y Firma)</label>
      </div>
  </div>

<style>
  @media print{
    .ContornoReporte{border:0 !important; border-image:none !important; box-shadow:none !important;}
  }
  body { --print-spacer-height: 10px; }

  .ContornoReporte{margin-top: 30px; width:100%;padding:20px 80px;box-sizing:border-box;background:white;border:5px solid; border-image:linear-gradient(135deg,#7F00FF,#E100FF) 1; border-radius:20px;}

  .encabezado { display: flex; justify-content: space-between; align-items: center; background-color: rgb(255, 255, 255); padding: 10px; box-sizing: border-box; }

  .logo { max-width: 15%; height: auto; }

  .tituloformato { border: 3px solid black; padding: 1px 30px; }

  .encabezado3 { text-align: left; padding: 5px; }

  .encabezado3 label { font-weight: bold; }

  .tabla { margin: 20px 0; }

  table { border-collapse: collapse; width: 100%; }

  th, td { border: 1.5px solid black; padding: 6px; text-align: center; }

  thead { background: linear-gradient(135deg, #7F00FF, #E100FF); }

  input[type="text"], input[type="number"], textarea { width: 70%; box-sizing: border-box; padding: 5px; font-size: 10px; border: none; }

  textarea { resize: none; overflow: hidden; height: 50px; }

  .firma { width: 50%; margin: 30px auto; text-align: center; }

  .lineaFirma { border-bottom: 1px solid black; height: 20px; margin-bottom: 8px; }

  .btn-imprimir { background: linear-gradient(135deg, #7f00ff, #e100ff); color: #fff; padding: 14px 25px; border: none; border-radius: 12px; font-size: 17px; margin-top: 20px; cursor: pointer; box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15); transition: all 0.3s ease; }

  .btn-imprimir:hover { background-color: #ffffff; color: #7f00ff; transform: translateY(-5px); }

  .botonContenedor { display: flex; justify-content: center; }
</style>

</div>
@endsection
