<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use App\User;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;


    public function setUp(){
        parent::setUp();
        $this->user = factory(User::class)->create();
    }

    protected function signIn($user = null)
    {
        $user = $user ?: $this->user;
        $this->actingAs($user);
        return $this;
    }
}
