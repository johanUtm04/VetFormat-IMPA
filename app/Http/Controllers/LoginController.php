<?php

namespace App\Http\Controllers; 
// Define el namespace donde está este controlador, para que Laravel lo encuentre

use Illuminate\Support\Facades\Auth; 
// Importa la clase Auth para manejar autenticación

use Illuminate\Http\Request; 
// Importa Request para recibir datos de formularios

use App\Models\User; 
// Importa el modelo User para consultar la tabla usuarios

use Illuminate\Support\Facades\Hash; 
// Importa Hash para verificar contraseñas hasheadas

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

    /**
     * Mostrar error por credenciales inválidas.
     */
    public function errorCredenciales()
    {
        // Vista que muestra mensaje cuando el login falla
        return view('/Autentificacion/errorCredenciales');
    }

    /**
     * Mostrar vista de error general.
     */
    public function error()
    {
        // Vista genérica para errores inesperados
        return view('/Autentificacion/error');
    }

    /**
     * Vista de inicio para administrador.
     */
    public function admin()
    {
        // Vista para pantalla principal de administrador
        return view('/admin/inicio');
    }

    /**
     * Vista de inicio para médico.
     */
    public function medico()
    {
        // Vista para pantalla principal de médico
        return view('/medicos/inicio');
    }

    /**
     * Autenticar usuario según credenciales.
     */
public function autenticar(Request $request)
{
    // Validar inputs si quieres, por ejemplo:
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Obtenemos email y password del formulario
    $credentials = $request->only('email', 'password');

    // Intentar autenticación con Laravel
    if (Auth::attempt($credentials)) {
        // Autenticación exitosa

        // Obtener usuario autenticado
        $usuario = Auth::user();

        // Verificar si el usuario está activo (campo estado)
        if ($usuario->estado !== 'Activo') {
            Auth::logout(); // Cerrar sesión si está inactivo
            return redirect()->route('login')->with('error', 'Usuario inactivo.');
        }

        // Redirigir según tipo de usuario
        if ($usuario->tipo_usuario === 'Admin') {
            return redirect()->route('medicos.index');
        } elseif ($usuario->tipo_usuario === 'Medico') {
            return redirect()->route('reports.inicio');
        } else {
            Auth::logout(); // Cerrar sesión por rol desconocido
            return redirect()->route('login')->with('error', 'Acceso no autorizado.');
        }

    } else {
        // Autenticación fallida (email o contraseña incorrectos)
        return redirect()->route('login')->with('error', 'Correo o contraseña incorrectos.');
    }
}

}
