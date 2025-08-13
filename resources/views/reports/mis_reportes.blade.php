@extends('layouts.app2')

@section('content')

<div class="container mt-4">

    <!-- Usuario -->
    <h3>Bienvenido, {{ $usuario->nombre }}</h3>
    <p><strong>Correo:</strong> {{ $usuario->email }}</p>

    <!-- Último reporte -->
    <div class="my-4 p-3 border rounded bg-light">
        <h4>Última captura</h4>
        @if($ultimoReporte)
            <p><strong>Fecha:</strong> {{ $ultimoReporte->Fecha }}</p>
            <p><strong>Tipo de Formato:</strong> {{ $ultimoReporte->detalleReporte->tipo ?? 'N/A' }}</p>
            <p><strong>Asunto:</strong> {{ $ultimoReporte->detalleReporte->Asunto ?? 'N/A' }}</p>
            <p><strong>Reportante:</strong> {{ $ultimoReporte->reportante->Nombres ?? 'N/A' }}</p>
        @else
            <p>No hay reportes generados.</p>
        @endif
    </div>

    <!-- Tabla de reportes -->
    <h4>Mis reportes generados</h4>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
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
            @forelse ($reportes as $reporte)
            <tr>
                <td>{{ $reporte->id }}</td>
                <td>{{ $reporte->Fecha }}</td>
                <td>{{ $reporte->reportante->Nombres ?? 'N/A' }}</td>
                <td>{{ $reporte->detalleReporte->Medio ?? 'N/A' }}</td>
                <td>{{ $reporte->detalleReporte->Asunto ?? 'N/A' }}</td>
                <td>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalReporte{{ $reporte->id }}">Ver</button>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No hay reportes</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>

<!-- Modales -->
@foreach ($reportes as $reporte)
<div class="modal fade" id="modalReporte{{ $reporte->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $reporte->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel{{ $reporte->id }}">Reporte #{{ $reporte->id }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <p><strong>Fecha:</strong> {{ $reporte->Fecha }}</p>
        <p><strong>Reportante:</strong> {{ $reporte->reportante->Nombres ?? 'N/A' }}</p>
        <p><strong>Medio:</strong> {{ $reporte->detalleReporte->Medio ?? 'N/A' }}</p>
        <p><strong>Asunto:</strong> {{ $reporte->detalleReporte->Asunto ?? 'N/A' }}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection
