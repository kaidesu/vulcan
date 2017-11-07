<?php

namespace Tests\Unit;

use Tests\TestCase;

class GrumpyTest extends TestCase
{
    /** @test */
    public function true_equals_true()
    {
        $this->assertTrue(true);
    }

    /** @test */
    public function false_equals_false()
    {
        $this->assertFalse(false);
    }
}
