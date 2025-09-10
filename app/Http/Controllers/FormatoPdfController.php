<?php /* revisado por johan  */

namespace App\Http\Controllers;
use App\Models\FormatoPdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Medico;
class FormatoPdfController extends Controller
{
public function subirPDF(Request $request)
{
    $request->validate(['pdf_file' => 'required|mimes:pdf|max:20480', ]);
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
    return redirect()->route('formato.pdf.historial')->with('success', 'PDF subido y guardado correctamente en el historial');
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

public function verHistorialEspecifico($medicoId)
{
    $medico = Medico::findOrFail($medicoId);
    $usuario = User::where('email', $medico->correo)->firstOrFail();
    $formatos = FormatoPdf::where('user_id', $usuario->id)->with('captureData')->get();
    return view('historial-formatos', compact('usuario', 'formatos'));
}

public function verPdf($id)
{
    $formato = FormatoPdf::findOrFail($id);
    return response()->file(storage_path('app/public/' . $formato->archivo));
}
        }
