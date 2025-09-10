<!DOCTYPE html>
<html>
<head>
    <title>Inventario de Ejemplares</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 5px; }
        th { background: #f2f2f2; }
    </style>
</head>
<body>

<h2>Inventario de Ejemplares</h2>

<p><strong>Dirección:</strong> {{ $datos['direccion_calle'] }} No. {{ $datos['direccion_numero'] }}</p>
<p><strong>Colonia:</strong> {{ $datos['colonia'] }}</p>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Especie</th>
            <th>Sexo</th>
            <th>Tamaño</th>
            <th>Color</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 1; $i <= 10; $i++)
        <tr>
            <td>{{ $i }}</td>
            <td>{{ $datos['especie_'.$i] ?? '-' }}</td>
            <td>{{ $datos['sexo_'.$i] ?? '-' }}</td>
            <td>{{ $datos['tamano_'.$i] ?? '-' }}</td>
            <td>{{ $datos['color_'.$i] ?? '-' }}</td>
        </tr>
        @endfor
    </tbody>
</table>

<p><strong>Observaciones:</strong> {{ $datos['observaciones'] }}</p>

</body>
</html>
