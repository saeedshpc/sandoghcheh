<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Revenue>
 */
class RevenueFactory extends Factory
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
            'total_sale' => fake()->randomNumber(7),
            'online_sale_share' => fake()->randomNumber(6),
            'offline_sale_share' => fake()->randomNumber(6),
            'description' => fake()->paragraph()
        ];
    }
}
