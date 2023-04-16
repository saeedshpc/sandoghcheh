<?php

namespace App\Models;

use App\Enums\PaymentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreelancerExpense extends Model
{
    use HasFactory;

    protected $casts = [
        'payment_status' => PaymentStatus::class
    ];


    public function freelancer()
    {
        return $this->belongsTo(Freelancer::class);
    }

    public function bankAccount()
    {
        return $this->belongsTo(BankAccount::class,'bank_account_id');
    }
}
