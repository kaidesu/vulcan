<?php

namespace App\Contracts;

interface Messaging
{
    /**
     * Reply to user's message
     *
     * @param  string  $message
     * @return string
     */
    public function reply($message);
}
