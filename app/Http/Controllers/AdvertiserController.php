<?php

namespace App\Http\Controllers;

use App\Models\Advertiser;
use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
    public function index()
    {
        return view('advertisers.index', [
            'advertisers' => Advertiser::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('advertisers.create');
    }

    public function store()
    {
        $attributes = $this->validateAdvertisers();

        Advertiser::create($attributes);

        return redirect('/advertisers')->with([
            'message' => 'مجری تبلیغات با موفقیت افزوده شد'
        ]);
    }

    public function edit(Advertiser $advertiser)
    {
        return view('advertisers.edit', [
            'advertiser' => $advertiser
        ]);
    }

    public function update(Advertiser $advertiser)
    {
        $attributes = $this->validateAdvertisers();

        $advertiser->update($attributes);

        return redirect('/advertisers')->with([
            'message' => 'اطلاعات مجری بروزرسانی شد'
        ]);
    }

    protected function validateAdvertisers()
    {
        return request()->validate([
            'name' => ['required'],
            'work_area' => ['required']
        ]);
    }
}
