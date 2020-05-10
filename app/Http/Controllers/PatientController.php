<?php

namespace App\Http\Controllers;

use auth;
use App\User;
use App\Pre_id;
use App\Prescriptions;
use Illuminate\Http\Request;


class PatientController extends Controller
{
    public function index(){


        return view('/patient.patient_dashboard');
    }

    public function preshow(){

                $idss =auth::User()->id;

        $pidsearch = Prescriptions::where('pre_id',$idss)->get();
        $alldet = Pre_id::where('user_id',$idss)->get();
        


        $users =   $pidsearch;

        return view('patient.pre_list' ,compact('alldet','users','idss') );
    }

    public function showpre(Request $request ,$id )
    {
        $patientid = auth::User()->id;
    
      
      
        $pidsearch = User::where('id',$patientid)->get();
        $predetails = Prescriptions::where('precode',$id)->get();
        $preiddetails = Pre_id::where('pre_code',$id)->get();
        // $dinfo = User::where('id',$ddid)->get();





        return view('patient.pre_show', compact('pidsearch','predetails','id','preiddetails'));
    }

    public function profile(Request $request )
    {
  





        return view('patient.profile');
    }
    


}
