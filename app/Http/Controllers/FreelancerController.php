<?php

namespace App\Http\Controllers;

use App\Enums\EventsInfo;
use App\Models\Activity;
use App\Models\Freelancer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FreelancerController extends Controller
{
    public function index(): View
    {
        return view('freelancers.index', [
            'freelancers' => Freelancer::latest()->paginate(8),
        ]);
    }

    public function create(): View
    {
        return view('freelancers.create');
    }

    public function show(Freelancer $freelancer): View
    {
        return view('freelancers.show', [
            'freelancer' => $freelancer
        ]);
    }

    public function store(): RedirectResponse
    {
        $attributes = request()->validate([
            'fullName' => ['required'],
            'expertise' => ['required'],
            'bank' => [],
            'bank_account_number' => [],
            'card_number' => []
        ]);

        Freelancer::create($attributes);

        //I should replace this with event
        Activity::add(
            request()->user()->id,
            EventsInfo::AddFreelancer->value
        );

        return redirect('/freelancers')->with([
            'message' => 'فریلنسر با موفقیت افزوده شد.'
        ]);
    }

    public function edit(Freelancer $freelancer): View
    {
        return view('freelancers.edit', [
            'freelancer' => $freelancer
        ]);
    }

    public function update(Freelancer $freelancer): RedirectResponse
    {
        $attributes = request()->validate([
            'fullName' => ['required'],
            'expertise' => ['required'],
            'bank' => [],
            'bank_account_number' => [],
            'card_number' => []
        ]);

        $freelancer->update($attributes);

        //I should replace this with event
        Activity::edit(
            request()->user()->id,
            EventsInfo::EditFreelancer->value
        );

        return redirect('/freelancers')->with([
            'message' => 'فریلنسر با موفقیت افزوده شد.'
        ]);
    }

    public function destroy(Freelancer $freelancer): RedirectResponse
    {
        $freelancer->delete();

        //I should replace this with event
        Activity::remove(
            request()->user()->id,
            EventsInfo::DeleteFreelancer->value
        );

        return redirect('/freelancers')->with([
            'message' => 'فریلسنر حذف شد'
        ]);
    }
}
