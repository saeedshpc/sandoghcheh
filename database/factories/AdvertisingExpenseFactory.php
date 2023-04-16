<?php

namespace Database\Factories;

use App\Models\Advertiser;
use App\Models\BankAccount;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AdvertisingExpense>
 */
class AdvertisingExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_id' => Company::factory(),
            'advertiser_id' => Advertiser::factory(),
            'bank_account_id' => BankAccount::factory(),
            'title' => fake()->sentence(3),
            'price' => fake()->randomNumber(5),
            'description' => fake()->paragraph(),
            'purchased_date' => fake()->dateTime(),
        ];
    }
}
