<?php

namespace App\Http\Controllers;

use App\User;
use App\doctors_details;
use Illuminate\Http\Request;

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





        // $users = User::All();
        //  $doctors = doctors_details::All();
        
    //    $doctorss = doctors_details::find(1)->degree;
    // return user::find(1)->doctor;

     return view('doctor.patient_id_search');
        // return view('doctor.patient_id_search')->with('doctorss',$doctorss);
     
    }
    public function patientidsearch(){
        
        $patientidsearchkey =\request::get('patientidsearch');

        $patient = User::where('id', 'like','%' .$patientidsearchkey. '%');
        return view('doctor.doctor_dashboard',['patient'=>$patient]);


        
    }
}
