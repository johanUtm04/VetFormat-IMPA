<!DOCTYPE html>
<html>
<head>
    <title>Formato PDF</title>
    <style>
        body { font-family: sans-serif; }
        h1 { text-align: center; }

        <style>
    body {
      font-family: Arial, sans-serif;
    }
    .tituloformato {
      font-size: 16px;
      font-weight: bold;
      text-align: center;
    }
    /* tus demás estilos... */
  </style>
    </style>
</head>
<body>

<h1>{{ $datos_generales['rep_nombres'] }} - {{ $datos_generales['rep_domicilio'] }}</h1>

<h3>Datos del Formato:</h3>
<ul>
@foreach($datos_formato as $campo => $valor)
    <li><strong>{{ $campo }}:</strong> {{ $valor }}</li>
@endforeach
</ul>

</body>
</html>
