<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class CodigoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response
    {
        $nombres = []; // inicializa el arreglo de nombres vacío

        foreach (auth()->user()->roles as $role) {
            $nombres[] = $role->name; // agrega el nombre del usuario al arreglo de nombres
        }

        if (in_array('supervisor', $nombres)) {

            if ($request->hasCookie('code')) 
            {
                return $next($request);
            }
            else{
                Cookie::queue(Cookie::forget('XSRF-TOKEN'));
                Cookie::queue(Cookie::forget('laravel_session'));
                return redirect()->route('admin.login');
            } 
        } else {
            return $next($request);
        }
    }
}
