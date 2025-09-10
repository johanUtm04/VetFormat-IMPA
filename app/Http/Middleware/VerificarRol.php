<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

use function PHPUnit\Framework\returnSelf;

class VerificarRol
{

public function handle(Request $request, Closure $next, $rol)
{
        if (session()->has('usuario') && session('usuario')->tipo_usuario === $rol) {
            return $next($request);
        }
    return redirect('/error');
}
}
