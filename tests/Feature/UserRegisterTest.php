<?php

use GlassCode\PersianFaker\PersianFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('User register successfully', function () {
    $faker = PersianFaker::create();
    $mobile = $faker->person()->phone();
    $payload = [
        'mobile' => $mobile,
        'password' => 'password',
    ];

    $response = $this->postJson('/api/auth/register', $payload);

    $response->assertStatus(201);
    $response->assertJsonStructure([
        'data' => [
            'id',
            'mobile',
            'avatar',
        ],
        'server_time',
    ]);

    $this->assertDatabaseHas('users', [
        'mobile' => $mobile,
    ]);
});

test('User mobile already taken', function () {
    $faker = PersianFaker::create();
    $mobile = $faker->person()->phone();
    $payload = [
        'mobile' => $mobile,
        'password' => 'password',
    ];

    $this->postJson('/api/auth/register', $payload);
    $response = $this->postJson('/api/auth/register', $payload);

    $response->assertStatus(422);
    $response->assertJson([
        'message' => 'The mobile has already been taken.',
        'errors' => [
            'mobile' => ['The mobile has already been taken.'],
        ],
    ]);
});
