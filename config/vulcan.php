<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Registration Options
    |--------------------------------------------------------------------------
    |
    | You may control whether or not registration is possible through the
    | frontend and whether or not you'd like to limit registrations down
    | to a specific email domain (e.g. @you.com).
    |
    */
    'registration' => [

        'enabled' => env('VULCAN_REGISTRATION_ENABLED', true),

        'domain' => env('VULCAN_REGISTRATION_DOMAIN', ''),

    ],

];
