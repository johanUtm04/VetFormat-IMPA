{{-- ✔ --}}
@extends('layouts.app')

@section('title', 'Inicio')

@section('MessageHeader')
    Inicio de Sesión
@endsection

@section('content')

    <div class="bienvenida-box">
        <h1>¡Bienvenido al sistema de control veterinario de Morelia!</h1>
        <p>
            Este portal es exclusivo para personal autorizado del Ayuntamiento,
            y está diseñado para registrar, administrar y dar seguimiento a reportes veterinarios.
        </p>
        <img src="{{ asset('images/Ayuntamiento.png') }}" alt="Imagen informativa" class="bienvenida-imagen">
    </div>

    <h2 style="margin-top: 50px;">Iniciar Sesión</h2>

    <div class="login-box">

        <div id="Pug-Box">
            <img id="mascotita" src="{{ asset('/images/perrito.png') }}" alt="Logo">
        </div>

        @if(session('error'))
            <div id="MsjError">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('autenticar') }}" method="POST">
            @csrf  {{-- Protección contra CSRF --}}
            <input type="email" name="email" class="login-input" placeholder="Correo Electrónico" required>
            <input id="password" type="password" name="password" class="login-input" placeholder="Contraseña" required>
            <button type="button" id="togglePassword" aria-label="Mostrar u ocultar contraseña">
                <i class="fas fa-eye ojo"></i>
            </button> <br>
            <button type="submit" class="login-btn">Iniciar Sesión</button>
        </form>
    </div>

@endsection

