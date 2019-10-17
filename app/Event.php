<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['description','date_from','date_to','organizing_company_id','city', 'countr', 'event_url','topic'];
}
