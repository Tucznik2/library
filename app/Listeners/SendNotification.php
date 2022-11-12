<?php

namespace App\Listeners;

use App\Events\BookCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

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
        Log::info("Email powinien zostac wysłany! Książka " . $event->book->name . " została dodana!");
    }
}
