<?php

namespace App\Listeners;

use App\Events\TourRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendTourRegistrationEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(TourRegistered $event): void
    {
        Mail::to($event->tour->creator->email)
        ->send(new TourRegistrationMail($event->tour));
    }
}
