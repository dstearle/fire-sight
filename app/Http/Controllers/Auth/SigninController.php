<?php

namespace App\Http\Controllers\Auth;

// Used by both the login and registration
use App\Http\Controllers\Controller;

// Used only for registloginration
use Illuminate\Foundation\Auth\AuthenticatesUsers;

// Used only for registration
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Redirects the view for the login to a custom view
    public function showLoginForm()
    {
        return view('auth.signin');
    }

}