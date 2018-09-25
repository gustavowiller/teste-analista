<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AddressTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function a_user_can_browse_addresses()
    {
        $response = $this->get('/adresses');

        $response->assertStatus(200);
    }
}
