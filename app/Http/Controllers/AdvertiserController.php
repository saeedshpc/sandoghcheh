<?php

namespace App\Http\Controllers;

use App\Enums\EventsInfo;
use App\Models\Activity;
use App\Models\Advertiser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdvertiserController extends Controller
{
    public function index(): View
    {
        return view('advertisers.index', [
            'advertisers' => Advertiser::latest()->get(),
        ]);
    }

    public function create(): View
    {
        return view('advertisers.create');
    }

    public function store(): RedirectResponse
    {
        $attributes = $this->validateAdvertisers();

        Advertiser::create($attributes);

        //I should replace this with event
        Activity::add(
            request()->user()->id,
            EventsInfo::AddAdvertiser->value
        );

        return redirect('/advertisers')->with([
            'message' => 'مجری تبلیغات با موفقیت افزوده شد'
        ]);
    }

    public function edit(Advertiser $advertiser): View
    {
        return view('advertisers.edit', [
            'advertiser' => $advertiser
        ]);
    }

    public function update(Advertiser $advertiser): RedirectResponse
    {
        $attributes = $this->validateAdvertisers();

        $advertiser->update($attributes);

        //I should replace this with event
        Activity::edit(
            request()->user()->id,
            EventsInfo::EditAdvertiser->value
        );

        return redirect('/advertisers')->with([
            'message' => 'اطلاعات مجری بروزرسانی شد'
        ]);
    }

    public function destroy(Advertiser $advertiser): RedirectResponse
    {
        $advertiser->delete();

        //I should replace this with event
        Activity::remove(
            request()->user()->id,
            EventsInfo::DeleteAdvertiser->value
        );

        return redirect('/advertisers')->with([
            'message' => 'اطلاعات مجری تبلیغات حذف شد.'
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
