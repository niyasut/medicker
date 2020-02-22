<?php

namespace App\Http\Controllers;
use App\User;
use App\doctors_details;

use App\Patient_Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{

        
   public function admin(){
    $dcount = DB::select('select count(*) as total from doctor_details');
    $pcount = DB::select('select count(*) as total from patient_details');
    return view('admin.admin_dashboard', ['dcount' => $dcount], ['pcount' => $pcount]); 
               
     }

   public function doctor(){
     
    return view('admin.add_doctor'); 
                           
     }

     public function users(){
             $users = User::all();
     
        return view('admin.users')->with('users' , $users); 

        
                               
         }

    public function useredit(Request $request ,$id){
          $users = User::findOrfail($id);
  
        return view('admin.user_edit')->with('users' , $users); 

     
                            
      }

      public function userupdate(Request $request ,$id)
      {
        
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->username = $request->input('username');
        $password = $request->input('password');
        $users->password = Hash::make($password);
        $users->update();

        
        $userss = doctors_details::where('doctors_id', '=', $id)->first();
        $userss->degree = $request->input('degree');
        $userss->Specialization = $request->input('Specialization');
        $userss->phone_number = $request->input('mobile');
        $userss->address = $request->input('address');
        $userss->hospital = $request->input('hospital');
        $userss->update();
      
     
      
    
        
        return Redirect::back()->with('status', 'Your data is Updated');

        //  return redirect('/listofdoctors')->with('status', 'Your data is updated');

      }

      public function userdelete(Request $request ,$id)
      {
        $users = User::find($id);
// Forign key problem if else statement
        if ($users->doctor == null) {
          $users->delete();
        } else {
         $doctor = $users->doctor;
         $doctor->delete();
          $users->delete();
        }
        return Redirect::back()->with('status', 'Your data is Dleted');

      }

      public function addnewuser(request $request)
      {
      
        $adduser = new User;
       
       // $adduser->id = $request->input('addid');
        $adduser->name = $request->input('name');
        $adduser->email = $request->input('email');
        $adduser->username = $request->input('username');
        $password = $request->input('password');
         $adduser->password = Hash::make($password);
        $adduser->usertype = 'doctor';
       
        
          $adduser->save();

          $doctordetails = new doctors_details;
          $doctordetails->doctors_id = $adduser->id;
          $doctordetails->degree = $request->input('degree');
          $doctordetails->Specialization = $request->input('Specialization');
          $doctordetails->phone_number = $request->input('mobile');
          $doctordetails->address = $request->input('address');
          $doctordetails->hospital = $request->input('hospital');
          $doctordetails->save();
          return Redirect::back()->with('status', 'Data added doctors details');
      }

      public function listofdoctors(){
        $users = User::with('doctor')->get();
        $users = User::where('usertype','doctor')->get();
        
   return view('/admin.listofdoctors')->with('users' , $users); 

   
                          
    }

    public function patientslist(){


      $users = User::with('patient')->get();
      $users = User::where('usertype','patient')->get();



      return view('/admin.patientslist')->with('users' , $users); 
                
      }
        public function patientupdate(Request $request ,$id){

          $users = User::find($id);
          $users->name = $request->input('name');
          $users->email = $request->input('email');
          $users->username = $request->input('username');
          $password = $request->input('password');
          $users->password = Hash::make($password);
          $users->update();
  
          
          $userss = Patient_Details::where('patient_id', '=', $id)->first();
          $userss->mobile = $request->input('mobile');
          $userss->age = $request->input('age');
          $userss->gender = $request->input('gender');
          $userss->blood_group = $request->input('bg');
          $userss->height = $request->input('height');
          $userss->weight = $request->input('weight');
          $userss->bp = $request->input('bp');
          $userss->address = $request->input('address');
          $userss->update();


          return Redirect::back()->with('status', 'Your data is updated');
        }
        public function addnewpatient(request $request)
        {
        
          $adduser = new User;
         
         // $adduser->id = $request->input('addid');
          $adduser->name = $request->input('name');
          $adduser->email = $request->input('email');
          $adduser->username = $request->input('username');
          $password = $request->input('password');
           $adduser->password = Hash::make($password);
          $adduser->usertype = 'patient';
         
          
            $adduser->save();
  
            $doctordetails = new Patient_Details;
            $doctordetails->patient_id = $adduser->id;
            $doctordetails->mobile = $request->input('mobile');
            $doctordetails->age = $request->input('age');
            $doctordetails->gender = $request->input('gender');
            $doctordetails->blood_group = $request->input('bgroup');
            $doctordetails->height = $request->input('height');
            $doctordetails->weight = $request->input('weight');
            $doctordetails->bp = $request->input('bp');
            $doctordetails->address = $request->input('address');
            $doctordetails->save();
            return Redirect::back()->with('status', 'new patient added');
        }
      

}
