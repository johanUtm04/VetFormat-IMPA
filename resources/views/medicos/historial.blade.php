@extends('layouts.app2')

@section('title', 'Historial de Reportes-Admin')

@section('MessageHeader')
Historial de Reportes del Médico
@endsection

@section('content')

<div class="admin-panel">
    <div class="panel-header">
        <h2>Historial de Reportesz</h2>
    </div>

    <h3 style="margin-bottom: 20px;">Historial de Reportes de {{ $medico->nombre }}</h3>

    @if($reportes->isEmpty())
        <p>No hay reportes registrados para este médico.</p>
    @else
        <div class="table-wrapper" >
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Reportante</th>
                        <th>Medio</th>
                        <th>Asunto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reportes as $reporte)
                        <tr  style="color: black">
                            <td>{{ $reporte->id }}</td>
                            <td>{{ $reporte->Fecha }}</td>
                            <td>{{ $reporte->reportante->Nombres ?? 'Sin datos' }}</td>
                            <td>{{ $reporte->detalleReporte->Medio ?? 'Sin datos' }}</td>
                            <td>{{ $reporte->detalleReporte->Asunto ?? 'Sin datos' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>


<style>
/* Botón principal */
.btn-primary {
  background-color: #007BFF;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
  border-radius: 6px;
  font-size: 14px;
  transition: background-color 0.3s ease;
  display: inline-block;
}

.btn-primary:hover {
  background-color: #0056b3;
  color: #fff;
}

/* Encabezado del panel */
.panel-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

/* Tabla con estilos */
.table-wrapper {
  overflow-x: auto;
}

.styled-table {
  border-collapse: collapse;
  width: 100%;
  font-size: 13px;
  font-family: 'Poppins', sans-serif;
  min-width: 600px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

.styled-table thead tr {
  background-color: #007BFF;
  color: #ffffff;
  text-align: left;
}

.styled-table th, .styled-table td {
  padding: 12px 15px;
  border-bottom: 1px solid #dddddd;
  text-align: center;
}

.styled-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.styled-table tbody tr:hover {
  background-color: #e6f0ff;
  cursor: pointer;
}

.admin-panel h2 {
  font-size: 22px;
  margin-bottom: 10px;
  color: #173C66;
}
</style>


@endsection
