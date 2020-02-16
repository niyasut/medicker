<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {


        if (Auth::check() && Auth::user()->usertype == 'doctor') {
            // return view('doctor.doctor_dashboard');
            return redirect('doctor_dashboard');
        }
        elseif (Auth::check() && Auth::user()->usertype == 'admin'){

            // return view('admin.admin_dashboard');
            return redirect('admin_dashboard');
           
        }
        elseif (Auth::check() && Auth::user()->usertype == 'admin'){

            // return view('admin.admin_dashboard');
            return redirect('patient_dashboard');
           
        }










        // if (Auth::guard($guard)->check()) {
        //      return redirect(RouteServiceProvider::HOME);
            
           
        // }

        return $next($request);
    }
}
