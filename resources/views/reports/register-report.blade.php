@extends('layouts.app2')

@section('title', 'Registar Reportante')

@section('MessageHeader')
<h3>Registrar Reportanate</h3>
@endsection

@section('content')
<div class="LleandodeFormato_Box">
    <div class="LlenadodeFormato">

        @if(session('mensaje'))
            <p style="color: green; font-weight: bold;">{{ session('mensaje') }}</p>
        @endif

        <form method="POST" action="/reportante" style="display: flex; flex-direction: column; gap: 10px; max-width: 500px; margin: auto;">
            @csrf
            <input type="text" name="Nombres" placeholder="Nombres" required class="input-text">
            <input type="text" name="A_Paterno" placeholder="Apellido Paterno" required class="input-text">
            <input type="text" name="A_Materno" placeholder="Apellido Materno" required class="input-text">
            <input type="text" name="Domicilio" placeholder="Domicilio" required class="input-text">
            <input type="text" name="Colonia" placeholder="Colonia" required class="input-text">
            <input type="text" name="CP" placeholder="Código Postal" required class="input-text">
            <input type="text" name="Estado" placeholder="Estado" required class="input-text">
            <input type="text" name="Ciudad_Localidad" placeholder="Ciudad o Localidad" required class="input-text">
            <input type="text" name="Telefono" placeholder="Teléfono" required class="input-text">

            <button type="submit" style="padding: 10px; background-color: #6a1b9a; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Guardar Reportante
            </button>
        </form>

    </div>
</div>
@endsection
