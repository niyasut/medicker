<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\doctors_details;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Prescriptions;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;
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
        
        $greetings = "";

        /* This sets the $time variable to the current hour in the 24 hour clock format */
        $time = date("H");
    
        /* Set the $timezone variable to become the current timezone */
        $timezone = date("e");
    
        /* If the time is less than 1200 hours, show good morning */
        if ($time < "12") {
            $greetings = "Good morning";
        } else
    
        /* If the time is grater than or equal to 1200 hours, but less than 1700 hours, so good afternoon */
        if ($time >= "12" && $time < "17") {
            $greetings = "Good afternoon";
        } else
    
        /* Should the time be between or equal to 1700 and 1900 hours, show good evening */
        if ($time >= "17" && $time < "19") {
            $greetings = "Good evening";
        } else
    
        /* Finally, show good night if the time is greater than or equal to 1900 hours */
        if ($time >= "19") {
            $greetings = "Good night";
        }
    
        
        return view('doctor.patient_id_search', compact('greetings'));
    }


    
      
     
  




    public function patientidsearch(Request $request){
        $patientid = $request->input('patientidsearch');
        $pidsearch = User::where('id',$patientid)->get();


        if( $pidsearch->isEmpty() ){
            return Redirect::back();
        }else{

        $request->validate([
            'patientidsearch' => 'required|min:1|max:10',
            
            ]);

        $pidget = request()->input('patientidsearch');

         $pidsearch = User::where('id',$pidget)->get();

       
        return view('doctor.doctor_dashboard')->with('pidsearch',$pidsearch);
        }

       
    } 

    public function updateavatar(Request $request)
    {
        // handle the user upload avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/' . $filename));
            $user = Auth::User();
            $user->avatar = $filename;
            $user->save();
        }
        return redirect('/doctor_dashboard');

    }
    
            public function addprescription(Request $request){
           
                $patientid = request()->input('patientidsearch');
                
               
               $drug = $request->input('drug');
               $dosage = $request->input('dosage');
               $frequency = $request->input('frequency');
               $days = $request->input('days');
               $instruction = $request->input('instruction');
               
                // $drug = Input::get('drug');
       
            for($i=0; $i<count($drug); $i++)
            {
                $pre = new Prescriptions();
                
                // $pre->id = 1;
                $pre->pre_id =  $patientid;
                $pre->drug = $drug[$i];   
                $pre->dosage = $dosage[$i];
                $pre->frequency = $frequency[$i];  
                $pre->days = $days[$i];  
                $pre->instruction = $instruction[$i];    
                $pre->save();
             
            }
           
            return Redirect::back()->with('status', 'prescription added');

    }
    
}
