@extends('layouts.appCaptureData')

@section('title', 'Registro de Datos del Reporte')

@section('MessageHeader')
Registro de Datos del Reporte
@endsection
@section('content')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZnqnb3yDP8Y-MG0ZGsYFRkEQyLWU0hCk&libraries=places"></script>

<div class="formbold-main-wrapper">
  <div class="login-box">
    {{-- Botón de regreso--}}
    <div class="regresar-captureData-box">
      <a href="{{ route('reports.inicio') }}" class="volver-link">
        ← Regresar
      </a>
    </div>
<div class="subtitulo-explicacion">
  <svg xmlns="http://www.w3.org/2000/svg" fill="#fbc02d" viewBox="0 0 24 24">
    <path d="M1 21h22L12 2 1 21zm12-3h-2v2h2v-2zm0-6h-2v5h2v-5z"/>
  </svg>
  Recuerda revisar tus reportes antes de continuar.
</div>
<button type="button" id="llenadoRapido" class="login-btn" style="background-color: #d32f2f; margin-bottom: 20px;">
  Llenado Rápido 
</button>

    <img id="imgPerroGato" src="{{asset('images/HeaderFormulario.png')}}">



    <form method="POST" action="{{route('guardar.datos.generales')}}">
      @csrf
      {{-- 🟣 Personal que Atiende --}}
      <h3>Personal que Atiende</h3>
      <input type="text" name="per_nombres" class="login-input" placeholder="Escribe el nombre(s) del personal que atiende" required>
      <input type="text" name="per_apaterno" class="login-input" placeholder="Apellido paterno del personal que atiende" required>
      <input type="text" name="per_amaterno" class="login-input" placeholder="Apellido materno del personal que atiende" required>

      <hr>

      {{-- 🟣 Reportante --}}
      <h3>Reportante (persona ciudadana que hizo el reporte)</h3>
      <input type="text" name="rep_nombres" class="login-input" placeholder="Nombre(s) de quien reporta" required>
      <input type="text" name="rep_apaterno" class="login-input" placeholder="Apellido paterno del reportante" required>
      <input type="text" name="rep_amaterno" class="login-input" placeholder="Apellido materno del reportante" required>
      <input type="text" name="rep_domicilio" class="login-input" placeholder="Calle y número del domicilio" required>
      <input type="text" name="rep_colonia" class="login-input" placeholder="Colonia donde vive el reportante" required>
      <input type="text" name="rep_cp" class="login-input" placeholder="Código Postal" required>
      <input type="text" name="rep_estado" class="login-input" placeholder="Estado" required>
      <input type="text" name="rep_ciudad" class="login-input" placeholder="Ciudad o localidad" required>
      <input type="text" name="rep_telefono" class="login-input" placeholder="Teléfono de contacto" required>

      <hr>

      {{-- 🟣 Detalle del Reporte --}}
      <h3>Detalle del Reporte (¿cómo, qué y por qué?)</h3>
      <textarea name="det_medio" class="login-input" placeholder="¿Por qué medio se recibió? (Teléfono, presencial, etc.)" rows="2" required></textarea>
      <textarea name="det_asunto" class="login-input" placeholder="Asunto del reporte" rows="2" required></textarea>
      <textarea name="det_motivo" class="login-input" placeholder="Describa brevemente el motivo del reporte" rows="3" required></textarea>

      <hr>

      {{-- 🟣 Domicilio del Reporte --}}
      <h3>Domicilio del Reporte</h3>
      <input type="text" name="dom_domicilio" class="login-input" placeholder="Calle y número del lugar reportado" required>
      <input type="text" name="dom_colonia" class="login-input" placeholder="Colonia del lugar reportado" required>
      <input type="text" name="dom_cp" class="login-input" placeholder="Código Postal" required>
      <input type="text" name="dom_estado" class="login-input" placeholder="Estado" required>
      <input type="text" name="dom_ciudad" class="login-input" placeholder="Ciudad o localidad" required>
      <input type="text" name="dom_telefono" class="login-input" placeholder="Teléfono de contacto (si aplica)" required>
      <textarea name="dom_entre_calles" class="login-input" placeholder="Calles entre las que se encuentra" rows="2" required></textarea>
      <textarea name="dom_referencias" class="login-input" placeholder="Referencias para llegar al lugar" rows="2" required></textarea>

      <hr>

      {{-- 🟣 Atención del Reporte --}}
      <h3>Atención del Reporte (datos sobre cuándo y cómo se atendió)</h3>
      <input type="date" name="at_fecha" class="login-input" required>
      <input type="time" name="at_hora_atencion" class="login-input" required>
      <input type="text" name="at_nom_ciudadano" class="login-input" placeholder="Nombre del ciudadano atendido" required>
      <textarea name="at_observaciones" class="login-input" placeholder="Observaciones relevantes de la atención" rows="3" required></textarea>

      <hr>

      {{-- 🟣 Reporte General --}}
      <h3>Datos del Reporte</h3>
      <input type="date" name="rep_fecha" class="login-input" required>
      <input type="text" name="rep_recibio" class="login-input" placeholder="Nombre de quien recibió el reporte" required>
      <textarea name="rep_envio_evidencia" class="login-input" placeholder="Describa o enumere evidencias enviadas" rows="2" required></textarea>
      <textarea name="rep_seguimiento" class="login-input" placeholder="Indique el seguimiento que se dará" rows="2" required></textarea>

      <hr>

      {{-- 🟣 Dirección a reportar y coordenadas ocultas --}}
      <label for="direccion">Dirección a reportar:</label>
      <input type="text" id="direccion" name="direccion" placeholder="Ej. Calle 5 de Febrero, Morelia" required>
      <input type="hidden" id="latitude" name="latitude">
      <input type="hidden" id="longitude" name="longitude">

      <button type="button" id="mostrarRuta">Mostrar ruta</button>

      <div id="map" style="height: 400px; width: 100%; margin-top:20px;"></div>

      <button type="submit" class="login-btn" style="margin-top:20px;">Guardar Reporte Capture-Data</button>

    </form>

    
  </div>
</div>

@endsection


