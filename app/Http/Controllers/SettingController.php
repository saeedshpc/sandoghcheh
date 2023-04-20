<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SettingController extends Controller
{

//    This controllr is just placeholder for the complete version of the setting page

    public function index(): View
    {
        return view('settings.index', [
            'setting' => Setting::first(),
        ]);
    }

    public function update(): RedirectResponse
    {

        $attributes = request()->validate([
            'banoris_expenses_budget' => ['required', 'integer'],
            'toucan_expenses_budget' => ['required', 'integer'],
            'freelancers_budget' => ['required', 'integer'],
            'advertising_budget' => ['required', 'integer']
        ]);


        Setting::first()->update($attributes);

        return back()->with([
            'message' => 'تنظیمات بروزرسانی شدند!'
        ]);
    }
}
