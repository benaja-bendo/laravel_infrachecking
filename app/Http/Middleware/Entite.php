<?php

namespace App\Http\Middleware;

use Closure;

class Entite
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return auth()->user() !=null ?  $next($request) :  redirect('loginEntite');

    }
}
