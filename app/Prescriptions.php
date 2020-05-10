<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescriptions extends Model
{
    protected $guarded = [];
    protected $table = 'prescriptions';
    public $timestamps = false;

    public function prescriptions()
    {
      // return $this->belongsTo(User::class, 'id');
      // return $this->belongsTo('App\User', 'doctors_id');
      return $this->belongsTo('App\User','pre_id','id');
    }

 
}