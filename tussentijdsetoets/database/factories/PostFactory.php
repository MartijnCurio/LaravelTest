<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'user_id' => fake()->name(),
            'subject' => Str::random(10),
            'content' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
