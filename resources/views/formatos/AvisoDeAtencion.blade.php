@extends('layouts.PlantillaFormatos')
@section('title', 'Aviso de atencion')
@section('MessageHeader')
Aviso de atencion
@endsection

@section('content')

<div class="ContornoReporte">

  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Aviso de atencion</h2>

    <div class="encabezado3">
      <label>Forma 017</label> <br>
      <label>Reporte no______</label> <br>
      <label>Fecha___________</label>
    </div>

  </div>

      {{-- FORMULARIO --}}
  <form method="POST" action="{{ route('guardar.formato') }}">
  <br><br>
  {{-- Sección 1 --}}
  <p>Siendo las 
    <input type="text" class="inputsReporte" style="width:80px;"> horas del día 
    <input type="text" class="inputsReporte" style="width:80px;"> del año 20
    <input type="text" class="inputsReporte" style="width:50px;">, se realizó visita de inspección, supervisión y verificación, de acuerdo al REPORTE NO.
    <input type="text" class="inputsReporte" style="width:100px;"> de fecha 
    <input type="text" class="inputsReporte" style="width:100px;"> por:
  </p>

  <div class="campo">
    <label style="width:auto;">
      <input type="checkbox"> Ejemplar o ejemplares en la vía pública
    </label>
    <label style="margin-left:10px;">
      <input type="checkbox"> Se realizó resguardo
    </label>
    <label style="margin-left:10px;">
      <input type="checkbox"> No se realizó resguardo
    </label>
  </div>

  <div class="campo">
    <label style="width:auto;">
      <input type="checkbox"> Ejemplar o ejemplares agresores
    </label>
    <label style="margin-left:10px;">
      <input type="checkbox"> Se realizó resguardo
    </label>
    <label style="margin-left:10px;">
      <input type="checkbox"> No se realizó resguardo
    </label>
  </div>

  <div class="campo">
    <label style="width:auto;">
      <input type="checkbox"> Ejemplar o ejemplares en condiciones inadecuadas o contrarias al bienestar animal (maltrato animal)
    </label>
  </div>

  <p>Y en virtud de no haber encontrado ninguna persona en el desarrollo de la diligencia en el domicilio ubicado en:</p>

  <div class="campo">
    <label>Calle:</label>
    <input type="text" class="inputsReporte">
    <label style="margin-left:10px;">No.:</label>
    <input type="text" class="inputsReporte" style="width:80px;">
    <label style="margin-left:10px;">Colonia:</label>
    <input type="text" class="inputsReporte">
  </div>

  <p>de esta ciudad, queda obligado a realizar la siguiente acción:</p>

  <div class="campo">
    <input type="checkbox">
    <label style="width:auto;">Acuda a las instalaciones de Protección Animal, ubicada en la avenida Los Álamos número 395, de la colonia Los Álamos, de esta ciudad, a las</label>
    <input type="text" class="inputsReporte" style="width:80px;"> del día 
    <input type="text" class="inputsReporte" style="width:80px;"> del mes 
    <input type="text" class="inputsReporte" style="width:80px;"> año 20
    <input type="text" class="inputsReporte" style="width:50px;">
  </div>

  <p>Lo anterior de conformidad con los artículos 6, 7, 8, 89 y 92 del Código de Justicia Administrativa del Estado de Michoacán de Ocampo. Haciéndole del conocimiento que el MALTRATO Y CRUELDAD ANIMAL ESTÁ TIPIFICADO COMO DELITO, POR EL CÓDIGO PENAL DEL ESTADO DE MICHOACÁN DE OCAMPO, en sus artículos 309, 310 y 311. Y en caso de no acudir a la citación se turnará el asunto a la Fiscalía General del Estado de Michoacán de Ocampo.</p>

  <div class="campo">
    <label style="width:auto;">
      <input type="checkbox"> Se deja
    </label>
    <label style="margin-left:10px;">
      <input type="checkbox"> Poner de
    </label>
    <label style="margin-left:10px;">
      <input type="checkbox"> Fijado en la puerta
    </label>
  </div>

  <br><br> <br>  <br><br> <br>  <br><br> <br>
  <div style="text-align:center; margin-top:30px;">
    <label style="border-top:1px solid black; padding-top:5px;">NOMBRE Y FIRMA PERSONAL IMPA</label>
  </div>

  {{-- CierreForm --}}
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">
  </form>
</div>

<style>
body {
  .print-spacer {
    display: block;
    height: var(--print-spacer-height, 100px); /* valor por defecto */
  }
}
.tituloformato {
  border: 3px solid black;
  padding: 1px 30px 1px 30px;
  /* arriba, derecha, abajo, izquierda */
}
  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 10px;
    box-sizing: border-box;
  }

  .logo {
    max-width: 15%;
    height: auto;
  }

  .encabezado3 {
    text-align: left;
    padding: 5px;

  }

        .encabezado3 label{
font-weight: bold;
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
    margin-bottom: 10px;
    flex-wrap: wrap;
  }

  .campo label {
    font-size: 12px;
  }

  .inputsReporte {
    border: none;
    border-bottom: 0.5px solid black;
    outline: none;
    font-size: 12px;
    padding: 4px;
    box-sizing: border-box;
    margin-left: 5px;
  }

  p {
    font-size: 12px;
    margin-bottom: 10px;
    text-align: justify;
    color: black;
  }

    .btn-imprimir {
    background: linear-gradient(135deg, #7F00FF, #E100FF);
    color: #fff;
    padding: 10px 18px;
    border: none;
    border-radius: 10px;
    font-size: 14px;
    margin-top: 15px;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
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
