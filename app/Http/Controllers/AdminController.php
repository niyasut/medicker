<?php

namespace App\Http\Controllers;
use App\User;
use App\doctors_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $users->usertype = $request->input('usertype');
        $users->update();
        
         return redirect('/users')->with('status', 'Your data is updated');

      }

      public function userdelete(Request $request ,$id)
      {
        $users = User::find($id);
// Forign key problem if else statement
        if ($users->doctor == null) {
          $users->delete();
        } else {
          $users->doctor->delete();
          $users->delete();
        }

        // $users->doctor->delete();
        // $users->delete();
        return redirect('/users')->with('status', 'Your data is Dleted');

      }

      public function addnewuser(request $request)
      {
        $adduser = new User;
       // $adduser->id = $request->input('addid');
        $adduser->name = $request->input('name');
        $adduser->email = $request->input('email');
        $password = $request->input('password');
         $adduser->password = Hash::make($password);
        $adduser->usertype = $request->input('usertype');
        $adduser->save();
        return redirect('/users')->with('status', 'Data added doctors details');
      }

}
