<?php

namespace Mautab\Listeners\Registration;

use Mautab\Events\Registration;
use Vesta;

class VestaRegistation
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
        Vesta::regUser(
            $event->user->nickname,
            bcrypt($event->user->password),
            $event->user->email,
            'default',
            $event->user->first_name,
            $event->user->last_name
        );

    }
}
