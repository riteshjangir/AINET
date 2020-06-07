<?php

namespace App\Http\Controllers\Auth\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IndividualController extends Controller
{
    //

    protected $redirectTo = 'dashboard';
    public function __construct()
    {
        $this->middleware('guest:individual')->except('logout');
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function username()
    {
        return 'email';
    }
    protected function guard()
    {
        return Auth::guard('individual');
    }
}
