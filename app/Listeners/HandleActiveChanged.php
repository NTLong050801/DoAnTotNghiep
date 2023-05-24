<?php

namespace App\Listeners;

use App\Events\ActiveChanged;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HandleActiveChanged
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
    public function handle(ActiveChanged $event): void
    {
        $active = $event->active;

        // Thực hiện hành động tương ứng khi active thay đổi
        if ($active) {
            echo 'active true';
        } else {
            // Active is false
            echo  'active false';
        }
    }
}
