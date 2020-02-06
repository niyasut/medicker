<?php

namespace App;

use App\doctors_details;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $guarded = [];
    protected $table = 'users';
    public function users() {
        return $this->hasMany(doctors_details::class, 'id');
      }

}
