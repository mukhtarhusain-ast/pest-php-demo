<?php

use App\Models\User;

// test for check user login with redirect home view 

it('check user authenticate', function () {
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
// write test using dataset use


it('has emails', function (string $email) {
    expect($email)->not->toBeEmpty();
})->with([
    'james' => 'james@laravel.com',
    'taylor' => 'taylor@laravel.com',
    'nuno' => 'nuno@laravel.com',
])->todo();

