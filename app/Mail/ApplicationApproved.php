<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplicationApproved extends Mailable
{
    use Queueable, SerializesModels;

    protected $application;
    protected $event;

    public function __construct($application, $event)
    {
        $this->application = $application;
        $this->event = $event;

    }

    public function build()
    {
        return $this->view('userView.applicationApprovedView')
                    ->subject('Event application confirmed')
                    ->with([
                        'name' => $this->application->name,
                        'created_at' => $this->application->created_at->format('l jS \\of F Y h:i:s A')
                    ]);
    }
}
