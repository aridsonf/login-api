<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserRegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_user_can_register()
    {
        $response = $this->postJson('/api/register', [
            'name' => 'Test User',
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('users', [
            'username' => 'testuser',
        ]);
    }

    /** @test */
    public function user_can_register_successfully()
    {
        $response = $this->postJson('/api/register', [
            'name' => 'Test User',
            'username' => 'testuser',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseHas('users', ['username' => 'testuser']);
    }
    
    /** @test */
    public function registration_fails_with_invalid_data()
    {
        $response = $this->postJson('/api/register', [
            'name' => '', // Nome vazio
            'email' => 'not-an-email', // Email inválido
            'password' => 'short', // Senha muito curta
            'username' => '', // Username vazio
        ]);

        $response->assertStatus(422); // HTTP 422 Unprocessable Entity
        $response->assertJsonValidationErrors(['name', 'email', 'password', 'username']);
    }
}
