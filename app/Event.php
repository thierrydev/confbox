<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['description','date_from','date_to','city', 'country', 'event_url','topic', 'title'];
}

function company()
{
    return $this->belongsTo('App\Company');
}
