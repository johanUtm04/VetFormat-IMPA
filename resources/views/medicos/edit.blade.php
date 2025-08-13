@extends('layouts.app')
@section('title', 'Editar Médico')
@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin-medicos.css') }}">
@endpush
@section('MessageHeader')
Editar Médico
@endsection
@section('content')

<div class="admin-panel">
  <div class="panel-header">
  <h2>Editar Médico</h2>
  <a href="{{ route('medicos.index') }}" class="btn-secondary">← Volver</a>
  </div>
  {{-- Mostrar errores de validación --}}
  @if ($errors->any())
  <div class="alert alert-danger" style="background:#f8d7da; color:#842029; padding:10px; border-radius:8px; margin-bottom:20px;">
  <ul style="margin:0; padding-left:20px;">
  @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
  @endforeach
  </ul>
  </div>
  @endif
  <form action="{{ route('medicos.update', $medico->id) }}" method="POST"> 
  @csrf
  @method('PUT')
  <div class="form-group">
  <label for="nombre">Nombre Completo</label>
  <input type="text" name="nombre" id="nombre" value="{{ $medico->nombre }}" required>
  </div>
  <div class="form-group">
  <label for="correo">Correo Electrónico</label>
  <input type="email" name="correo" value="{{ old('correo', $user->email ?? $medico->correo) }}" required>
  </div>
  <div class="form-group">
  <label for="password">Contraseña</label>
  <input type="password" name="password" id="password" required>
  </div>
  <div class="form-group">
  <label for="password_confirmation">Confirmar Contraseña</label>
  <input type="password" name="password_confirmation" id="password_confirmation" required>
  </div>
  <div class="form-group">
  <label for="especialidad">Especialidad</label>
  <input type="text" name="especialidad" id="especialidad" value="{{ $medico->especialidad }}" required>
  </div>
  <div class="form-group">
  <label for="estado">Estado</label>
  <select name="estado" id="estado" required>
  <option value="Activo" {{ $medico->estado == 'Activo' ? 'selected' : '' }}>Activo</option>
  <option value="Inactivo" {{ $medico->estado == 'Inactivo' ? 'selected' : '' }}>Inactivo</option>
  </select>
  </div>
  <div class="form-actions">
  <button type="submit" class="btn-primary">Actualizar Médico</button>
  </div>
  </form>
</div>
@endsection
{{-- johan --}}