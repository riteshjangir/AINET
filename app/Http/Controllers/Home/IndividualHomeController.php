<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndividualHomeController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:individual');
    }
    public function index()
    {
        return view('dashboard');
    }
}
