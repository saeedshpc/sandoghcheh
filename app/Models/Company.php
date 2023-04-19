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

    public function revenues()
    {
        return $this->hasMany(Revenue::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
