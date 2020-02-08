<?php

namespace App\Listeners;

use App\Events\ViewPost;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncrementViewsCounter
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
     * @param  ViewPost  $events
     * @return void
     */
    public function handle(ViewPost $event)
    {
        $event->post->increment('views');
    }
}
