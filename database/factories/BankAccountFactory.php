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
            'account_code' => 'BA-' . fake()->unique()->numberBetween('001', '999'),
            'account_name' => fake()->sentence(2),
            'account_usage' => fake()->sentence(),
            'account_bank_name' => fake()->word(),
            'account_owner' => fake()->name(),
            'account_number' => fake()->randomNumber(8),
            'account_card_number' => fake()->creditCardNumber(),
        ];
    }
}
