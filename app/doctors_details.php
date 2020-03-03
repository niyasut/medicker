<?php

namespace App;

use App\users;

use Illuminate\Database\Eloquent\Model;

class doctors_details extends Model
{
    // public $timestamps = false;
    protected $guarded = [];
    protected $table = 'doctor_details';



    public function user()
    {
      // return $this->belongsTo(User::class, 'id');
      // return $this->belongsTo('App\User', 'doctors_id');
      return $this->belongsTo('App\User','doctors_id','id');
    }

    
}
