<?php

namespace App\Models;

use App\Enums\AdvertisingMedia;
use App\Enums\PaymentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvertisingExpense extends Model
{
    use HasFactory;

    protected $casts = [
        'payment_status' => PaymentStatus::class,
        'advertising_media' => AdvertisingMedia::class,
    ];

}
