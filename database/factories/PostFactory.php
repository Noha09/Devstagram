<?php

namespace Database\Factories;

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
        return [
            'titulo' => fake()->sentence(5),
            'descripcion' => fake()->sentence(20),
            'imagen' => fake()->uuid() . '.jpg',
            'user_id' => fake()->randomElement([ 2, 3 ])
        ];
    }
}
