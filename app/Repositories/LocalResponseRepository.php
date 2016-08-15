<?php

namespace Vulcan\Repositories;

use Rivescript;
use Vulcan\Contracts\ResponseRepository;

class LocalResponseRepository implements ResponseRepository
{
    /**
     * Create a new LocalResponseRespository instance.
     */
    public function __construct()
    {
        // Hard load this for the time being.
        Rivescript::load(storage_path('rivescript/test.rive'));
    }

    /**
     * Process an incoming message from either a guest
     * or registered user.
     *
     * @param  string  $message
     * @param  mixed  $user
     * @return mixed
     */
    public function process($message, $user = null)
    {
        return Rivescript::reply($user, $message);
    }
}
