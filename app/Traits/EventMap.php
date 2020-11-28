<?php

namespace App\Traits;

use App\Events\NewMessageDispatched;
use App\Listeners\SendNotification;

trait EventMap
{
    /**
     * All of the Inbox event / listener mappings.
     *
     * @var array
     */
    protected $events = [
        Events\NewMessageDispatched::class => [
            Listeners\SendNotification::class,
        ],

        Events\NewReplyDispatched::class => [
            Listeners\SendNotification::class,
        ],
    ];
}
