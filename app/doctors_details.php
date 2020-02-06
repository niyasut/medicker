<?php

namespace App;

use App\users;
use App\doctors_details;
use Illuminate\Database\Eloquent\Model;

class doctors_details extends Model
{
    protected $guarded = [];
    protected $table = 'doctor_details';
    public function doctors_details()
    {
      return $this->belongsTo(users::class, 'id');
    }
}
