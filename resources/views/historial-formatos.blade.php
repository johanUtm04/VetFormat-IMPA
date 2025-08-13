@extends('layouts.appHistorial')

@section('title', 'Historial de Formatos')
@section('MessageHeader')
Historial       
@endsection
@section('content')
<div class="ContornoReporte">
  <h2 class="titulo-historial">
    <i class="fas fa-file-alt"></i> Historial de Formatos Capturados
  </h2>
  <div style="margin-bottom: 20px;">
    <input type="text" id="filtroNombre" placeholder="Filtrar por nombre del formato" style="padding:8px; width: 40%; margin-right: 10px; border: 2px solid #9200FF; border-radius:5px;">

    <input type="date" id="filtroFecha" style="padding:8px; margin-right: 10px; border: 2px solid #9200FF; border-radius:5px;">

    <button id="btnAplicarFiltro" style="background: #7F00FF; color: white; border: none; padding: 8px 16px; border-radius: 6px; cursor: pointer; font-weight: 600;">
      Aplicar filtros
    </button>
  </div>

  <table class="tabla-historial">
    <thead>
      <tr>
        <th>Nombre del Formato</th>
        <th>Fecha</th>
        <th>Usuario</th>
        <th>Acción</th>
        <th>Detalles</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($formatos as $formato)
        <tr>
          <td>{{ $formato->nombre_formato }}</td>
          <td>{{ $formato->created_at->format('d/m/Y H:i') }}</td>
          <td>
            @if($formato->usuario)
              {{ $formato->usuario->nombre }}
            @else
              No tiene usuario (user_id={{ $formato->user_id }})
            @endif
          </td>
          <td>
            <a href="{{ asset('storage/' . $formato->archivo) }}" target="_blank" class="btn-descargar">Descargar</a>
          </td>
          <td>
            @if($formato->captureData)
              <button class="btn-detalle" type="button" data-target="#detalle-{{ $formato->id }}">
                Ver detalle
              </button>
              <div class="detalle collapse" id="detalle-{{ $formato->id }}" style="display: none;">
                <div class="detalle-info">
                  <p><strong>Persona:</strong> {{ $formato->captureData->per_nombres }} {{ $formato->captureData->per_apaterno }} {{ $formato->captureData->per_amaterno }}</p>
                  <p><strong>Dirección:</strong> {{ $formato->captureData->rep_domicilio }}, {{ $formato->captureData->rep_colonia }}, {{ $formato->captureData->rep_ciudad }}, {{ $formato->captureData->rep_estado }}</p>
                  <p><strong>Teléfono:</strong> {{ $formato->captureData->rep_telefono }}</p>
                  <p><strong>Fecha atención:</strong> {{ $formato->captureData->at_fecha }}</p>
                  <p><strong>Observaciones:</strong> {{ $formato->captureData->at_observaciones }}</p>
                </div>
              </div>
            @else
              <em>No hay datos asociados</em>
            @endif
          </td>
        </tr>
      @empty
        <tr><td colspan="5" style="text-align:center;">No hay formatos guardados aún.</td></tr>
      @endforelse
    </tbody>
  </table>
</div>

{{-- Estilos embebidos --}}
<style>
  .tabla-historial {
    width: 100%;
    border-collapse: collapse;
    font-size: 15px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    overflow: hidden;
    background: white;
  }
  .tabla-historial thead {
    background: linear-gradient(135deg, #7F00FF, #E100FF);
    color: #fff;
    text-transform: uppercase;
    letter-spacing: 1px;
  }
  .tabla-historial th,
  .tabla-historial td {
    padding: 14px 18px;
    border-bottom: 1px solid #ddd;
    text-align: center;
  }
  .tabla-historial tbody tr:nth-child(even) {
    background-color: #fafafa;
  }
  .tabla-historial tbody tr:hover {
    background-color: #f0f0f0;
    transition: background 0.3s ease;
  }
  .btn-descargar {
    background: linear-gradient(135deg, #00C9A7, #92FE9D);
    color: white;
    padding: 8px 16px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease-in-out;
    border: none;
    display: inline-block;
  }
  .btn-descargar:hover {
    background: linear-gradient(135deg, #00B894, #55EFC4);
    transform: translateY(-2px);
  }
  .btn-detalle {
    background: linear-gradient(135deg, #0984e3, #74b9ff);
    color: white;
    padding: 8px 14px;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
  }
  .btn-detalle:hover {
    background: linear-gradient(135deg, #74b9ff, #0984e3);
    transform: scale(1.05);
  }
  .detalle {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.5s ease-in-out;
  }
  .detalle.visible {
    max-height: 500px;
  }
  .detalle-info {
    margin-top: 8px;
    padding: 15px;
    background-color: #f8f9fc;
    border-left: 5px solid #7F00FF;
    border-radius: 6px;
    font-size: 14px;
    text-align: left;
    color: #333;
    animation: fadeIn 0.5s ease-in-out;
  }
  .detalle-info p {
    margin: 5px 0;
    color: #111;
  }
  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(-5px); }
    to { opacity: 1; transform: translateY(0); }
  }
  h2 {
    font-size: 24px;
    color: #7F00FF;
    font-weight: bold;
  }
  .ContornoReporte {
    padding: 25px;
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
  }
  .titulo-historial {
    text-align: center;
    margin-bottom: 35px;
    font-size: 26px;
    font-weight: 600;
    background: linear-gradient(to right, #7F00FF, #E100FF);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
    position: relative;
    animation: fadeInDown 0.6s ease-in-out;
  }
  .titulo-historial i {
    margin-right: 10px;
    color: #7F00FF;
    animation: pulse 1.8s infinite;
  }
  @keyframes fadeInDown {
    from {
      opacity: 0;
      transform: translateY(-10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
  @keyframes pulse {
    0%, 100% {
      transform: scale(1);
      opacity: 1;
    }
    50% {
      transform: scale(1.1);
      opacity: 0.8;
    }
  }
</style>

<script>
  // Toggle detalles expandibles
  document.querySelectorAll('.btn-detalle').forEach(button => {
    button.addEventListener('click', () => {
      const target = button.getAttribute('data-target');
      const detalle = document.querySelector(target);
      if (detalle.style.display === 'block') {
        detalle.style.display = 'none';
      } else {
        detalle.style.display = 'block';
      }
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Toggle clase visible para animación max-height
    document.querySelectorAll('.btn-detalle').forEach(button => {
      button.addEventListener('click', () => {
        const target = button.getAttribute('data-target');
        const detalle = document.querySelector(target);
        if (detalle) {
          detalle.classList.toggle('visible');
        }
      });
    });
  });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const filtroNombre = document.getElementById('filtroNombre');
  const filtroFecha = document.getElementById('filtroFecha');
  const btnAplicarFiltro = document.getElementById('btnAplicarFiltro');
  const tbody = document.querySelector('.tabla-historial tbody');

  function filtrarTabla() {
    const nombreVal = filtroNombre.value.toLowerCase();
    const fechaVal = filtroFecha.value; // yyyy-mm-dd
    const filas = tbody.querySelectorAll('tr:not(.no-result)');
    let visibles = 0;

    filas.forEach(fila => {
      const nombreFormato = fila.cells[0].textContent.toLowerCase();
      const fechaTexto = fila.cells[1].textContent; // formato dd/mm/yyyy hh:mm

      // Convertir fechaTexto a yyyy-mm-dd
      let partesFecha = fechaTexto.split(' ')[0].split('/');
      let fechaFormatoISO = partesFecha[2] + '-' + partesFecha[1].padStart(2,'0') + '-' + partesFecha[0].padStart(2,'0');

      let mostrar = true;
      if (nombreVal && !nombreFormato.includes(nombreVal)) mostrar = false;
      if (fechaVal && fechaFormatoISO !== fechaVal) mostrar = false;

      fila.style.display = mostrar ? '' : 'none';

      if (mostrar) visibles++;
    });

    // Mostrar mensaje si no hay resultados
    let noResultRow = tbody.querySelector('.no-result');
    if (visibles === 0) {
      if (!noResultRow) {
        noResultRow = document.createElement('tr');
        noResultRow.classList.add('no-result');
        noResultRow.innerHTML = `<td colspan="5" style="text-align:center; font-style: italic; color: #666;">No se encontraron formatos.</td>`;
        tbody.appendChild(noResultRow);
      }
    } else {
      if (noResultRow) {
        noResultRow.remove();
      }
    }
  }

  btnAplicarFiltro.addEventListener('click', filtrarTabla);
});

</script>

@endsection