<?php

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserTest extends TestCase
{
    use DatabaseTransactions;
    public function test_it_can_create_a_user()
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password123',
        ];

        $response = $this->post(route('users.store'), $userData);

        $response->assertStatus(302);
        $this->assertDatabaseHas('users', ['name' => 'John Doe']);
    }


    public function test_it_can_show_a_user()
    {
        $user = User::factory()->create();

        $response = $this->get(route('users.show', $user->id));

        $response->assertStatus(200);
        $response->assertSee($user->name);
    }

    
    public function test_it_can_update_a_user()
    {
        $user = User::factory()->create();

        $updatedData = [
            'name' => 'Updated Name',
            'email' => $user->email,
        ];

        $response = $this->put(route('users.update', $user->id), $updatedData);

        $response->assertStatus(302);
        $this->assertDatabaseHas('users', ['name' => 'Updated Name']);
    }

    public function test_it_can_delete_a_user()
    {
        $user = User::factory()->create();

        $response = $this->delete(route('users.destroy', $user->id));

        $response->assertStatus(302);
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}
