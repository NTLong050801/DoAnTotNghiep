<?php

namespace App\Listeners;

use App\Events\SendResultEvent;
use App\Mail\SendResultMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendMailListener implements ShouldQueue
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
    public function handle(SendResultEvent $event): void
    {
        Mail::to($event->email)->send(new SendResultMail($event->email,$event->file));
    }
}
