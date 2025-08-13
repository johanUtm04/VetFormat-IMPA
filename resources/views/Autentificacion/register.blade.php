@extends('layouts.app')

@section('title', 'Crear Cuenta')


@section('content')
<div class="main-containert">
    <h2>Crear Cuenta</h2>

    <div class="login-box">
            <img id="mascotita" src="{{asset('/images/lorito.png')}}" alt="Logo">

        <div class="login-box-interno">
            <input type="text" class="login-input" placeholder="Correo Electrónico">
            <input type="password" class="login-input" placeholder="Contraseña">
            <label>
                <input type="checkbox" style="width: 20px; height: 20px; margin-right: 10px;">
                Recordarme
            </label>
            <button class="login-btn">Crear Cuenta</button>
        </div>
    </div>
</div>




@endsection