@extends('layouts.appSelect-Format')

@section ('title', 'Seleccionar Formato')

@section('MessageHeader')
Seleccionar formato
@endsection

@section('content')


<div class="grupo_tarjetas">
  <input type="text" id="buscadorFormatos" placeholder="Buscar formato..." style="width:100%; padding:8px; margin-bottom:16px; font-size:1rem;
  border: 2px solid #9200FF;
  ">

  
<div class="formato-item">
  <div class="info">
    <p class="titulo">Reporte</p>
    <p class="descripcion">Formulario para registrar datos del reportante, con espacio para firmas de los responsables.</p>
<a href="{{ route('formatos.reporte.conid', [
    'variableDinamica' => 'reporte',
    'id' => Auth::user()->captureDatas()->latest()->first()->id
]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>


<div class="formato-item">
  <div class="info">
    <p class="titulo">Bitácora Diaria</p>
    <p class="descripcion">Formulario para registrar actividades diarias, firmado por el responsable del área correspondiente.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'BitacoraDiaria',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>




<div class="formato-item">
  <div class="info">
    <p class="titulo">Bitácora Vehicular</p>
    <p class="descripcion">Registro detallado de uso y mantenimiento de vehículos, para control y seguimiento.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'BitacoraVehicular',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info">
    <p class="titulo">Registro diario de atención a Reportes</p>
    <p class="descripcion">PENDIENTE</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'RegistroDiarioDeAtencionaReportes',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>


<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Registro de Ingreso al Área de Resguardo</p>
    <p class="descripcion">Registro de ejemplares ingresados al área de resguardo.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'RegistroDeIngresoAlAreaDeResguardo',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Registro De Eutanasia</p>
    <p class="descripcion">Registro de ejemplares ingresados al área de resguardo.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'RegistroDeEutanasia',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Bitácora de Suministros y Consumo Diario de Alimento</p>
    <p class="descripcion">Registro diario de alimentos suministrados y consumidos por los ejemplares.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'BitacoraDeSuministrosYConsumoDiarioDeAlimento',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Hoja Clínica</p>
    <p class="descripcion">Formato para el seguimiento clínico de ejemplares en tratamiento.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'HojaClinica',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Valoración al Examen Médico Físico y Clínico</p>
    <p class="descripcion">Formato para registrar la valoración médica y física de los ejemplares.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'ValoracionAlExamenMedicoFisicoYClinico',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Etograma Canino</p>
    <p class="descripcion">Registro sistemático de comportamientos caninos observados.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'EtogramaCanino',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Consentimiento Informado para la Práctica de Eutanasia</p>
    <p class="descripcion">Formato para obtener la autorización legal para realizar eutanasia.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'ConsentimientoInformadoParaLaPracticaDeEutanasia',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Recepción de Ejemplares de Resguardo en Vía Pública</p>
    <p class="descripcion">Formato para el registro de ejemplares encontrados en vía pública.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'RecepcionDeEjemplaresDeResguardoEnViaPublica',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Devolución de Ejemplares de Resguardo en Vía Pública</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'DevolucionDeEjemplaresDeResguardoEnViaPublica',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Receta</p>
    <p class="descripcion">Formato para la prescripción de medicamentos a los ejemplares.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'Receta',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Certificado de Adopción</p>
    <p class="descripcion">Documento que certifica la adopción legal de un ejemplar.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'CertificadoDeAdopcion',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Donación de Ejemplares</p>
    <p class="descripcion">Registro de la donación y entrega de ejemplares a terceros.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'DonacionDeEjemplares',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Aviso de Atención <br> Citatorio</p>
    <p class="descripcion">Formato para notificar la atención brindada a un reporte.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'AvisoDeAtencion',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Inventario</p>
    <p class="descripcion">Control y registro de inventarios disponibles.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'Inventario',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Responsiva de Esterilización</p>
    <p class="descripcion">Formato de responsabilidad para procedimientos de esterilización.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'ResponsivaDeEsterilizacion',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Acta</p>
    <p class="descripcion">Documento oficial para registros administrativos.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'Acta',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Resguardo</p>
    <p class="descripcion">Formato para el resguardo temporal de ejemplares o bienes.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'Resguardo',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Visita de Inspección</p>
    <p class="descripcion">Registro de visitas para inspección y control.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'VisitaDeInspeccion',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Atención a Reportes de Ejemplares Agresores</p>
    <p class="descripcion">Formato para atender reportes relacionados con ejemplares agresivos.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'AtencionAReportesDeEjemplaresAgresores',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Resolución Respecto de Ejemplares Agresores</p>
    <p class="descripcion">Formato para registrar las resoluciones tomadas sobre ejemplares agresivos.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'ResolucionRespectoDeEjemplaresAgresores',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Encuesta de Adopción</p>
    <p class="descripcion">Formulario para conocer la experiencia de adopción de un ejemplar.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'EncuestDeAdopcion',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Encuesta de Satisfacción</p>
    <p class="descripcion">Formulario para medir la satisfacción con los servicios brindados.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'EncuestaDeSatisfaccion',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Consentimiento Informado Sobre Estética y Baño</p>
    <p class="descripcion">Formato para autorizar procedimientos estéticos y de baño.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'ConsentimientoInformadoSobreEsteticaYBaño',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>

<div class="formato-item">
  <div class="info" style="text-align: left;">
    <p class="titulo">Logística de Esterilización en Colonias</p>
    <p class="descripcion">Planificación y control de jornadas de esterilización en colonias.</p>
    <a href="{{ route('formatos.reporte.conid', [
        'variableDinamica' => 'LogisticaDeEsterilizacionEnColonias',
        'id' => Auth::user()->captureDatas()->latest()->first()->id
    ]) }}" class="boton-ir">Ver Formato</a>
  </div>
</div>




{{--   <div class="BotonesAbajo_box"  style="color:white;">
    <a href="{{ route('prueba') }}" class="BotonAbajo2" style="text-decoration:none; color:inherit; display:inline-block;">
      Revisar Historial
    </a> --}}
</div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const input = document.getElementById('buscadorFormatos');
    const formatos = document.querySelectorAll('.formato-item');

    input.addEventListener('input', function() {
      const filtro = input.value.toLowerCase();

      formatos.forEach(formato => {
        const titulo = formato.querySelector('.titulo').textContent.toLowerCase();
        const descripcion = formato.querySelector('.descripcion').textContent.toLowerCase();

        if (titulo.includes(filtro) || descripcion.includes(filtro)) {
          formato.style.display = 'flex'; // o '' si usas display por defecto
        } else {
          formato.style.display = 'none';
        }
      });
    });
  });
</script>

@endsection
