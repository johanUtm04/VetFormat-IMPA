<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaptureData;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /* Funcion para ver el msj de bienvenida y el usuario autenticado */
    public function main()  //🟢
    {
        $usuario = Auth::user(); /* en la variable usuario guardamos el usuario autenticado */
        return view('reports.main', compact('usuario'));    /* regresamos la vista main, en la carpeta reports, y le damos la variable'usuario' */
    }

    public function create() //🟢
    {
    $usuario = Auth::user(); /* obtenemos el usuario autenticado */
    return view('reports.capture-data', compact('usuario'));    
    }

    public function guardarDatosGenerales(Request $request) //🟢
    {
        $data = $request->all();    /* Guardar todo lo del formualrio */
        $data['user_id'] = Auth::id();  /* Agregamos al Array $data, el indice 'suer_id', y le asignamos el id del usuario autenticado */
        $captureData = CaptureData::create($data);  /* creamos la variable $captureData y guardamos un registro, con ayuda del intermediario osea el modelo, y con los datos de $data */
        return redirect()->route('reports.select-format', $captureData->id); /* nos manda a la vista del reporte necesaria */
    }

    public function select($id) //🟢
    {
        $captureData = CaptureData::findOrFail($id);    /* Creamos la variable $captureData, hacemos una consulta por id, para ver si existe ese reistro */
        return view('reports.select-format',compact('captureData'));   /* dirijimos a la vista seleccionada y le manadamos el regalito del arrelo cpatureData */
    }

    public function mostrarFormatoEspecifico($variableDinamica, $id)    //🟢
    {
        $captureData = CaptureData::findOrFail($id);

        switch ($variableDinamica) {
            case 'reporte':
                return view('formatos.reporte', compact('captureData', 'variableDinamica'));
            case 'BitacoraDiaria':
                return view('formatos.BitacoraDiaria', compact('captureData', 'variableDinamica'));
            case 'BitacoraVehicular':
                return view('formatos.BitacoraVehicular', compact('captureData', 'variableDinamica'));
            case 'RegistroDiarioDeAtencionaReportes':
                return view('formatos.RegistroDiarioDeAtencionaReportes', compact('captureData', 'variableDinamica'));
            case 'RegistroDeIngresoAlAreaDeResguardo':
                return view('formatos.RegistroDeIngresoAlAreaDeResguardo', compact('captureData', 'variableDinamica'));
            case 'RegistroDeEutanasia':
                return view('formatos.RegistroDeEutanasia', compact('captureData', 'variableDinamica'));
            case 'BitacoraDeSuministrosYConsumoDiarioDeAlimento':
                return view('formatos.BitacoraDeSuministrosYConsumoDiarioDeAlimento', compact('captureData', 'variableDinamica'));
            case 'HojaClinica':
                return view('formatos.HojaClinica', compact('captureData', 'variableDinamica'));
            case 'ValoracionAlExamenMedicoFisicoYClinico':
                return view('formatos.ValoracionAlExamenMedicoFisicoYClinico', compact('captureData', 'variableDinamica'));
            case 'EtogramaCanino':
                return view('formatos.EtogramaCanino', compact('captureData', 'variableDinamica'));
            case 'ConsentimientoInformadoParaLaPracticaDeEutanasia':
                return view('formatos.ConsentimientoInformadoParaLaPracticaDeEutanasia', compact('captureData', 'variableDinamica'));
            case 'RecepcionDeEjemplaresDeResguardoEnViaPublica':
                return view('formatos.RecepcionDeEjemplaresDeResguardoEnViaPublica', compact('captureData', 'variableDinamica'));
            case 'DevolucionDeEjemplaresDeResguardoEnViaPublica':
                return view('formatos.DevolucionDeEjemplaresDeResguardoEnViaPublica', compact('captureData', 'variableDinamica'));
            case 'Receta':
                return view('formatos.Receta', compact('captureData', 'variableDinamica'));
            case 'CertificadoDeAdopcion':
                return view('formatos.CertificadoDeAdopcion', compact('captureData', 'variableDinamica'));
            case 'DonacionDeEjemplares':
                return view('formatos.DonacionDeEjemplares', compact('captureData', 'variableDinamica'));
            case 'AvisoDeAtencion':
                return view('formatos.AvisoDeAtencion', compact('captureData', 'variableDinamica'));
            case 'Inventario':
                return view('formatos.Inventario', compact('captureData', 'variableDinamica'));
            case 'ResponsivaDeEsterilizacion':
                return view('formatos.ResponsivaDeEsterilizacion', compact('captureData', 'variableDinamica'));
            case 'Acta':
                return view('formatos.Acta', compact('captureData', 'variableDinamica'));
            case 'Resguardo':
                return view('formatos.Resguardo', compact('captureData', 'variableDinamica'));
            case 'VisitaDeInspeccion':
                return view('formatos.VisitaDeInspeccion', compact('captureData', 'variableDinamica'));
            case 'AtencionAReportesDeEjemplaresAgresores':
                return view('formatos.AtencionAReportesDeEjemplaresAgresores', compact('captureData', 'variableDinamica'));
            case 'ResolucionRespectoDeEjemplaresAgresores':
                return view('formatos.ResolucionRespectoDeEjemplaresAgresores', compact('captureData', 'variableDinamica'));
            case 'EncuestDeAdopcion':
                return view('formatos.EncuestDeAdopcion', compact('captureData', 'variableDinamica'));
            case 'EncuestaDeSatisfaccion':
                return view('formatos.EncuestaDeSatisfaccion', compact('captureData', 'variableDinamica'));
            case 'ConsentimientoInformadoSobreEsteticaYBaño':
                return view('formatos.ConsentimientoInformadoSobreEsteticaYBaño', compact('captureData', 'variableDinamica'));
            case 'LogisticaDeEsterilizacionEnColonias':
                return view('formatos.LogisticaDeEsterilizacionEnColonias', compact('captureData', 'variableDinamica'));
            default:
                return abort(404);
        }
    }

}
