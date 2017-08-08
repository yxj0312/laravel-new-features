<?php

namespace App\Listeners;


use App\Events\CheckForLogin;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendLoginNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     *
     * @param  CheckForLogin  $event
     * @return void
     */
    public function handle(CheckForLogin $event)
    {
        //
    }
}
