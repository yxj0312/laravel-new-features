<?php

namespace App\Listeners;

use App\Events\PostWasPublished;
use Illuminate\Queue\InteractsWithQueue;
//This means, if you wanna this event listener could be sent through an Queue,
//and be treaded as a sync operation, that doesn't hold up an issue request
//and usually for emails that doing times things -> implements ShouldQueue
//example: image u go into a store and u order something thats interfactory in the very back. The Cashier could tell u to wait and go all the way back to the factory, fetch the items, get the letter out, get it, put it down and bring it back to u. And that's gonna take long time
//Or alternatively, the Cashier could just send a little Frey to one of the co-workers, and the co-worker will take that for u.
use Illuminate\Contracts\Queue\ShouldQueue;

class NotifyBlogSubscriber implements ShouldQueue
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
     * @param  PostWasPublished  $event
     * @return void
     */
    public function handle(PostWasPublished $event)
    {
        var_dump('I am sending an email to the blog subscribers about this post');
        var_dump($event->post->toArray());
    }
}
