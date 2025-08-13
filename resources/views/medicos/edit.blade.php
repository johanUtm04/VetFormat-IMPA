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
        <h2>✏️ Editar Médico</h2>
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
<style>


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
  font-weight: 700;
  font-size: 1.8rem;
  color: #7F00FF; /* púrpura degradado similar */
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
  font-size: 1.1rem;
  border: none;
  border-radius: 16px;
  cursor: pointer;
  font-weight: 700;
  box-shadow: 0 8px 18px rgba(127, 0, 255, 0.35);
  transition: all 0.3s ease;
}

.btn-primary:hover {
  background: linear-gradient(135deg, #a24cff, #f04aff);
  box-shadow: 0 10px 22px rgba(162, 76, 255, 0.6);
}

</style>
@endsection
