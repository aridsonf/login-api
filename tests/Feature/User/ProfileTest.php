<?php

namespace Tests\Feature\User;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Tests\Traits\InteractsWithAuthenticatedUser;

class ProfileTest extends TestCase
{
    use RefreshDatabase, InteractsWithAuthenticatedUser;

    /** @test */
    public function user_can_view_their_profile()
    {
        $user = $this->authenticateUser();
        $response = $this->getJson('/api/user/profile');

        $response->assertOk();
        $response->assertJson([
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'username' => $user->username,
                'email' => $user->email,
            ]
        ]);
    }
}
