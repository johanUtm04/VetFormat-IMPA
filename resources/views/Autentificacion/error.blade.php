@extends('layouts.app2')

@section('title', 'Página no encontrada')

@section('content')
<div class="contenedor-error">
    <img src="/images/errorPage.png" alt="Error" class="imagen-error">
</div>
<style>
.imagen-error {
    max-width: 100%;
    height: auto;
}
.contenedor-error {
    min-height: calc(100vh - 70px);
    background-image: url('/images/errorPage.png');
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
}
</style>


@endsection
