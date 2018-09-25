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
    public function a_user_can_browse_adresses ()
    {
        $response = $this->get('/addresses');

        $response->assertStatus(200);
    }
}
