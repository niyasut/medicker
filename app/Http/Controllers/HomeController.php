<?php

namespace App\Http\Controllers;

use App\User;
use App\doctors_details;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
      


        return view('doctor.patient_id_search');

      
     
    }




    public function patientidsearch(Request $request){

        $request->validate([
            'patientidsearch' => 'required|min:1|max:10',
            
            ]);

        $pidget = request()->input('patientidsearch');

        $pidsearch = User::where('id',$pidget)->get();

       
        return view('doctor.doctor_dashboard')->with('pidsearch',$pidsearch);
    

       
    } 
    
}
