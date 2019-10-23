<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = ['firstname', 'lastname', 'street_address', 'city', 'country', 'postcode', 'email', 'phone', 'linkedin_url', 'volunteer_id', 'event_id'];

    static function getVolunteerID($request)
    {
        $array = $request->all();
        $array['volunteer_id'] = auth()->id();
        return $array;
    }
}
