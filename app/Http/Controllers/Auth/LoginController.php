<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
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

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $remember_me = $request->filled('remember');

        $request->flashOnly(['email','remember']);

        if (Auth::attempt($credentials, $remember_me)) {
            if(auth()->user()->hasRole('Admin')){
                return redirect()->route('admin.dashboard');
            }else if(auth()->user()->hasRole('Client')){
                return redirect()->route('home');
            }else if(auth()->user()->hasRole('Saler')){
                return redirect()->route('admin.sales.index');
            }else{
                return redirect()->route('home');
            }
        } else {
            return redirect()->route('login')->with('error', 'Estas credenciales son incorrectas');
        }
    }

    protected function authenticated(Request $request, $user)
    {
        if (!$user->hasVerifiedEmail()) {
            Auth::logout();
            return redirect('/perfil');
        }
        return redirect()->intended($this->redirectPath());
    }

}
