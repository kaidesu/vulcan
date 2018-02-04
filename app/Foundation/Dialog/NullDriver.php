<?php

namespace App\Foundation\Dialog;

use App\Contracts\DialogInterface;

class NullDriver implements DialogInterface
{
    public function output($input, $user = null)
    {
        return null;
    }
}
