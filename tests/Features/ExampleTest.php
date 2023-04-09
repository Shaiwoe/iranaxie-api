<?php

namespace Tests\Features;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testExample()
    {
        $response = $this->get('/test');

        $response->assertStatus(404);
    }
}
