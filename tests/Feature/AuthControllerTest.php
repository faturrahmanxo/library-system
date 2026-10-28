<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function test_successful_login_displays_a_success_message(): void
    {
        $user = User::factory()->create();

        $response = $this->post(route('login.submit'), [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response
            ->assertRedirect(route('books.index'))
            ->assertSessionHas('success', 'Login berhasil.');

        $this->get(route('books.index'))
            ->assertOk()
            ->assertSee('Login berhasil.');
    }

    public function test_successful_logout_displays_a_success_message(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post(route('logout'));

        $response
            ->assertRedirect(route('login'))
            ->assertSessionHas('logout', 'Logout berhasil.');

        $this->assertGuest();

        $this->get(route('login'))
            ->assertOk()
            ->assertSee('<p role="status" style="color: red;">Logout berhasil.</p>', false);
    }
}
