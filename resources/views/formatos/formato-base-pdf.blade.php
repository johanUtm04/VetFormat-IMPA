<!DOCTYPE html>
<html>
<head>
  <style>
    body { font-family: Arial, sans-serif; font-size: 12px; }
    h1 { color: #333; }
  </style>
</head>
<body>

<h1>Formato: {{ $variableDinamica }}</h1>

@if($variableDinamica == 'reporte')
  <p>Personal que atiende: {{ $captureData->per_nombres }} {{ $captureData->per_apaterno }} {{ $captureData->per_amaterno }}</p>
  <p>Reportante: {{ $captureData->rep_nombres }} {{ $captureData->rep_apaterno }}</p>
  <!-- Aquí más campos que quieras mostrar para "reporte" -->
@elseif($variableDinamica == 'Receta')
  <p>Paciente: {{ $captureData->paciente_nombre ?? 'No disponible' }}</p>
  <!-- Aquí más campos específicos de "Receta" -->
@else
  <p>Formato no definido para: {{ $variableDinamica }}</p>
@endif

</body>
</html>
