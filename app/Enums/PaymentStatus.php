<?php

namespace App\Enums;

enum PaymentStatus : string
{
    case Paid = 'پرداخت شده';
    case Pending = 'در انتظار پرداخت';
    case Check = 'صدور چک';
}
