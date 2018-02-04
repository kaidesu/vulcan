<?php

namespace App\Foundation\Dialog;

use Vulcan\Rivescript\Rivescript;
use App\Contracts\DialogInterface;

class RivescriptDriver implements DialogInterface
{
    protected $rivescript;
    
    public function __construct(Rivescript $rivescript)
    {
        $this->rivescript = $rivescript;
        
        $this->rivescript->load(storage_path('rivescript/atom.rive'));
    }
    
    public function output($input, $user = null)
    {
        return $this->rivescript->reply($input, $user);
    }
}
