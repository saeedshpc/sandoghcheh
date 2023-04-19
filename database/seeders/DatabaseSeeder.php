<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Activity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\BankAccount::factory(2)->create();
        \App\Models\Company::factory(4)->create();
        \App\Models\Expense::factory(5)->create();
        \App\Models\FreelancerExpense::factory(5)->create();
        \App\Models\Advertiser::factory(5)->create();
        \App\Models\AdvertisingExpense::factory(5)->create();
        \App\Models\Revenue::factory(4)->create();
        \App\Models\User::factory(4)->create();
        \App\Models\Activity::factory(5)->Create();
        \App\Models\Setting::create([
            'banoris_expenses_budget' => 300000,
            'toucan_expenses_budget' => 500000,
            'freelancers_budget' => 2000000,
            'advertising_budget' => 30000,
            ]);
    }
}
