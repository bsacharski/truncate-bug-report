<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTruncation;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use DatabaseTruncation;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * Let's have 2nd test for truncate to actually start doing something
     */
    public function test_the_application_returns_a_successful_response2(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
