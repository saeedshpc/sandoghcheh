<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{

//    This controllr is just placeholder for the complete version of the setting page

    public function index()
    {
        return view('settings.index', [
            'setting' => Setting::first(),
        ]);
    }

    public function update()
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
