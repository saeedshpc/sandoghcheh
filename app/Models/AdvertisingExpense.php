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

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function advertiser()
    {
        return $this->belongsTo(Advertiser::class);
    }

    public function bankAccount()
    {
        return $this->belongsTo(BankAccount::class, 'bank_account_id');
    }
}
