<!DOCTYPE html>
<!-- Define el tipo de documento como HTML5 -->

<html lang="en">
<!-- Comienza el documento HTML y establece el idioma en inglés -->

<head>
  <meta charset="UTF-8">
  <!-- Define la codificación de caracteres como UTF-8 -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Hace que la página sea responsive, adaptándose al ancho del dispositivo -->

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Mejora la compatibilidad en navegadores antiguos de Internet Explorer -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Importa los iconos de Font Awesome -->

  <title>@yield('title', 'Titulo por defecto')</title>
  <!-- Define el título de la página con Blade (Laravel), permitiendo que se reemplace -->

@vite(['resources/css/appMedicos.css', 'resources/js/app.js']) {{--Carga Hojas Js y css--}}

  <!-- Incluye los recursos de CSS y JS compilados por Vite en Laravel -->

<!-- html2canvas para convertir HTML en imagen -->
<script src="https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js"></script>

<!-- jsPDF para generar el PDF desde imagen -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

  @stack('styles')
  <!-- Permite inyectar estilos adicionales desde las vistas hijas usando Blade -->

<style>
    /* Estilos CSS embebidos */

    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      background-color: #ffffff;
    }
    /* Define fuente, quita márgenes y establece fondo claro para el body */

    #BarraNavegacion {
      display: flex;
      align-items: center;
      justify-content: space-between;
      max-width: 100%;
      margin: 0 auto;
    }
    /* Barra de navegación como flexbox alineada y centrada */

    #BarraNavegacion img#ImagenPrincipal {
      max-height: 120px;
      margin-right: 10px;
    }
    /* Imagen del logo con altura máxima y margen derecho */

    #BarraNavegacion h2 {
      flex: 1;
      text-align: center;
      color: #fff;
      font-size: 24px;
      margin: 0;
    }
    /* Título centrado dentro de la barra de navegación */

    .btn-historial {
      background: #3498db;
      color: #fff;
      padding: 8px 16px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 14px;
      display: flex;
      align-items: center;
      transition: all 0.3s ease;
    }
    /* Botón de historial con estilo personalizado */

    .btn-historial i {
      margin-right: 6px;
    }
    /* Espacio a la derecha del ícono en el botón */

    .btn-historial:hover {
      background: #2980b9;
      text-decoration: none;
    }
    /* Cambio de color en hover para el botón */

    main {
      padding: 20px;
    }
    /* Espaciado interno para la zona principal de contenido */

    footer#footerReporte {
      background: #fff;
      border-top: 1px solid #ccc;
      padding: 15px 10px;
      font-size: 13px;
      color: #333;
      text-align: left;
    }
    /* Estilo del footer */

    .footerContenido {
      display: flex;
      justify-content: space-between;
      align-items: left;
      max-width: 1000px;
      margin: 0 auto;
      gap: 15px;
      flex-wrap: nowrap;
    }
    /* Contenedor flex para organizar contenido dentro del footer */

    .footerContenido p {
      flex: 1 1 auto;
      margin: 0;
      line-height: 1.4;
    }
    /* Estilo del texto del footer */

    .footerLogo {
      flex: 0 0 auto;
      max-height: 100px;
      max-width: 20%;
      height: auto;
      object-fit: contain;
    }
     .inputsReporte:focus {
    border-bottom: 1.5px solid #7F00FF;
  }
    /* Estilo de la imagen en el footer */

    @media print {

      .oculto {
  display: none;
}

  .ocultar-impresion {
    display: none !important;
  }

      /* Estilos para impresión */

      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-size: 10px;
        color: black;
        background: white;
      }
      /* Ajustes generales para vista de impresión */

      header, .btn-historial, #BarraNavegacion, .btn-imprimir {
        display: none !important;
      }
      /* Oculta elementos no necesarios al imprimir */

      main {
      flex: 1 0 auto;
      }
      /* Ajuste de main al imprimir */

      footer {
        bottom: 0;
        left: 0;
        right: 0;
        flex-shrink: 0;
        border-top: 1px solid #000;
        text-align: left;
        padding: 5px 10px;
        font-size: 9px;
        background: white;
        margin-bottom: 10px;

      }
      /* Footer fijo y con estilo en impresión */

      table, tr, td, th {
        page-break-inside: avoid;
      }

      input::placeholder, textarea::placeholder {
        color: transparent !important;
      }
    }

    #ImagenPrincipal {
  width: 180px;
  height: auto;
  margin-bottom: 0;
  transition: all 0.3s ease;
  cursor: pointer;
}

#ImagenPrincipal:hover {
  transform: scale(1.05) translateY(-5px);
  filter: brightness(1.2);
}
  .print-spacer {
    display: block;
    height: var(--print-spacer-height, 0px); /* valor por defecto */
  }
  .btn-imprimir {
    background: linear-gradient(135deg, #7F00FF, #E100FF);
    color: #fff;
    padding: 14px 25px;
    border: none;
    border-radius: 12px;
    font-size: 14px;
    margin-top: 20px;
    cursor: pointer;
    box-shadow: 0 6px 14px rgba(0, 0, 0, 0.15);
    transition: all 0.3s ease;
  }

  .btn-imprimir:hover {
    background-color: #ffffff;
    color: #7F00FF;
    transform: translateY(-5px);
  }

  </style>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const h2 = document.querySelector('.nombre_formato');
  const inputHidden = document.getElementById('nombre_formato_guardar');
  if (h2 && inputHidden) {
    inputHidden.value = h2.textContent.trim();
  }
});
</script>

<meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body id="mainBoody">
  <!-- Cuerpo de la página con id personalizado -->
<input type="hidden" name="capture_data_id" value="{{ $captureData->id }}">

  <header class="header-formatos">
    <!-- Encabezado principal -->

    <nav id="BarraNavegacion">
      <!-- Barra de navegación -->
      <a href="{{ route('reports.select-format', $captureData->id) }}" class="tooltip">
        <img id="ImagenPrincipal" src="{{ asset('/images/logo_blanco.PNG') }}" alt="Logo">
        <span class="tooltiptext">Regresar a elegir formato</span>
      </a>

    <h2>@yield('MessageHeader')</h2>
      <!-- Título de cabecera, personalizable desde las vistas Blade -->

      <a href="{{ route('formato.pdf.historial') }}" class="btn-historial">
        <i class="fas fa-folder-open"></i> Ver Historial
      </a>
      <!-- Botón para ir al historial, con icono y texto -->
    </nav>
  </header>

  <main>
    <!-- Contenido principal -->

    @yield('content')
    <!-- Área para inyectar contenido desde las vistas hijas -->

    <div class="print-spacer"></div>
    <!-- Separador visual extra para impresión -->
  </main>


  <button class="btn-imprimir" onclick="window.print()">Imprimir / Generar PDF</button>

<div class="alerta-warning ocultar-impresion">
  <i class="fas fa-exclamation-triangle"></i>
  Después de guardar tu PDF, <strong>súbelo aquí</strong> para que se registre correctamente en tu historial.
</div>


<form action="{{ route('formato.pdf.subir') }}" method="POST" enctype="multipart/form-data" class="oculto">
  @csrf
  <input type="hidden" name="nombre_formato"  id="nombre_formato_guardar" value="">
  <input type="hidden" name="capture_data_id" value="{{ $captureData->id }}"> 
  <input type="file" name="pdf_file" accept="application/pdf" required>
  <button type="submit" class="btn-imprimir ocultar-impresion">Subir PDF :D</button>
</form>
  <footer id="footerReporte">
    <!-- Pie de página con información de contacto -->

    <div class="footerContenido">
      <!-- Contenedor para texto e imagen del footer -->

      <p style="color: #0c1b5b;">
      <strong>Instituto Moreliano de Protección Animal</strong><br>
        H. Ayuntamiento de Morelia<br>
        Álvaro Obregón 295, Col. Juárez, C.P. 58010, Morelia, Michoacán<br>
        T. (443) 321 13 92, (443) 321 47 31<br>
        WhatsApp 729 80 94 80, 443 393 79 52
      </p>
      <!-- Datos de contacto -->

      <img src="{{ asset('/images/Morelia2024-2027.PNG') }}" alt="Logo Morelia 2024-2027" class="footerLogo">
      <!-- Imagen institucional del periodo municipal -->
    </div>
  </footer>

</body>
</html>
