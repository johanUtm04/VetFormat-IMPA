<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Mail\CrearPasswordMail; // más adelante lo creamos
use App\Models\FormatoPdf;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;


class MedicoController extends Controller
{
    public function index()
    {
        /*Traes *todos* los registros de la tabla 'medicos' y los guardas en la variable $medicos*/
        $medicos = Medico::all();

        // Se retorna la vista 'medicos.index' y se le pasa la variable $medicos para que pueda ser usada dentro de la vista.
        return view('medicos.index', compact('medicos'));
    }


    public function create()
    {
        return view('medicos.create');
    }

public function store(Request $request)
{
    //Validaciones de datos recibidos desde el Formulario
    $request->validate([
        'nombre' => 'required|string|max:255',
        'correo' => 'required|email|unique:medicos,correo',
        'especialidad' => 'required|string|max:255',
        'estado' => 'required|in:Activo,Inactivo',
        'password' => 'required|min:6|confirmed',
    ]);

    //Crea un reistro
    $medico = Medico::create([
        'nombre' => $request->nombre,
        'correo' => $request->correo,
        'especialidad' => $request->especialidad,
        'estado' => $request->estado,
    ]);

   
    //recibir datos para mandar usuario a a BD
$user = User::create([
    'nombre' => $request->nombre,
    'email' => $request->correo,
    'password' => Hash::make($request->password),
    'tipo_usuario' => 'Medico',
    'estado' => $request->estado,
]);


    return redirect()->route('medicos.index')->with('created', 'Médico registrado Correctamente');
}


    public function edit($id)
    {
    $medico = Medico::findOrFail($id);  /* Creamos una variable 'medico', donde revisa si esta ese id previemente jalado de la bd, gracias a la variable medicos, o bien renonbrada medico */
    $user = $medico->user;/*  cremos la variable user, de la bd, con el intermediario modelo, lo llenamos de sus email, y a medico le agregamos al correo */
    return view('medicos.edit', compact('medico')); /* vamos a la vista que queremos, pero le adjuntamos la variable medico */
    }

public function update(Request $request, $id)
{
    $messages = [
        'nombre.regex' => 'El nombre solo puede contener letras y espacios.',
        'especialidad.regex' => 'La especialidad solo puede contener letras y espacios.',
    ];

    $medico = Medico::findOrFail($id);

    $request->validate([
        'nombre' => 'required|string|min:3|max:255',
        'correo' => 'required|email|unique:medicos,correo,' . $medico->id,
        'especialidad' => ['required', 'string', 'max:55', 'regex:/^[a-zA-Z\s]+$/'],
        'estado' => 'required|in:Activo,Inactivo',
        'password' => 'nullable|min:6|confirmed',
    ], $messages);

    // Guarda correo antiguo para buscar usuario
    $correoAnterior = $medico->correo;


    // Actualiza médico
    $medico->update([
        'nombre' => $request->nombre,
        'correo' => $request->correo,
        'especialidad' => $request->especialidad,
        'estado' => $request->estado,
    ]);

    // Actualiza usuario relacionado
    $user = User::where('email', $correoAnterior)->first();
    if ($user) {
        $user->nombre = $request->nombre;
        $user->email = $request->correo;
        $user->estado = $request->estado;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
    }

/*         if (!$user) {
        dd("Usuario no encontrado con correo: " . $correoAnterior);
    } */

    return redirect()->route('medicos.index')->with('updated', 'Médico actualizado correctamente');
}


    public function destroy($id)
    {
        $medico = Medico::findOrFail($id);
        $medico->delete();

            // Buscar usuario relacionado por el correo del médico
    $user = $medico->user;
    // Eliminar primero al usuario (opcional según tu lógica)
    if ($user) {
        $user->delete();
    }
        return redirect()->route('medicos.index')->with('deleted', 'Médico eliminado de BD correctamente');
    }

    public function verHistorialEspecifico($id){
        $medico = Medico::findOrFail($id);
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
