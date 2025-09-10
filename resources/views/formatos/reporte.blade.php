@extends('layouts.PlantillaFormatos')

@section('title', 'Reporte')

@section('MessageHeader')
Reporte
@endsection

@section('content')
<div class="ContornoReporte">

  <div class="encabezado">
    <img src="{{ asset('images/MoreliaBrilla.png') }}" alt="Logo Morelia Brilla" class="logo">
    <h2 class="tituloformato nombre_formato">Reporte</h2>
    <div class="encabezado3">
      <label>Forma 001</label><br>
      <label>Reporte no______</label><br>
      <label>Fecha___________</label>
    </div>
  </div>

  <div class="campo">
    <label for="recibio">Recibió:</label>
    <input type="text" name="recibio" id="recibio" class="inputsReporte" placeholder="Ingresa tu nombre" required>
  </div>

  <p class="textos" style="font-weight: bold; color: #000;">Instituto michoacano de protección Animal</p>

  <h3 class="subtitulos">DATOS DEL REPORTANTE</h3>

  <div class="campo">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" class="inputsReporte" placeholder="Ingresa tu nombre" required>
  </div>

  <div class="campo">
    <label for="domicilio">Domicilio:</label>
    <input type="text" name="domicilio" id="domicilio" class="inputsReporte" placeholder="Ingresa domicilio" required>
  </div>

  <div class="campo">
    <label for="colonia">Colonia:</label>
    <input type="text" name="colonia" id="colonia" class="inputsReporte" placeholder="Ingresa colonia" required>
  </div>

  <h3 class="subtitulos">DETALLE DEL REPORTE</h3>

  <div class="campo">
    <label for="medio">Medio:</label>
    <input type="text" name="medio" id="medio" class="inputsReporte" placeholder="Medio por el que se reporta" required>
  </div>

  <div class="campo">
    <label for="motivo">Motivo del reporte:</label>
    <textarea id="motivo" name="motivo" class="inputsReporte" placeholder="Describe el motivo" required></textarea>
  </div>

  <div class="campo">
    <label for="asunto">Asunto:</label>
    <input type="text" name="asunto" id="asunto" class="inputsReporte" placeholder="Asunto del reporte" required>
  </div>

  <h3 class="subtitulos">DOMICILIO DEL REPORTE</h3>

  <div class="campo">
    <label for="domicilioReporte">Domicilio:</label>
    <input type="text" name="domicilioReporte" id="domicilioReporte" class="inputsReporte" placeholder="Domicilio reportado" required>
  </div>

  <div class="campo">
    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" id="telefono" class="inputsReporte" placeholder="Teléfono" required>
  </div>

  <div class="campo">
    <label for="entreCalles">Entre calles:</label>
    <input type="text" name="entreCalles" id="entreCalles" class="inputsReporte" placeholder="Entre calles" required>
  </div>

  <div class="campo">
    <label for="otrasReferencias">Otras referencias:</label>
    <input type="text" name="otrasReferencias" id="otrasReferencias" class="inputsReporte" placeholder="Otras referencias">
  </div>

  <h3 class="subtitulos">ATENCIÓN AL REPORTE</h3>

  <div class="campo">
    <label for="fechaAtencion">Fecha de atención:</label>
    <input type="date" name="fechaAtencion" id="fechaAtencion" class="inputsReporte" required>
  </div>

  <div class="campo">
    <label for="nombreAtiende">Nombre del <br> ciudadano que atiende:</label>
    <input type="text" name="nombreAtiende" id="nombreAtiende" class="inputsReporte" placeholder="Nombre del ciudadano" required>
  </div>

  <div class="campo">
    <label for="horaAtencion">Hora de atención:</label>
    <input type="time" name="horaAtencion" id="horaAtencion" class="inputsReporte" required>
  </div>

  <div class="campo">
    <label for="observaciones">Observaciones:</label>
    <textarea id="observaciones" name="observaciones" class="inputsReporte" placeholder="Escribe observaciones" maxlength="796"></textarea>
  </div>

  <div class="campo_radios">
    <label>¿Envió evidencia?</label>
    <input type="radio" id="evidenciaSi" name="evidencia" value="si" required>
    <label for="evidenciaSi">Sí</label>
    <input type="radio" id="evidenciaNo" name="evidencia" value="no">
    <label for="evidenciaNo">No</label>
  </div>

  <div class="campo_radios">
    <label>¿Seguimiento?</label>
    <div class="opcion_radio">
      <input type="radio" id="seguimientoSi" name="seguimiento" value="si" required>
      <label for="seguimientoSi">Sí</label>
    </div>
    <div class="opcion_radio">
      <input type="radio" id="seguimientoNo" name="seguimiento" value="no">
      <label for="seguimientoNo">No</label>
    </div>
  </div>

  <p style="font-weight: bold;">Personal que atiende</p>

  <div class="firmas">
    <div class="firma">
      <div class="lineaFirma"></div>
      <label>Nombre y Firma</label>
    </div>
    <div class="firma">
      <div class="lineaFirma"></div>
      <label>Vo. Bo Instituto Moreliano de <br> protección Animal</label>
    </div>
  </div>

  <div class="hoja2">
    <div class="tabla">
      <table>
        <thead>
          <tr>
            <th></th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
            <th>Sábado</th>
            <th>Domingo</th>
          </tr>
        </thead>
        <tbody>
          @php
            $items = ['Diarrea','Vómito','Parásitos','Problemas respiratorios','Problemas digestivos','Problemas de piel','Problemas neurológicos'];
            $items2 = [
              'Lesiones: TRAUMATISMO(T), FRACTURA(F), GOLPE(G)',
              'Mucosa: PÁLIDAS(P), NORMALES(N), ICTÉRICAS(I), CIANÓTICAS(C)',
              'Condición corporal: MUY DELGADO(MD), DELGADO(D), IDEAL(I), SOBREPESO(SP), OBESIDAD(O)',
              'Problemas de piel: SARNA(S), HONGO(H), PULGAS Y GARRAPATAS(PG)',
              'Inapetencia (I)(no comió)',
              'Apetencia (A)(comió)',
              'Tomó agua (Sí/No)',
              'Fotofobia y Anisocoria',
              'Ptialismo',
              'Incordinación de movimiento',
              'Postración',
              'Tratamiento (Sí/No, cantidad)',
              'Muerte (Sí/No), evaluó (nombre y firma)'
            ];
            $contador = 0;
          @endphp

          @foreach ($items as $item)
            <tr>
              <td><strong>{{ $item }}</strong></td>
              @for($d=0;$d<7;$d++)
                <td><input type="checkbox" name="dato[{{ $contador }}][{{ $d }}]"></td>
              @endfor
            </tr>
            @php $contador++; @endphp
          @endforeach

          @foreach ($items2 as $item2)
            <tr>
              <td><strong>{{ $item2 }}</strong></td>
              @for($d=0;$d<7;$d++)
                <td><input type="text" name="dato[{{ $contador }}][{{ $d }}]"></td>
              @endfor
            </tr>
            @php $contador++; @endphp
          @endforeach
        </tbody>
      </table>

      <div class="campo">
        <label style="font-weight: bold; margin-right: 10px;">INVENTARIO:</label>
        <textarea class="inventario-textarea" name="inventario" placeholder="Describa el inventario..."></textarea>
      </div>
    </div>
  </div>

  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">

  <script>
    function llenarAutomatico() {
      const datos = {
        recibio:'Carlos Ruiz', nombre:'Juan Pérez', domicilio:'Av. Insurgentes 123', colonia:'Centro',
        medio:'Teléfono', motivo:'Se reporta un perro abandonado en la vía pública.',
        asunto:'Reporte animal', domicilioReporte:'Calle Hidalgo 456', telefono:'4431234567',
        entreCalles:'Entre Madero y Allende', otrasReferencias:'Frente a la tienda OXXO',
        fechaAtencion:new Date().toISOString().substr(0,10), nombreAtiende:'Laura Méndez',
        horaAtencion:'14:30', observaciones:'Animal en estado estable, se traslada al refugio.'
      };

      for (let id in datos) {
        document.getElementById(id).value = datos[id];
      }

      document.getElementById('evidenciaSi').checked = true;
      document.getElementById('seguimientoSi').checked = true;

      document.querySelectorAll('.tabla input[type="checkbox"]').forEach((checkbox,i)=>{if(i%2===0) checkbox.checked=true;});
      document.querySelectorAll('.tabla input[type="text"]').forEach(input=>{input.value='OK';});
    }

    async function capturarYEnviar() {
      const contenedor = document.querySelector('.ContornoReporte');
      const canvas = await html2canvas(contenedor,{scale:2,useCORS:true});
      const imagenBase64 = canvas.toDataURL('image/png');
      const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    }
  </script>

  <style>
    @media print{
      body{--print-spacer-height:52px;}
      #aviso, .btn-imprimir{display:none !important;}
      .tabla table{font-size:8px; width:100%; max-width:none; border:1px solid black; border-collapse:collapse;}
      .ContornoReporte{border:0 !important; border-image:none !important; box-shadow:none !important;}
      .tabla tr,.tabla td,.tabla th{page-break-inside:avoid; break-inside:avoid;}
      input::placeholder,textarea::placeholder{color:transparent !important;}
    }
    .ContornoReporte{width:100%;padding:20px 80px;box-sizing:border-box;background:white;border:5px solid; border-image:linear-gradient(135deg,#7F00FF,#E100FF) 1; border-radius:20px;}
    .encabezado{display:flex;justify-content:space-between;align-items:center;background:white;padding:5px;}
    .logo{max-width:15%;height:auto;}
    .encabezado3{text-align:left;padding:5px;}
    .encabezado3 label{font-weight:bold;}
    .tituloformato{border:3px solid black;padding:1px 30px;}
    .subtitulos{text-align:center;margin:20px 0 10px 0;}
    .campo{display:flex;align-items:center;margin-bottom:5px;}
    .campo label{width:180px;font-size:12px;}
    .textos{font-size:12px;}
    .inputsReporte{flex:1;min-width:100px;padding:5px 5px 3px 5px;font-size:12px;margin:3px;border:none;border-bottom:0.5px solid #000;background:transparent;outline:none;transition:border-color .3s;}
    .inputsReporte:focus{border-bottom:2px solid #7F00FF;}
    textarea.inputsReporte{resize:none;overflow:hidden;height:50px;}
    .campo_radios{display:flex;align-items:center;}
    .campo_radios label{margin:0;font-size:12px;}
    .campo_radios input[type="radio"]{margin:0;vertical-align:middle;transform:scale(0.9);}
    .opcion_radio{display:flex;align-items:center;}
    .firmas{display:flex;justify-content:space-between;margin-top:30px;}
    .firma{width:48%;text-align:center;}
    .lineaFirma{border-bottom:1px solid black;margin-bottom:8px;height:20px;}
    .hoja2{margin-top:20px;display:flex;justify-content:center;}
    .tabla table{border-collapse:collapse;width:100%;max-width:1000px;}
    .tabla th,.tabla td{border:1px solid black;text-align:center;padding:6px;}
    .tabla input[type="checkbox"],.tabla input[type="text"]{width:60px;margin:0 auto;display:block;}
    .botonContenedor{display:flex;justify-content:center;}
    .tabla input[type="checkbox"]{accent-color:#7F00FF;}
    .fila-fechas{display:flex;justify-content:flex-start;gap:15px;flex-wrap:wrap;margin-bottom:20px;font-size:13px;}
    .fila-fechas label{font-weight:bold;margin:0 8px;font-size:13px;}
    .input-fecha{border:none;border-bottom:1px solid #000;background:transparent;padding:2px 4px;font-size:12px;width:80px;outline:none;transition:border-color .3s;}
    .input-fecha:focus{border-bottom:2px solid #7F00FF;}
    .inventario-textarea{width:100%;height:40px;border:none;border-bottom:1px solid #000;font-size:12px;background:transparent;resize:none;margin-top:10px;outline:none;}
    .inventario-textarea:focus{border-bottom:2px solid #7F00FF;}
  </style>

</div>
@endsection
