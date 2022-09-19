<?php

namespace Estimtrack\Orplannersdkphp\Tests\Feature;

use Tests\TestCase;

class GreeterTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/greet/dummy');

        $response->assertStatus(200);
    }
}
