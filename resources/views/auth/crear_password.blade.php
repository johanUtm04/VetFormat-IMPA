@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Crear Contraseña</h2>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">
            <label for="password">Nueva contraseña</label>
            <input id="password" type="password" name="password" required class="form-control">
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar contraseña</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar contraseña</button>
    </form>
</div>
@endsection
