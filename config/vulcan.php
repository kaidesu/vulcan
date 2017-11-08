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
    
    'quotes' => [
        'Live long and prosper.',
        'Peace and long life.',
        'Nothing that is is unimportant.',
        'Challenge your preconceptions, or they will challenge you.',
        'Infinite diversity in infinite combination.',
        'My mind to your mind... my thoughts to your thoughts...',
        'In accepting the inevitable, one finds peace.',
        'Nothing unreal exists.',
        'Logic is the cement of our civilization, with which we ascend from chaos, using reason as our guide.',
        'Wanting is more pleasurable than having.',
        'The needs of the many outweigh the needs of the few or the one.',
        'Logic is the beginning, not the end, of Wisdom.',
        'Insufficient facts always invite danger.',
        'In critical moments, men sometimes see exactly what they wish to see.',
        'When you eliminate the impossible, whatever remains, however improbable, must be the truth.',
    ],

];
