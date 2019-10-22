<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ["date_from", "date_to", "organizing_company_id", "country", "event_url", "approval_status", "topic", "description"];
}
