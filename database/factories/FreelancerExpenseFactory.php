<?php

namespace Database\Factories;

use App\Models\BankAccount;
use App\Models\Freelancer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FreelancerExpense>
 */
class FreelancerExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'freelancer_expense_id' => Freelancer::factory(),
            'title' => fake()->sentence(),
            'price' => fake()->randomNumber(5),
            'description' => fake()->paragraph(),
            'bank_account_id' => BankAccount::factory(),
            'purchased_date' => fake()->dateTime(),
        ];
    }
}
