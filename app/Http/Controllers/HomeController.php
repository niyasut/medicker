<?php

namespace App\Http\Controllers;

use App\User;
use App\Pre_id;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Http\Requests;
use App\Prescriptions;
use App\doctors_details;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
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
     * 
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
        // Session::flash('patientid', $patientid);
        Session::put('patientid', $patientid);
      
      
        $pidsearch = User::where('id',$patientid)->get();
        $predetails = Prescriptions::where('pre_id',$patientid)->get();
        Session::put('predetails', $predetails);
       
        if( $pidsearch->isEmpty() ){
            return Redirect::back();
        }else{

        $request->validate([
            'patientidsearch' => 'required|min:1|max:10',
            
            ]);

        // $pidget = request()->input('patientidsearch');

        //  $pidsearch = User::where('id',$pidget)->get();
  
        
        return view('doctor.doctor_dashboard')->with('pidsearch',$pidsearch );
       
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
             
      $patientid =   request()->input('pidhid');
      $dname =   request()->input('doctorname');
                $dhospital= request()->input('hospitalname');
                
               
               $drug = $request->input('drug');
               $dosage = $request->input('dosage');
               $frequency = $request->input('frequency');
               $days = $request->input('days');
               $instruction = $request->input('instruction');
               $pres =   request()->input('pidhid');
                // $drug = Input::get('drug');
                $precode =   request()->input('precode');
                $docid =   request()->input('docid');
                $pres = new Pre_id();
      
             
                // $ss   = $pres = sprintf('Comp-%03d', $rt);

         $id      = Pre_id::orderBy("id","DESC")->take(1)->first()->id + 1;
      
        //  $pres->id  = $id;
         $ss   =        $pres->pre_code  = $id;
         $pres->user_id  = $patientid;
         $pres->doctor_id  = $docid;
         $pres->doctor_name =  $dname;
         $pres->hospital =  $dhospital;
                // $ss   = $pres->pre_code  = IdGenerator::generate(['table' => 'pre_id', 'length' => 10, 'prefix' =>'100']);
                // $ss   = $pres = sprintf('Comp-%03d', $pres->id);
                $pres->save();
            for($i=0; $i<count($drug); $i++)
            {
                
                $pre = new Prescriptions();
                
                // $pre->id = 1;
                $pre->pre_id =  $patientid;
                $pre->precode =  $ss;
              
                $pre->drug = $drug[$i];   
                $pre->dosage = $dosage[$i];
                $pre->frequency = $frequency[$i];  
                $pre->days = $days[$i];  
                $pre->instruction = $instruction[$i];    
                $pre->save();
             
            }
           
            return Redirect::back()->with('status', 'prescription added');
            // return redirect('dd ($patientid)');
         
    }

    public function listofprescriptions(Request $request)
    {
      
    //    $users= new Prescriptions();
        //  $users = Prescriptions::all();
        
       $idss =Session::get('patientid');
    //    $idq = $idss->;
       $alldatasession =Session::get('predetails');
        // $idss = $request->session()->get('patientid');
        
        $pidsearch = Prescriptions::where('pre_id',$idss)->get();
        $alldet = Pre_id::where('user_id',$idss)->get();
        
        // Session::get('patientid');

        $users =   $pidsearch;
        // return view('doctor.pre_list')->with('users' , $users)->with('alldatasession' , $alldatasession);
        return view('doctor.pre_list' ,compact('alldet','users','idss') );
    }

    public function prescriptionshow(Request $request )
    {
        
        $patientid = Session::get('patientid');
    
      
      
        $pidsearch = User::where('id',$patientid)->get();
        $predetails = Prescriptions::where('pre_id',$patientid)->get();
   
       
       
        
        return view('doctor.pre_show', compact('pidsearch','predetails'));
    }

    public function preshow(Request $request ,$id){
        // $patientid = $id;
        $patientid = Session::get('patientid');
    
      
      
        $pidsearch = User::where('id',$patientid)->get();
        $predetails = Prescriptions::where('precode',$id)->get();
        $preiddetails = Pre_id::where('pre_code',$id)->get();
        return view('doctor.pre_show', compact('pidsearch','predetails','id','preiddetails'));
    }
    
}
