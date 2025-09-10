@extends('layouts.app2')

@section('title', 'Historial de Reportes')

@section('MessageHeader')
Historial de Reportes del Médico
@endsection

@section('content')
<div class="admin-panel">
    <div class="panel-header">
        <h2>Historial de Reportes</h2>
<a href="{{ url()->previous() }}" class="btn-primary">← Regresar</a>
    </div>

@if(!isset($reportes) || $reportes->isEmpty())
        <p>No hay reportes registrados para este médico.</p>
    @else
    <div class="table-wrapper">
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
                <tr>
                    <td>{{ $reporte->id }}</td>
                    <td>{{ $reporte->fecha }}</td>
                    <td>{{ $reporte->reportante->Nombres ?? 'Sin datos' }}</td>
                    <td>{{ $reporte->detalleReporte->medio ?? 'Sin datos' }}</td>
                    <td>{{ $reporte->detalleReporte->asunto ?? 'Sin datos' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection
