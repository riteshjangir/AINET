<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Auth;
class Handler extends ExceptionHandler
{
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        if ($request->is('individual') || $request->is('individual/*')) {
            return redirect()->guest('/login/individual');
        }
        if ($request->is('institution') || $request->is('institution/*')) {
            return redirect()->guest('/login/institution');
        }
        return redirect()->guest(route('login'));
    }
}