<?php

namespace Mautab\Listeners\Registration;

use Mautab\Events\Registration;
use Mautab\Models\Roles;

class Registation
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    protected $role;

    public function __construct()
    {
        $this->role = Roles::where('slug', 'User')->firstOrFail();
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
        $event->user->addRole($this->role);
    }
}
