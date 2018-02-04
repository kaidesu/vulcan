<?php

return [
    
    /*
     |--------------------------------------------------------------------------
     | User Registration Options
     |--------------------------------------------------------------------------
     |
     | You may control whether or not registration is possible through the
     | frontend and whether or not you'd like to limit registrations down
     | to a specific email domain (e.g. @yourcompany.com).
     */
     
    'registration' => [

        'enabled' => env('REGISTRATION_ENABLED', true),

        'domain' => env('REGISTRATION_DOMAIN', ''),

    ],

    /*
    |--------------------------------------------------------------------------
    | Default Driver Implementations
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the implementations to be used by the
    | Vulcan engine. By providing this layer of abstraction it is easy to
    | create drivers for various internal and external processes.
    |
    */
    
    'defaults' => [
    
        'dialog' => env('VULCAN_DIALOG', 'null'),
        
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Supported Drivers
    |--------------------------------------------------------------------------
    |
    */
    
    'drivers' => [
        
        'dialog' => [
            
            'null'       => App\Foundation\Dialog\NullDriver::class,
            'rivescript' => App\Foundation\Dialog\RivescriptDriver::class,
            
        ],
        
    ],

];
