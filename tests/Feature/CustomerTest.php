<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomerTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function a_user_can_browse_customers()
    {
        $response = $this->get('/customers');

        $response->assertStatus(200);
    }
}
