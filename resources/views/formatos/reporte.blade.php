@extends('layouts.PlantillaFormatos')

@section('title', 'Reporte')

@section('MessageHeader')
Reporte
@endsection

@section('content')
<div class="ContornoReporte">

  {{-- <div class="botonContenedor">
    <button type="button" class="btn-imprimir" onclick="llenarAutomatico()">Llenado Automático</button>
  </div> --}}

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

    <strong><p class="textos" style="color: #000;">Instituto michoacano de protección Animal</p></strong>

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

    <strong><p>Personal que atiende</p></strong>

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
        <table border="1" cellspacing="0" cellpadding="4">
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
              $items = [
                'Diarrea',
                'Vómito',
                'Parásitos',
                'Problemas respiratorios',
                'Problemas digestivos',
                'Problemas de piel',
                'Problemas neurológicos',
              ];

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
                @for($d = 0; $d < 7; $d++)
                  <td><input type="checkbox" name="dato[{{ $contador }}][{{ $d }}]" style="width: 60px;"></td>
                @endfor
              </tr>
              @php $contador++; @endphp
            @endforeach

            @foreach ($items2 as $item2)
              <tr>
                <td><strong>{{ $item2 }}</strong></td>
                @for($d = 0; $d < 7; $d++)
                  <td><input type="text" name="dato[{{ $contador }}][{{ $d }}]" style="width: 60px;"></td>
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
    document.getElementById('recibio').value = 'Carlos Ruiz';
    document.getElementById('nombre').value = 'Juan Pérez';
    document.getElementById('domicilio').value = 'Av. Insurgentes 123';
    document.getElementById('colonia').value = 'Centro';
    document.getElementById('medio').value = 'Teléfono';
    document.getElementById('motivo').value = 'Se reporta un perro abandonado en la vía pública.';
    document.getElementById('asunto').value = 'Reporte animal';
    document.getElementById('domicilioReporte').value = 'Calle Hidalgo 456';
    document.getElementById('telefono').value = '4431234567';
    document.getElementById('entreCalles').value = 'Entre Madero y Allende';
    document.getElementById('otrasReferencias').value = 'Frente a la tienda OXXO';
    document.getElementById('fechaAtencion').value = new Date().toISOString().substr(0,10);
    document.getElementById('nombreAtiende').value = 'Laura Méndez';
    document.getElementById('horaAtencion').value = '14:30';
    document.getElementById('observaciones').value = 'Animal en estado estable, se traslada al refugio.';
    document.getElementById('evidenciaSi').checked = true;
    document.getElementById('seguimientoSi').checked = true;

    let checkboxes = document.querySelectorAll('.tabla input[type="checkbox"]');
    checkboxes.forEach((checkbox, i) => {
      if(i % 2 === 0) checkbox.checked = true;
    });

    let inputsTabla = document.querySelectorAll('.tabla input[type="text"]');
    inputsTabla.forEach(input => {
      input.value = 'OK';
    });
  }
  </script>

  <script>
  async function capturarYEnviar() {
    const contenedor = document.querySelector('.ContornoReporte');
    const canvas = await html2canvas(contenedor, {
      scale: 2,
      useCORS: true
    });
    const imagenBase64 = canvas.toDataURL('image/png');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');



    if (response.ok) {
      alert("Imagen capturada y guardada correctamente");
      window.location.reload();
    } else {
      alert("Error al guardar la imagen");
    }
  }
  </script>

</div>

<style>
  body {
    --print-spacer-height: 52px;
  }

  @media print {
    #aviso { display: none; }
    .btn-imprimir { display: none !important; }
    .tabla table { font-size: 8px; }
    .ContornoReporte {
      width: 100%;
      padding: 20px 80px;
      box-sizing: border-box;
      background: white;
    }
    .page-break { page-break-before: always; }
    .tabla table {
      width: 100%;
      max-width: none;
      border: 1px solid black;
      border-collapse: collapse;
      page-break-inside: avoid;
    }
    .tabla tr, .tabla td, .tabla th {
      page-break-inside: avoid;
      break-inside: avoid;
    }
    input::placeholder, textarea::placeholder {
      color: transparent !important;
    }
  }

  .ContornoReporte {
    width: 100%;
    padding: 20px 80px;
    box-sizing: border-box;
    background: white;
  }

  .encabezado {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 5px;
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

  .tituloformato {
    border: 3px solid black;
    padding: 1px 30px;
  }

  .subtitulos {
    text-align: center;
    margin: 20px 0 10px 0;
  }

  .campo {
    display: flex;
    align-items: center;
    margin-bottom: 5px;
  }

  .campo label {
    width: 180px;
    font-size: 12px;
  }

  .textos {
    font-size: 12px;
  }

  .inputsReporte {
    flex: 1;
    min-width: 100px;
    padding: 5px 5px 3px 5px;
    font-size: 12px;
    margin: 3px;
    border: none;
    border-bottom: 0.5px solid #000;
    background: transparent;
    outline: none;
    transition: border-color 0.3s ease;
  }

  .inputsReporte:focus {
    border-bottom: 2px solid #7F00FF;
  }

  textarea.inputsReporte {
    resize: none;
    overflow: hidden;
    height: 50px;
  }

  .campo_radios {
    display: flex;
    align-items: center;
  }

  .campo_radios label {
    margin: 0;
    font-size: 12px;
  }

  .campo_radios input[type="radio"] {
    margin: 0;
    vertical-align: middle;
    transform: scale(0.9);
  }

  .opcion_radio {
    display: flex;
    align-items: center;
  }

  .firmas {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
  }

  .firma {
    width: 48%;
    text-align: center;
  }

  .lineaFirma {
    border-bottom: 1px solid black;
    margin-bottom: 8px;
    height: 20px;
  }

  .hoja2 {
    margin-top: 20px;
    display: flex;
    justify-content: center;
  }

  .tabla table {
    border-collapse: collapse;
    width: 100%;
    max-width: 1000px;
  }

  .tabla th, .tabla td {
    border: 1px solid black;
    text-align: center;
    padding: 6px;
  }

  .tabla input[type="checkbox"],
  .tabla input[type="text"] {
    width: 60px;
    margin: 0 auto;
    display: block;
  }

  .btn-imprimir {
    background: linear-gradient(135deg, #7F00FF, #E100FF);
    color: #fff;
    padding: 14px 25px;
    border: none;
    border-radius: 12px;
    font-size: 17px;
    margin-top: 20px;
    cursor: pointer;
    box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
  }

  .btn-imprimir:hover {
    background-color: #fff;
    color: #7F00FF;
    transform: translateY(-5px);
  }

  .botonContenedor {
    display: flex;
    justify-content: center;
  }

  .tabla input[type="checkbox"] {
    accent-color: #7F00FF;
  }

  .fila-fechas {
    display: flex;
    justify-content: flex-start;
    gap: 15px;
    flex-wrap: wrap;
    margin-bottom: 20px;
    font-size: 13px;
  }

  .fila-fechas label {
    font-weight: bold;
    margin: 0 8px;
    font-size: 13px;
  }

  .input-fecha {
    border: none;
    border-bottom: 1px solid #000;
    background: transparent;
    padding: 2px 4px;
    font-size: 12px;
    width: 80px;
    outline: none;
    transition: border-color 0.3s ease;
  }

  .input-fecha:focus {
    border-bottom: 2px solid #7F00FF;
  }

  .inventario-textarea {
    width: 100%;
    height: 40px;
    border: none;
    border-bottom: 1px solid #000;
    font-size: 12px;
    background: transparent;
    resize: none;
    margin-top: 10px;
    outline: none;
  }

  .inventario-textarea:focus {
    border-bottom: 2px solid #7F00FF;
  }
</style>
@endsection
