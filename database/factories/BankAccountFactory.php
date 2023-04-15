<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BankAccount>
 */
class BankAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(2),
            'usage' => fake()->sentence(),
            'bank_name' => fake()->word(),
            'owner' => fake()->name(),
            'number' => fake()->randomNumber(8),
            'card_number' => fake()->creditCardNumber(),
        ];
    }
}
