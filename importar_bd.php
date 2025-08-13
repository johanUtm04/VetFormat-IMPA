<?php
// Datos de conexión
$host = '127.0.0.1';
$usuario = 'impa';
$contrasena = 'x6F5EGO-V}K+';
$basededatos = 'bd_impa';

// Archivo SQL a importar
$archivoSQL = 'bd_impa.sql';

// Conectar a la base
$conn = new mysqli($host, $usuario, $contrasena, $basededatos);

// Revisar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Cargar contenido del archivo SQL
$consultaSQL = file_get_contents($archivoSQL);

if ($consultaSQL === false) {
    die("No se pudo leer el archivo SQL.");
}

// Ejecutar múltiples consultas
if ($conn->multi_query($consultaSQL)) {
    echo "✅ Base de datos importada correctamente.";
} else {
    echo "❌ Error al importar: " . $conn->error;
}

$conn->close();
