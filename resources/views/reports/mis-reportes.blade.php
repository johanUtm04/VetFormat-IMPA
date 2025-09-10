@extends('layouts.app2')

@section('title', 'Mis Reportes')

@section('MessageHeader')
Mis Reportes Registrados
@endsection

@section('content')
<div class="admin-panel">
    <div class="panel-header">
        <h2>Mis Reportes</h2>
        <a href="{{ route('reports.capture-data') }}" class="btn-primary">+ Nuevo Reporte</a>
    </div>

    @if($reportes->isEmpty())
        <p>No has registrado reportes todavía.</p>
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
                    <th>Acciones</th>
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
                    <td>
                        {{-- Aquí puedes agregar acciones como ver detalles o eliminar --}}
                        <a href="#" class="btn-secondary">Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection
