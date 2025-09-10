@extends('layouts.appMedicos')

@section('title', 'Lista de Médicos')

@section('MessageHeader')
Administrar Médicos Registrados 
@endsection

@section('content')
<div class="admin-panel">
  
    <div class="panel-header">
        <h2>Médicos Registrados</h2>
        <div class="agregarBoton">
        <a href="{{ route('medicos.create') }}" class="">Agregar Médico</a>
        </div>
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
     style="background: transparent; color: #02ff56; padding: 8px 14px; border: 2px solid #02ff56; border-radius: 8px; text-decoration: none; font-weight: 600; font-family: 'Segoe UI', sans-serif; transition: all 0.3s ease; margin-right: 6px; display:inline-block;"
     onmouseover="this.style.background='#02ff56'; this.style.color='white';"
     onmouseout="this.style.background='transparent'; this.style.color='#02ff56';">
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
     style="background: transparent; color: #8d00ff; padding: 8px 14px; border: 2px solid #8d00ff; border-radius: 8px; text-decoration: none; font-weight: 600; font-family: 'Segoe UI', sans-serif; transition: all 0.3s ease; display:inline-block;"
     onmouseover="this.style.background='#8d00ff'; this.style.color='white';"
     onmouseout="this.style.background='transparent'; this.style.color='#8d00ff';">
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

<style>
    body {
  font-family: 'Roboto', sans-serif;
  background: #F4F6F8;
  color: #333;
}

.alert {
  padding: 12px 20px;
  border-radius: 6px;
  margin-bottom: 20px;
  font-weight: 500;
}

.alert-blue {
  background: #E3F2FD;
  color: #1565C0;
  border: 1px solid #90CAF9;
}

.alert-yellow {
  background: #FFF9C4;
  color: #F9A825;
  border: 1px solid #FFF176;
}

.alert-red {
  background: #FFEBEE;
  color: #C62828;
  border: 1px solid #EF9A9A;
}

.admin-panel {
  max-width: 1200px;
  margin: 30px auto;
  padding: 25px;
  border-radius: 10px;
  background: #fff;
  box-shadow: 0 4px 18px rgba(0,0,0,0.08);
}

.panel-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

.panel-header h2 {
  font-size: 26px;
  font-weight: medium;
  color: #8d00ff;
  margin: 0;
}

.btn-primary {
  padding: 10px 18px;
  background: #3366FF;
  color: #fff;
  border: none;
  border-radius: 6px;
  text-decoration: none;
  font-weight: 500;
  transition: background 0.25s;
}

.btn-primary:hover {
  background: #254EDA;
}

.alert-success {
  padding: 12px 20px;
  background: #E8F5E9;
  color: #388E3C;
  border: 1px solid #C8E6C9;
  border-radius: 6px;
  margin-bottom: 20px;
  font-weight: 500;
}

.table-wrapper {
  overflow-x: auto;
}

.styled-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 10px;
}

.styled-table th, .styled-table td {
  padding: 14px 16px;
  text-align: center;
  border-bottom: 1px solid #E0E0E0;
  font-size: 14px;
}

.styled-table th {
  background: #F5F7FA;
  color: #333;
  font-weight: 600;
}

.styled-table tr:hover {
  background: #FAFAFA;
}

.status {
  padding: 6px 12px;
  border-radius: 50px;
  font-size: 13px;
  font-weight: 500;
  display: inline-block;
}

.status.active {
  background: #D1F2EB;
  color: #148F77;
}

.status.inactive {
  background: #FADBD8;
  color: #C0392B;
}

.btn-secondary {
  padding: 8px 14px;
  background: #ECF0F1;
  color: #333;
  border: none;
  border-radius: 6px;
  text-decoration: none;
  font-size: 13px;
  margin-right: 6px;
  transition: background 0.2s;
}

.btn-secondary:hover {
  background: #D0D3D4;
}

.btn-danger {
  padding: 8px 14px;
  background: #E74C3C;
  color: #fff;
  border: none;
  border-radius: 6px;
  font-size: 13px;
  cursor: pointer;
  transition: background 0.2s;
}

.btn-danger:hover {
  background: #C0392B;
}

</style>
@endsection
