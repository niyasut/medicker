<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function redirectTo()
    {
        if(auth::user()->usertype == 'doctor')
        {
            return 'doctor_dashboard';
            
        }
        elseif(auth::user()->usertype == 'admin')
        {
            return 'admin_dashboard';

        }
        elseif(auth::user()->usertype == 'patient')
        {

        return 'patient_dashboard';

        }
        elseif(auth::user()->usertype == 'lab')
        {

        return 'lab_dashboard';

        }
        elseif(auth::user()->usertype == 'pharmacy')
        {

        return 'pharmacy_dashboard';

        }
        else{
            return '/';
        }


    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
            return 'username';


    }
}
