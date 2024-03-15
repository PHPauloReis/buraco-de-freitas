<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complaint>
 */
class ComplaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author' => fake()->firstName(),
            'email_author' => fake()->safeEmail(),
            'localization' => fake()->address(),
            'reference' => fake()->sentence(4),
            'photo' => fake()->imageUrl()
        ];
    }
}
