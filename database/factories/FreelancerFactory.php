<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Freelancer>
 */
class FreelancerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fullName' => fake()->name(),
            'expertise' => fake()->word(),
            'bank' =>  fake()->word(),
            'bank_account_number' => fake()->randomNumber(8),
            'card_number' => fake()->randomNumber(9)
        ];
    }
}
