<?php
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;

uses(RefreshDatabase::class);

test('User can log in with valid credentials and receive a token', function () {
    User::query()
        ->create([
            'mobile' => '09363680395',
            'password' => bcrypt('password'),
        ]);

    $payload = [
        'mobile' => '09363680395',
        'password' => 'password',
    ];

    $response = $this->postJson('/api/auth/login', $payload);

    $response->assertStatus(200);
    $response->assertJsonStructure([
        'data' => [
            'token',
        ],
        'server_time',
    ]);
});

test('User cannot log in with an incorrect password', function () {
    User::query()
        ->create([
            'mobile' => '09363680496',
            'password' => bcrypt('password'),
        ]);

    $payload = [
        'mobile' => '09363680496',
        'password' => 'wrong-password',
    ];

    $response = $this->postJson('/api/auth/login', $payload);

    $response->assertStatus(401);
    $response->assertJson([
        'message' => 'Invalid Credentials',
    ]);
});
