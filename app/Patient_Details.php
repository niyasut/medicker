<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient_Details extends Model
{
  public $timestamps = false;
    protected $guarded = [];
    protected $table = 'patient_details';

    public function users()
    {
      // return $this->belongsTo(User::class, 'id');
      // return $this->belongsTo('App\User', 'doctors_id');
      return $this->belongsTo('App\User','patient_id','id');
    }
}
