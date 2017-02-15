<?php

namespace Tests\Feature;

use Rivescript;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AtomicTest extends TestCase
{
    /**
     * @var object
     */
    protected $rivescript;

    /**
     * Set up test environment.
     */
    protected function setUp()
    {
        parent::setUp();

        Rivescript::load(storage_path('rivescript/example.rive'));
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAtomicReply()
    {
        $response = Rivescript::reply(null, 'hello bot');

        $this->assertEquals('Hello human.', $response);
    }

    public function testAtomicReplyWithVariable()
    {
        $response = Rivescript::reply(null, 'what is your name?');

        $this->assertEquals('You can call me Vulcan Test Bot.', $response);
    }

    public function testWildcardReplyA()
    {
        $response = Rivescript::reply(null, 'my favorite thing in the world is science');

        $this->assertEquals('Why do you like science so much?', $response);
    }

    public function testWildcardReplyB()
    {
        $response = Rivescript::reply(null, 'Baymax told me to say hello');

        $this->assertEquals('Why would baymax have told you to say hello?', $response);
    }

    public function testWildcardReplyC()
    {
        $response = Rivescript::reply(null, 'I think the sky is orange');

        $this->assertEquals('Do you think the sky is orange a lot?', $response);
    }

    public function testWildcardReplyD()
    {
        $response = Rivescript::reply(null, 'I am twenty years old');

        $this->assertEquals('Tell me that as a number instead of spelled out like "twenty".', $response);
    }

    public function testWildcardReplyE()
    {
        $response = Rivescript::reply(null, 'I am twenty years old');

        $this->assertEquals('Tell me that as a number instead of spelled out like "twenty".', $response);
    }
}
