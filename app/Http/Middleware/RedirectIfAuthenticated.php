<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    public function handle($request, Closure $next, $guard = null)
    {
        // if ($guard == "individual" && Auth::guard($guard)->check()) {
        //     return redirect('/logout');
        //     // return sucess;
        // }
        // if ($guard == "institution" && Auth::guard($guard)->check()) {
        //     return redirect('/institution');
        // }

        // if(!auth()->guard($guard)->check()) {
        //     return redirect(route('login'));
        // }
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/dashboard');
        // }


        // if (Auth::guard($guard)->check()) {
        //     foreach (config('auth.guards') as $key => $value) {
        //         if($key == $guard) {
        //             return redirect()->route($value['redirectTo']);
        //         }
        //     }
        // }

        return $next($request);
    }
}