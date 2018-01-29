<?php

namespace App\Services\Messaging;

use App\Contracts\Messaging;
use Vulcan\Rivescript\Rivescript;

class RivescriptDriver implements Messaging
{
    /**
     * @var Rivescript
     */
    protected $rivescript;
    
    /**
     * Create a new RivescriptDriver instance.
     *
     * @param  Rivescript  $rivescript
     */
    public function __construct(Rivescript $rivescript)
    {
        $this->rivescript = $rivescript;
    }
    
    /**
     * Reply to user's message
     *
     * @param  string  $message
     * @return string
     */
    public function reply($message)
    {
        $this->rivescript->load(resource_path('rivescript/test.rive'));
        
        $response = $this->rivescript->reply(null, $message);
        
        return $response;
    }
}
