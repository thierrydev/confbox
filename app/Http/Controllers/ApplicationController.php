<?php

namespace App\Http\Controllers;

use App\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    public function index()
    {
        $applications = Application::all()->where('volunteer_id', auth()->id());
        return view('application.list', compact('applications'));
    }

    public function create()
    {
        $application = new Application();
        return view('application.create', compact('application'));
    }

    public function store(Request $request)
    {
        $newRequest = Application::getVolunteerID($request);
        Application::create($newRequest);

        // Mail::to(auth()->email->email)->send(new ReserveConfirmation($reserva));
        return view('application.sent');
    }

    public function show(Application $application)
    {
        //
    }

    public function edit(Application $application)
    {
        return view('application.edit', compact('application'));
    }

    public function update(Request $request, Application $application)
    {
        //
    }

    public function destroy(Application $application)
    {
        //
    }
}
