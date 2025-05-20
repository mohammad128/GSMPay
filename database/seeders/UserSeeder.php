<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(count: rand(10, 50))
            ->create()
            ->each(callback: function ($user) {
                Post::factory()->count(rand(1, 10))->create([
                    'user_id' => $user->id,
                ]);
            });
    }
}
