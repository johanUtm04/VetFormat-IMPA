<?php /* ✔Codigo Revisado por Johan */
namespace App\Http\Controllers; 
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash; 
class LoginController extends Controller
{
    public function login()
    {
        return view('/Autentificacion/login');
    }

    public function register()
    {
        return view('/Autentificacion/register');
    }

    public function errorCredenciales()
    {
        return view('/Autentificacion/errorCredenciales');
    }
    //Logica de Autenticacion
    public function autenticar(Request $request)
    {
        $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $usuario = Auth::user();

            if ($usuario->estado !== 'Activo') {
                Auth::logout(); 
                return redirect()->route('login')->with('error', 'Usuario inactivo.');
            }

            if ($usuario->tipo_usuario === 'Admin') {
                return redirect()->route('medicos.index');
            } elseif ($usuario->tipo_usuario === 'Medico') {
                return redirect()->route('reports.inicio');
            } else {
                Auth::logout(); 
                return redirect()->route('login');
            }
        } else {
        return redirect()->route('login')->with('error', 'Credenciales Incorrectas ❌, Favor de Revisarlas ');
        }
    }

}
