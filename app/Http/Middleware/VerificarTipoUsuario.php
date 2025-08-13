<?php   /* inicio archivo php */

namespace App\Http\Middleware;  /* ubicacion */

use Closure;    /* funcion anonima */
use Illuminate\Http\Request;    /* interactar con el usuario */   
use Illuminate\Support\Facades\Auth;    

class VerificarTipoUsuario  /* voy a crear un plano o molde */
{

public function handle(Request $request, Closure $next, $tipo)
{
    $usuario = Auth::user();

    if ($usuario && $usuario->tipo_usuario === $tipo) {
        return $next($request);
    }

    return redirect('/errorCredenciales')->with('error', 'Acceso no autorizado.');
}

}