<?php

namespace Database\Factories;

use GlassCode\PersianFaker\PersianFaker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = PersianFaker::create();

        return [
            'title' => $faker->text()->sentence(),
            'content' => $faker->text()->paragraph(),
            'views' => $this->faker->randomNumber(nbDigits: 2),
        ];
    }
}
