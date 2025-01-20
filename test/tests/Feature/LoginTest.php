<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_user_can_login()
{
    $user = User::factory()->create();
    $response = $this->post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);
    $response->assertRedirect('/dashboard');
}

public function test_user_creation_validation()
{
    $response = $this->post('/admin/users', [
        'name' => '',
        'email' => 'invalid-email',
        'password' => 'short',
    ]);
    $response->assertSessionHasErrors(['name', 'email', 'password']);
}

}
