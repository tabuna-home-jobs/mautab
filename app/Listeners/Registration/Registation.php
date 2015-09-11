<?php

namespace Mautab\Listeners\Registration;

use Mautab\Events\Registration;

class Registation
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
     * @param  Registration $event
     * @return void
     */
    public function handle(Registration $event)
    {
        $event->user->save();
    }
}
