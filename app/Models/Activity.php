<?php

namespace App\Models;

use App\Enums\Events;
use App\Enums\EventsInfo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $casts = [
        'event_info' => EventsInfo::class,
        'event' => Events::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public static function add($user, $eventInfo)
    {
        $actitivy = new static();
        $actitivy->user_id = $user;
        $actitivy->event = Events::Add->value;
        $actitivy->event_info = $eventInfo;
        $actitivy->save();
    }

    public static function edit($user, $eventInfo)
    {
        $actitivy = new static();
        $actitivy->user_id = $user;
        $actitivy->event = Events::Edit->value;
        $actitivy->event_info = $eventInfo;
        $actitivy->save();
    }

    public static function remove($user, $eventInfo)
    {
        $actitivy = new static();
        $actitivy->user_id = $user;
        $actitivy->event = Events::Delete->value;
        $actitivy->event_info = $eventInfo;
        $actitivy->save();
    }
}
