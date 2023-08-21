<?php

namespace App\Listeners;

use App\Events\TicketingNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TicketingListner
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
    public function handle(TicketingNotification $event): void
    {
        //write the send mail here
    }
}
