@extends('layouts.PlantillaFormatos')

@section('title', 'Detalle del Formato')

@section('MessageHeader', 'Detalle del Formato')

@section('content')
<h1>Detalle del Formato: {{ $formato->nombre_formato }}</h1>
<p>Fecha de Creación: <strong>{{ $formato->created_at->format('d/m/Y H:i') }}</strong></p>

<h3>Datos Generales</h3>

<table border="1" cellpadding="5" cellspacing="0">
    @php
        $labels = [
            'per_nombres' => 'Nombre',
            'per_apaterno' => 'Apellido Paterno',
            'per_amaterno' => 'Apellido Materno',
            'rep_nombres' => 'Nombre Reportante',
            'rep_apaterno' => 'Apellido Paterno Reportante',
            'rep_amaterno' => 'Apellido Materno Reportante',
            'rep_domicilio' => 'Domicilio Reportante',
        ];
    @endphp

    @if (!empty($datosGenerales))
        @foreach ($datosGenerales as $campo => $valor)
            <tr>
                <th>{{ $labels[$campo] ?? $campo }}</th>
                <td>{{ $valor }}</td>
            </tr>
        @endforeach
    @else
        <tr>
            <td colspan="2">No hay datos para mostrar.</td>
        </tr>
    @endif
</table>

<a href="{{ route('historial.index') }}">Regresar al Historial</a>
@endsection
