<?php

namespace App\Enums;

enum AccessLevels: string
{
    case Normal = 'پرسنل';
    case MidLevel = 'پرسنل ارشد';

    case Chief = 'مدیر';
}
