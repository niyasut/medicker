<?php

namespace App\Http\Controllers;

use App\User;
use App\doctor;
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
        $doctors = doctor::All();
        return view('doctor.patient_id_search',['doctors'=>$doctors]);
        // return view('doctor.patient_id_search')->with('users',$users);
    }
}
