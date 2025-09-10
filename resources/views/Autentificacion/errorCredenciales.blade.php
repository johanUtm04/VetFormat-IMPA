@extends('layouts.appError404')

@section('title', 'Página no encontrada')

@section('content')
<div class="msjError">
    <div class="error-box">
        <div id="MsjError">
            Ups! esta seccion no existe
        </div>
        <form action="{{ route('login') }}" method="get">
            @csrf
            <button type="submit" class="error-btn">Intentar de nuevo</button>
        </form>
    </div>
</div>


@endsection
