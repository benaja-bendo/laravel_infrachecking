<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Nuser extends Authenticatable
{
//    protected $fillable=[];
    protected $guarded=['_token'];
}
