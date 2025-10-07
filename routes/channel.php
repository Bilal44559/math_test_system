<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
| Yahan par aap private/presence channels authorize karte ho.
| Private channel listen karne ke liye front-end me Echo.private('user-123') use hoga.
|
| Make sure: BroadcastServiceProvider enabled ho aur .env me BROADCAST_DRIVER=pusher ho.
*/

// Broadcast::channel('user-{userId}', function ($authUser, $userId) {
//     return (int) $authUser->id === (int) $userId;
// });


// Broadcast::channel('order-placed', function ($authUser, $userId) {
//     return (int) $authUser->id === (int) $userId;
// });

Broadcast::channel('order-placed', function () {
    return true;
});
