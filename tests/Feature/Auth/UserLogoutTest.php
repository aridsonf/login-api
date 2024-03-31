<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\InteractsWithAuthenticatedUser;

class UserLogoutTest extends TestCase
{
    use RefreshDatabase, InteractsWithAuthenticatedUser;

    /** @test */
    public function user_can_logout()
    {
        $user = $this->authenticateUser();
        $response = $this->postJson('/api/logout');
        $response->assertOk();
    }
}
