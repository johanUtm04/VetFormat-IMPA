@extends('layouts.appMedicos')
@section('title', 'Lista de Médicos')
@section('MessageHeader')
Administrar Médicos Registrados 
@endsection
@section('content')
<div class="admin-panel">
  <div class="panel-header">
  <h2>Médicos Registrados</h2>
  <a href="{{ route('medicos.create') }}" class="btn-primary">Agregar Médico</a>
  </div>
  @if(session('created'))
  <div class="alert alert-blue">
  {{ session('created') }}
  </div>
  @endif
  @if(session('updated'))
  <div class="alert alert-yellow">
  {{ session('updated') }}
  </div>
  @endif
  @if(session('deleted'))
  <div class="alert alert-red">
  {{ session('deleted') }}
  </div>
  @endif
  <div class="table-wrapper">
  <table class="styled-table">
  <thead>
  <tr>
  <th>Nombre</th>
  <th>Correo</th>
  <th>Especialidad</th>
  <th>Estado</th>
  <th>Acciones</th>
  </tr>
  </thead>
  <tbody>
  @forelse ($medicos as $medico)
  <tr>
  <td>{{ $medico->nombre }}</td>
  <td>{{ $medico->correo }}</td>
  <td>{{ $medico->especialidad }}</td>
  <td>
  <span class="status {{ $medico->estado === 'Activo' ? 'active' : 'inactive' }}">
  {{ $medico->estado }}
  </span>
  </td>
  <td>
  <!-- Botón Editar transparente -->
  <a href="{{ route('medicos.edit', $medico->id) }}"  
  style="background: transparent; color: #4CAF50; padding: 8px 14px; border: 2px solid #4CAF50; border-radius: 8px; text-decoration: none; font-weight: 600; font-family: 'Segoe UI', sans-serif; transition: all 0.3s ease; margin-right: 6px; display:inline-block;"
  onmouseover="this.style.background='#4CAF50'; this.style.color='white';"
  onmouseout="this.style.background='transparent'; this.style.color='#4CAF50';">
  Editar
  </a>
  <!-- Botón Eliminar transparente -->
  <form action="{{ route('medicos.destroy', $medico->id) }}" method="POST" style="display:inline;">
  @csrf
  @method('DELETE')
  <button type="submit"
  onclick="return confirm('¿Eliminar este médico?')"
  style="background: transparent; color: #e53935; padding: 8px 14px; border: 2px solid #e53935; border-radius: 8px; font-weight: 600; font-family: 'Segoe UI', sans-serif; cursor: pointer; transition: all 0.3s ease; margin-right: 6px;"
  onmouseover="this.style.background='#e53935'; this.style.color='white';"
  onmouseout="this.style.background='transparent'; this.style.color='#e53935';">
  Eliminar
  </button>
  </form>
  <!-- Botón Historial transparente -->
  <a href="{{ url('/medicos/' . ($medico->id ) . '/historial') }}"
  style="background: transparent; color: #3f51b5; padding: 8px 14px; border: 2px solid #3f51b5; border-radius: 8px; text-decoration: none; font-weight: 600; font-family: 'Segoe UI', sans-serif; transition: all 0.3s ease; display:inline-block;"
  onmouseover="this.style.background='#3f51b5'; this.style.color='white';"
  onmouseout="this.style.background='transparent'; this.style.color='#3f51b5';">
  Ver historial
  </a>
  </td>
  </tr>
  @empty
  <tr>
  <td colspan="5">No hay médicos registrados aún.</td>
  </tr>
  @endforelse
  </tbody>
  </table>
  </div>
</div>
@endsection
{{-- johan --}}