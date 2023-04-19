<?php

namespace App\View\Components;

use App\Models\Activity;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Activities extends Component
{

    public function render(): View|Closure|string
    {
        return view('components.activities', [
            'activities' => Activity::latest()->take(10)->get(),
        ]);
    }
}
