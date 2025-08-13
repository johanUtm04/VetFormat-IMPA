<?php

namespace App\Http\Controllers;

use App\Models\FormatoPdf;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Medico;


class FormatoPdfController extends Controller
{

public function guardarFormato(Request $request)
{
    $data = $request->all();
    $nombreFormato = $request->input('nombre_formato');

    // Genera el PDF usando Snappy
    $pdf = PDF::loadView('pdf.pdf-veterinaria-reporte', $data);
    $nombreArchivo = 'reporte_' . Str::random(10) . '.pdf';
    $pdf->save(storage_path('app/public/reportes/' . $nombreArchivo));

    // Buscar capture_data asociado al usuario logueado
    $userId = Auth::id();
    $captureData = \App\Models\CaptureData::where('user_id', $userId)->first();

    if (!$captureData) {
        return back()->withErrors(['capture_data' => 'No se encontró información asociada al usuario.']);
    }

    FormatoPdf::create([
        'nombre_formato' => $nombreFormato,
        'archivo' => 'reportes/' . $nombreArchivo,
        'user_id' => $userId,
        'capture_data_id' => $captureData->id,  
    ]);

    return redirect()->route('formato.pdf.historial')->with('success', 'Formato guardado correctamente.');
}


    public function verPdf($id)
    {
        $formato = FormatoPdf::findOrFail($id);
        return response()->file(storage_path('app/public/' . $formato->archivo));
    }

public function historial()
{
    $user = Auth::user();

    $formatos = FormatoPdf::with('usuario', 'captureData')
        ->where('user_id', $user->id)
        ->orderBy('created_at', 'desc')
        ->get();

    return view('historial-formatos', compact('formatos'));
}



    // public function generarPDF(Request $request)
    // {
    //     $data = $request->only(['recibio', 'nombre', 'domicilio', 'colonia', 'medio', 'motivo', 'observaciones']);

    //     $pdf = PDF::loadView('pdf.veterinaria_reporte_pdf', $data);

    //     return $pdf->stream('reporte-veterinaria.pdf');
    // }


// public function historialPDF()
// {
//     $user = Auth::user();

//     $formatos = FormatoPdf::where('user_id', $user->id)
//         ->orderBy('created_at', 'desc')
//         ->get();

//     $pdf = PDF::loadView('historial-formatos', compact('formatos'));

//     return $pdf->download('historial-formatos.pdf');
// }



// public function guardarImagen(Request $request)
// {
//     $imagen = $request->input('imagen');

//     // Elimina encabezado "data:image/png;base64,"
//     $imagen = str_replace('data:image/png;base64,', '', $imagen);
//     $imagen = str_replace(' ', '+', $imagen);
//     $nombreArchivo = 'formato_' . time() . '.png';

//     // Guarda en storage/app/public/formatos/
//     Storage::disk('public')->put("reportes/$nombreArchivo", base64_decode($imagen));

//     // Puedes guardar en la base de datos si quieres
//     FormatoPdf::create([
//         'nombre_formato' => 'Captura Visual',
//         'archivo' => "reportes/$nombreArchivo",
//         'user_id' => Auth::id(),
//     ]);

//     return response()->json(['success' => true]);
// }


public function subirPDF(Request $request)
{
    $request->validate([
        'pdf_file' => 'required|mimes:pdf|max:20480', 
    ]);

    $nombreFormato = $request->input('nombre_formato', 'PDF ');

    $archivo = $request->file('pdf_file');
    $nombreArchivo = 'subido_' . time() . '.' . $archivo->getClientOriginalExtension();

    $ruta = $archivo->storeAs('reportes', $nombreArchivo, 'public');

    FormatoPdf::create([
        'nombre_formato' => $nombreFormato,
        'archivo' => $ruta,
        'user_id' => Auth::id(),
        'capture_data_id' => $request->input('capture_data_id'), 

    ]);

    return redirect()->route('formato.pdf.historial')->with('success', 'PDF subido y guardado correctamente en el historial.');
}


public function verHistorialEspecifico($medicoId)
{
    // Buscar médico por su ID
    $medico = Medico::findOrFail($medicoId);

    

    // Buscar usuario relacionado por correo del médico
    $usuario = User::where('email', $medico->correo)->firstOrFail();
    /*dd($usuario);*/
    // Obtener formatos relacionados al usuario
    $formatos = FormatoPdf::where('user_id', $usuario->id)->with('captureData')->get();

    return view('historial-formatos', compact('usuario', 'formatos'));
}



}
