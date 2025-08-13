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

  {{-- Filtros --}}
  <div class="filtros-container">
    <input type="text" id="filtroNombre" placeholder="Filtrar por nombre del formato">
    <input type="date" id="filtroFecha">
    <button id="btnAplicarFiltro">Aplicar filtros</button>
  </div>

  {{-- Tabla --}}
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
              <button class="btn-detalle" type="button" data-target="#detalle-{{ $formato->id }}">Ver detalle</button>
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

{{-- Estilos embebidos --}}
<style>
/* Contenedor */
.ContornoReporte {
  padding: 25px;
  background-color: #ffffff;
  border-radius: 15px;
  box-shadow: 0 6px 20px rgba(0,0,0,0.1);
  margin-bottom: 40px;
  overflow-x: auto; /* scroll horizontal en móviles */
}

/* Título */
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

/* Filtros */
.filtros-container {
  margin-bottom: 20px;
}
.filtros-container input, .filtros-container button {
  padding: 8px;
  border-radius: 5px;
  border: 2px solid #9200FF;
  margin-right: 10px;
  font-size: 14px;
  box-sizing: border-box;
}
.filtros-container button {
  background: #7F00FF;
  color: white;
  border: none;
  cursor: pointer;
  font-weight: 600;
}

/* Tabla */
.tabla-historial {
  width: 100%;
  border-collapse: collapse;
  font-size: 15px;
  box-shadow: 0 8px 24px rgba(0,0,0,0.1);
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
.tabla-historial th, .tabla-historial td {
  padding: 14px 18px;
  border-bottom: 1px solid #ddd;
  text-align: center;
}
.tabla-historial tbody tr:nth-child(even) { background-color: #fafafa; }
.tabla-historial tbody tr:hover { background-color: #f0f0f0; transition: background 0.3s ease; }

/* Botones */
.btn-descargar {
  background: linear-gradient(135deg, #00C9A7, #92FE9D);
  color: white;
  padding: 8px 16px;
  border-radius: 8px;
  text-decoration: none;
  font-weight: 600;
  border: none;
  display: inline-block;
  transition: all 0.3s ease-in-out;
}
.btn-descargar:hover { transform: translateY(-2px); }

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
.btn-detalle:hover { transform: scale(1.05); }

/* Detalles expandibles */
.detalle { max-height: 0; overflow: hidden; transition: max-height 0.5s ease-in-out; }
.detalle.visible { max-height: 500px; }
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
.detalle-info p { margin: 5px 0; color: #111; }

/* Animaciones */
@keyframes fadeIn { from { opacity: 0; transform: translateY(-5px); } to { opacity:1; transform:translateY(0); } }
@keyframes fadeInDown { from {opacity:0; transform:translateY(-10px);} to {opacity:1; transform:translateY(0);} }
@keyframes pulse {0%,100%{transform:scale(1);opacity:1;}50%{transform:scale(1.1);opacity:0.8;}}

/* Responsividad */
@media (max-width: 768px) {
  .filtros-container input, .filtros-container button { width: 100%; margin-bottom: 10px; }
  .tabla-historial th, .tabla-historial td { padding: 10px; font-size: 13px; }
  .titulo-historial { font-size: 20px; }
}

@media (max-width: 480px) {
  .tabla-historial th, .tabla-historial td { padding: 8px; font-size: 12px; }
  .btn-descargar, .btn-detalle { padding: 6px 10px; font-size: 12px; }
  .detalle-info { font-size: 12px; padding: 10px; }
  .titulo-historial { font-size: 18px; }
}
</style>

{{-- Scripts --}}
<script>
  // Toggle detalles expandibles
  document.querySelectorAll('.btn-detalle').forEach(button => {
    button.addEventListener('click', () => {
      const target = button.getAttribute('data-target');
      const detalle = document.querySelector(target);
      detalle.style.display = (detalle.style.display === 'block') ? 'none' : 'block';
      detalle.classList.toggle('visible');
    });
  });

  // Filtro de tabla
  document.addEventListener('DOMContentLoaded', function () {
    const filtroNombre = document.getElementById('filtroNombre');
    const filtroFecha = document.getElementById('filtroFecha');
    const btnAplicarFiltro = document.getElementById('btnAplicarFiltro');
    const tbody = document.querySelector('.tabla-historial tbody');

    btnAplicarFiltro.addEventListener('click', () => {
      const nombreVal = filtroNombre.value.toLowerCase();
      const fechaVal = filtroFecha.value;
      const filas = tbody.querySelectorAll('tr:not(.no-result)');
      let visibles = 0;

      filas.forEach(fila => {
        const nombreFormato = fila.cells[0].textContent.toLowerCase();
        const fechaTexto = fila.cells[1].textContent;
        let partes = fechaTexto.split(' ')[0].split('/');
        let fechaISO = partes[2] + '-' + partes[1].padStart(2,'0') + '-' + partes[0].padStart(2,'0');

        let mostrar = true;
        if(nombreVal && !nombreFormato.includes(nombreVal)) mostrar=false;
        if(fechaVal && fechaISO!==fechaVal) mostrar=false;

        fila.style.display = mostrar ? '' : 'none';
        if(mostrar) visibles++;
      });

      // Mensaje si no hay resultados
      let noResultRow = tbody.querySelector('.no-result');
      if(visibles === 0) {
        if(!noResultRow){
          noResultRow = document.createElement('tr');
          noResultRow.classList.add('no-result');
          noResultRow.innerHTML = `<td colspan="5" style="text-align:center; font-style:italic; color:#666;">No se encontraron formatos.</td>`;
          tbody.appendChild(noResultRow);
        }
      } else if(noResultRow){ noResultRow.remove(); }
    });
  });
</script>

@endsection
{{-- johan --}}
