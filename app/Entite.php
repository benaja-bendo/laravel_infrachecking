<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entite extends Model
{
    protected $guarded=['_token'];
}
