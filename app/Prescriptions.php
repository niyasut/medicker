<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescriptions extends Model
{
    protected $guarded = [];
    protected $table = 'prescriptions';
    public $timestamps = false;
}