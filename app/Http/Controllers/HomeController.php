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
        $doctors = doctors_details::All();
        return view('doctor.patient_id_search',['doctors'=>$doctors]);
        // return view('doctor.patient_id_search')->with('users',$users);
        $result = doctors_details::with('degree')->get();
    }
}
