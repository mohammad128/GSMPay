<?php

use GlassCode\PersianFaker\PersianFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Post;

uses(RefreshDatabase::class);

test('user can view a post and view count increases only once', function () {
    $user = User::factory()->create([
        'mobile' => '09363680395',
        'password' => bcrypt('password'),
    ]);
    $loginResponse = $this->postJson('/api/auth/login', [
        'mobile' => '09363680395',
        'password' => 'password',
    ]);
    $token = $loginResponse->json('data.token');


    $faker = PersianFaker::create();
    $post = Post::factory()->create([
        'title' => $faker->text()->sentence(),
        'content' => $faker->text()->paragraph(),
        'views' => 0,
        'user_id' => $user->id,
    ]);

    $response1 = $this
        ->withHeader('Authorization', "Bearer {$token}")
        ->getJson("/api/post/{$post->id}");
    $response1->assertStatus(200);
    $response1->assertJsonStructure([
        'data' => [
            'id',
            'title',
            'content',
            'views',
            'user' => [
                'id',
                'mobile',
                'avatar',
            ],
            'created_at',
            'updated_at',
        ],
        'server_time',
    ]);

    $this->assertEquals(1, $response1->json('data.views'));

    $response2 = $this->withHeader('Authorization', "Bearer {$token}")
        ->getJson("/api/post/{$post->id}");
    $response2->assertStatus(200);

    $this->assertEquals(1, $response2->json('data.views'));
});
