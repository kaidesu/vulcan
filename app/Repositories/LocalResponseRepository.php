<?php

namespace App\Repositories;

use Vulcan\Rivescript\Rivescript;
use App\Contracts\ResponseRepository;

class LocalResponseRepository implements ResponseRepository
{
    /**
     * Create a new LocalResponseRespository instance.
     */
    public function __construct()
    {
        $this->rivescript = new Rivescript;
        $this->rivescript->load(storage_path('rivescript/atom.rive'));
    }

    /**
     * Process an incoming message from either a guest
     * or registered user.
     *
     * @param  string  $message
     * @param  mixed  $user
     * @return mixed
     */
    public function process($message, $user = 0)
    {
        return $this->rivescript->reply($message, $user);
    }
}
