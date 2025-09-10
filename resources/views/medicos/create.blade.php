@extends('layouts.app')

@section('title', 'Agregar Médico')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/admin-medicos.css') }}">
@endpush

@section('MessageHeader')
Agregar Nuevo Médico
@endsection

@section('content')
<div class="admin-panel">

    <div class="panel-header">
        <h2>Registrar Médico</h2>
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

    <form action="{{ route('medicos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre Completo</label>
            <input type="text" name="nombre" id="nombre" required>
        </div>

        <div class="form-group">
            <label for="correo">Correo Electrónico</label>
            <input type="email" name="correo" id="correo" required>
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
            <input type="text" name="especialidad" id="especialidad" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select name="estado" id="estado" required>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">Guardar Médico</button>
        </div>
    </form>
</div>

<style>
    /* admin-medicos.css */

.admin-panel {
  max-width: 700px;
  margin: 40px auto;
  padding: 30px 40px;
  background: rgba(255, 255, 255, 0.15);
  border-radius: 20px;
  backdrop-filter: blur(10px);
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
  color: #222;
  font-family: 'Poppins', sans-serif;
}

.panel-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 25px;
}

.panel-header h2 {
  font-weight: medium;
  color: #8d00ff;
}

.btn-secondary {
  background: transparent;
  color: #7F00FF;
  border: 2px solid #7F00FF;
  padding: 8px 16px;
  border-radius: 12px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
}

.btn-secondary:hover {
  background: #7F00FF;
  color: white;
}

.form-group {
  margin-bottom: 20px;
  text-align: left;
}

.form-group label {
  display: block;
  margin-bottom: 6px;
  font-weight: 600;
  color: #4B4B4B;
}

.form-group input,
.form-group select {
  width: 100%;
  padding: 10px 14px;
  font-size: 1rem;
  border: 1.8px solid rgba(127, 0, 255, 0.3);
  border-radius: 10px;
  outline: none;
  transition: border-color 0.3s ease;
}

.form-group input:focus,
.form-group select:focus {
  border-color: #7F00FF;
  box-shadow: 0 0 8px rgba(127, 0, 255, 0.4);
}

.form-actions {
  margin-top: 30px;
  text-align: right;
}

.btn-primary {
  background: linear-gradient(135deg, #7F00FF, #E100FF);
  color: #fff;
  padding: 12px 28px;
  border: none;
  border-radius: 16px;
  cursor: pointer;
  font-size: 17px;
  box-shadow: 0 8px 18px rgba(127, 0, 255, 0.35);
  transition: all 0.3s ease;
}

.btn-primary:hover {
  transform: scale(1.05) translateX(-6px);
}

</style>
@endsection
