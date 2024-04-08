<?php

namespace App\Listeners;

use App\Events\TourStatusChanged;
use App\Mail\TourValidatedMail;
use App\Models\Join;
use App\Models\MemberJoin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendTourStatusEmail
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
    public function handle(TourStatusChanged $memberjoin)
    {
        $memberjoin = MemberJoin::get();
        $join = Join::get();
        if ($memberjoin->status == '2') {
            Mail::to(auth()->user()->email)
                ->send(new TourValidatedMail($memberjoin));
        } elseif ($event->status == 'rejected') {
            Mail::to($event->user->email)
                ->send(new TourRejectionMail($event->tour));
        }
    }
}
