<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Individual;

class LoginController extends Controller



{
    // public function login(Request $request){
    //     dd($request->all());
    // }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed...
    //         return redirect()->intended('/');
    //     }
    // }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()

    {

        $this->middleware('guest')->except('logout');
        $this->middleware('guest:institution')->except('logout');
        $this->middleware('guest:individual')->except('logout');
    }
    public function showIndividualLoginForm()
    {
        return view('auth.login', ['url' => 'individual']);
    }
    public function individualLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        $credentials = ['email'=>$request->email,
        'password'=>$request->password,
];
        $attempt = Auth::guard('individual')->attempt(['email' => $request->email, 'password' =>$request->password]);

        return dd($attempt);

        if ($attempt){
            //return route('home');
            return Auth::user()->id;
        }

        else{
            //return back()->with('error','Invalid Credentials');
            return "error";
        }

       
    }

    public function showInstitutionLoginForm()
    {
        return view('auth.login', ['url' => 'institution']);
    }

    public function institutionLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
       

        // if (Auth::guard('institution')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

        //     return redirect()->intended('/institution');
        // }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function userLogout(){
        Auth::logout();
        return  redirect()->route('home.index');
    }


}
