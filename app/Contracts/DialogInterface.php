<?php

namespace App\Contracts;

interface DialogInterface
{
    public function output($input, $user = null);
}
