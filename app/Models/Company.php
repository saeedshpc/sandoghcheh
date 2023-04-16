<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function advertisingExpenses()
    {
        return $this->hasMany(AdvertisingExpense::class);
    }
}
