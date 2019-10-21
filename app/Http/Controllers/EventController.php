<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $event = Event::all();
        return view('/event', ['events' => $event]);
    }
   
    public function create()
    {
        $event = new Event();
        return view('Organizer/create', ['event' => $event]);
    }

    public function store(Request $request)
    {
        Event::create($request->all());
        return redirect('event/create');
    }

    public function show(Event $event)
    {
        //
    }

   
    public function edit(Event $event)
    {
        //
    }

    public function update(Request $request, Event $event)
    {
        //
    }

   
    public function destroy(Event $event)
    {
        //
    }
}
