<?php

namespace App;

use App\doctors_details;
use Illuminate\Support\Facades\App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function doctor(){
        
       
        // return $this->hasOne('App\doctors_details');

         return $this->hasOne('App\doctors_details','doctors_id', 'id');
        
    }
    public function patient(){
        
       
        

        return $this->hasOne('App\Patient_details','patient_id', 'id');
       
   }
   
}

