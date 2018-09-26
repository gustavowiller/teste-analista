<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomerTest extends TestCase
{

    use RefreshDatabase;


    public function setUp(){
        parent::setUp();
        $this->customer = factory('App\Customer')->create();
    }

    /** @test */
    public function a_user_can_browse_customers()
    {
        $response = $this->get('/customers')
            ->assertSee($this->customer->name);
    }

    /** @test */
    public function a_user_can_visited_a_single_customer(){
        $response = $this->get('/customers/' . $this->customer->id)
            ->assertSee($this->customer->name);
    }

    /** @test */
    public function a_user_can_read_adresses_that_are_associated_with_a_customer(){
        $address = factory('App\Address')
            ->create(['customer_id' => $this->customer->id]);

        $this->get('/customers/' . $this->customer->id)
            ->assertSee($address->street);
    }

        /** @test */
    public function a_user_can_read_movies_that_are_associated_with_a_customer(){
        $movie = factory('App\Movie')
            ->create(['customer_id' => $this->customer->id]);

        $this->get('/customers/' . $this->customer->id)
            ->assertSee($movie->title);
    }
}
