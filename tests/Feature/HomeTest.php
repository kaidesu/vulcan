<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomeTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function a_random_quote_is_displayed_on_the_home_page()
    {
        $quotes = config('vulcan.quotes');

        $this->signIn();

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
