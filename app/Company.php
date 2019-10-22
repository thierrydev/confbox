<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

function events()
{
    return $this->hasMany('App\Event');
}
    
}
