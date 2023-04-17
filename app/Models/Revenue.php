<?php

namespace App\Models;

use App\Enums\MonthOfYear;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;

    protected $casts = [
        'month_of_year' => MonthOfYear::class,
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
