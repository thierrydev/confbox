<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Event;


class EventController extends Controller
{
    // public function index()
    // {
    //     $events = Event::all();
    //     // $events = Event::all()->sortBy('date_from', 'asc')->get();
    //     dd($events);
    //     return view('results')->with('event',$events);
    // }

    public function index()
    {
        $events = Event::all();
        return view('eventList', ['events' => $events]);
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