<?php

namespace Tests\Traits;

use App\Models\User;

trait InteractsWithAuthenticatedUser
{
    protected function authenticateUser($attributes = [])
    {
        $user = User::factory()->create($attributes);
        $this->actingAs($user);

        return $user;
    }
}