<?php

use App\Models\User;

it('user authenticate check', function () {
    $user = User::factory()->create();

    $this->actingAs($user)
        ->get('/home')
        ->assertOk()
        ->assertViewIs('home');
});

// test('example', function () {
//     $response = $this->get('/');

//     $response->assertStatus(200);
// });
