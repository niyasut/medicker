<?php

namespace App;

use App\users;
use App\doctors_details;
use Illuminate\Database\Eloquent\Model;

class doctors_details extends Model
{
    public $timestamps = false;
    protected $guarded = [];
    protected $table = 'doctor_details';
    // public function doctors_details()
    // {
    //   // return $this->belongsTo(users::class, 'id');
    //   // return $this->belongsTo('App\User', 'id', 'id');
    // }
}
