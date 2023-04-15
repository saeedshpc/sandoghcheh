<?php

namespace Database\Factories;

use App\Models\BankAccount;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'company_id' => Company::factory(),
            'bank_account_id' => BankAccount::factory(),
            'price' => fake()->randomNumber('5'),
            'purchaser' => fake()->name(),
            'description' => fake()->paragraph(),
            'purchased_date' => fake()->dateTime(),
        ];
    }
}
