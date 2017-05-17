<?php

namespace App\Contracts;

interface ResponseRepository
{
    /**
     * Process an incoming message from either a guest
     * or registered user.
     *
     * @param  string  $message
     * @return mixed
     */
    public function process($message);
}
