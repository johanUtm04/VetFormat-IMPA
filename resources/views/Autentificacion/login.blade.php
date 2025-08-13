{{-- Extendemos la plantilla base --}}
@extends('layouts.app')

{{-- Definimos el título de la página --}}
@section('title', 'Inicio')

{{-- Cargamos los estilos adicionales necesarios para esta vista --}}
@push('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

{{-- Sección del encabezado de mensaje --}}
@section('MessageHeader')
    Login
@endsection

{{-- Contenido principal de la vista --}}
@section('content')

    <!-- Caja de mensaje de bienvenida -->
    <div class="bienvenida-box">
        <h1>¡Bienvenido al sistema de control veterinario de Morelia! 🐾</h1>
        <p>
            Este portal es exclusivo para personal autorizado del Ayuntamiento,
            y está diseñado para registrar, administrar y dar seguimiento a reportes veterinarios.
        </p>

        <!-- Imagen decorativa/informativa -->
        <img src="{{ asset('images/Ayuntamiento.png') }}" alt="Imagen informativa" class="bienvenida-imagen">
    </div>

    <!-- Título del formulario -->
    <h2 style="margin-top: 50px;">Iniciar Sesión</h2>

    <!-- Caja que contiene el formulario -->
    <div class="login-box">

        <!-- Caja decorativa con imagen de mascota -->
        <div id="Pug-Box">
            <img id="mascotita" src="{{ asset('/images/perrito.png') }}" alt="Logo">
        </div>

        @if(session('error'))
            <div id="MsjError" style="color: red; font-weight: bold; margin-bottom: 15px;">
                ❌ {{ session('error') }}
            </div>
        @endif

        <!-- Formulario de inicio de sesión -->
        <form action="{{ route('autenticar') }}" method="POST">
            @csrf  {{-- Protección contra CSRF --}}

            <!-- Input para el correo electrónico -->
            <input type="email" name="email" class="login-input" placeholder="Correo Electrónico" required>

            <div class="password-container">
            <!-- Input para la contraseña -->
            <input id="password" type="password" name="password" class="login-input" placeholder="Contraseña" required>
            <!-- Botón para mostrar/ocultar contraseña -->
            <button type="button" id="togglePassword" aria-label="Mostrar u ocultar contraseña">
                <i class="fas fa-eye ojo"></i>
            </button>
            </div>

            <!-- Botón de envío del formulario -->
            <button type="submit" class="login-btn">Iniciar Sesión</button>

            <br>
        </form>

        <br>

    </div>

@endsection

{{-- Sección para scripts específicos de esta vista --}}
@section('scripts')
<script>
    // Obtenemos el botón de mostrar/ocultar contraseña y el input
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    // Evento para cambiar la visibilidad de la contraseña
    togglePassword.addEventListener('click', function () {
        // Cambiar entre 'text' y 'password'
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        // Alternar el ícono del ojito
        this.querySelector('i').classList.toggle('fa-eye');
        this.querySelector('i').classList.toggle('fa-eye-slash');
    });
</script>
@endsection
