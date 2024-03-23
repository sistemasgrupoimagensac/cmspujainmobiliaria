<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if (Auth::check()) {
            if (Auth::user()->id_rol === 1) {
                return $next($request);
            } elseif (Auth::user()->id_rol === 2) {
                return redirect('/');
            }
        }
        return redirect('/');
    }
}
