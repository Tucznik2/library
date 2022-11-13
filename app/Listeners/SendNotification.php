<?php

namespace App\Listeners;

use App\Events\BookCreated;
use App\Mail\BookCreated as BookCreatedEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param \App\Events\BookCreated $event
     * @return void
     */
    public function handle(BookCreated $event)
    {
        Mail::to("f3kula@gmail.com")->send(new BookCreatedEmail($event->book));
        Log::info("Email został wysłany!");
    }
}
