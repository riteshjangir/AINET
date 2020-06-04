<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\Individual;
use App\Institution;
use App\OverIndividual;
use App\OverInstitution;




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
        $this->middleware('guest:overindividual')->except('logout');
        $this->middleware('guest:overinstitution')->except('logout');

    }
    public function showIndividualLoginForm()
    {
        return view('auth.login', ['url' => 'individual']);
    }
    public function individualLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6',
            'type'=>'required'
        ]);

        $credentials = ['email'=>$request->email,
        'password'=>$request->password,
];
// 

// public function showIndividualLoginForm()
// {
//     return view('auth.login', ['url' => 'individual']);
// }
// public function individualLogin(Request $request)
// {
//     $this->validate($request, [
//         'email'   => 'required|email',
//         'password' => 'required|min:6',
//         'type'=>'required'
//     ]);

    $credentials = ['email'=>$request->email,
    'password'=>$request->password,
];

        $logintype = $request->type;

        switch ($logintype) {
            case '1':
             $attempt = Auth::guard('individual')->attempt(['email' => $request->email, 'password' =>$request->password]); 
                break;

            case '2':
                $attempt = Auth::guard('institution')->attempt(['email' => $request->email, 'password' =>$request->password]); 
                    break; 

            case '3':
                $attempt = Auth::guard('overindividual')->attempt(['email' => $request->email, 'password' =>$request->password]); 
                    break;   

            case '4':
                $attempt = Auth::guard('OverInstitution')->attempt(['email' => $request->email, 'password' =>$request->password]); 
                    break;          
            
            default:
                return "Something went wrong";
                break;
        }


        

        

        if ($attempt){
            return route('home');
            // return Auth::user()->id;
        }

        else{
            //return back()->with('error','Invalid Credentials');
            return "error";
        }

       
    }

   

    public function userLogout(){
        Auth::logout();
        return  redirect()->route('home.index');
    }


}
