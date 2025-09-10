@extends('layouts.appHistorial')

@section('title', 'Historial de Formatos')
@section('MessageHeader')
Historial       
@endsection
@section('content')
<div class="ContornoReporte">
  <div style="margin-bottom: 10px;">
    <input type="text" id="filtroNombre" placeholder="Filtrar por nombre del formato" class="filtroNombre">

    <input type="date" id="filtroFecha"class="filtroFecha">

    <button id="btnAplicarFiltro" class="btnAplicarFiltro">
      Aplicar filtros
    </button>
  </div>
  <div class="alerta">
  @if(session('success'))
      <div class="alert alert-purple">
          {{ session('success') }}
      </div>
  @endif
  </div>
<div class="tabla-container">
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
              <div class="detalle collapse" id="detalle-{{ $formato->id }}">
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
</div>

{{-- Estilos embebidos --}}
<style>
  
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