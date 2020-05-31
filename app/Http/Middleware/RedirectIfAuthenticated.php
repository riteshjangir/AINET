<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "individual" && Auth::guard($guard)->check()) {
            return redirect('/individual');
        }
        if ($guard == "institution" && Auth::guard($guard)->check()) {
            return redirect('/institution');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }

        return $next($request);
    }
}