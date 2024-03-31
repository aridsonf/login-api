<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserLoginTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_login()
    {
        $user = User::create([
            'name' => 'Test User',
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        $response = $this->postJson('/api/login', [
            'username' => 'testuser',
            'password' => 'password',
        ]);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'token',
            'user' => [
                'username',
                'name',
                'email',
            ],
        ]);
    }

    /** @test */
    public function login_fails_with_invalid_credentials()
    {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('correctpassword'),
            'username' => 'testuser',
        ]);

        $response = $this->postJson('/api/login', [
            'username' => 'nonexistentuser',
            'password' => 'wrongpassword', // Senha incorreta
        ]);

        $response->assertStatus(401); // HTTP 401 Unauthorized
        $response->assertJson(['message' => 'Unauthorized']);
    }
}
