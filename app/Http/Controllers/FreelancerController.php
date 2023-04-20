<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FreelancerController extends Controller
{
    public function index(): View
    {
        return view('freelancers.index', [
            'freelancers' => Freelancer::latest()->get(),
        ]);
    }

    public function create(): View
    {
        return view('freelancers.create');
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

        return redirect('/freelancers')->with([
            'message' => 'فریلنسر با موفقیت افزوده شد.'
        ]);
    }

    public function destroy(Freelancer $freelancer): RedirectResponse
    {
        $freelancer->delete();

        return redirect('/freelancers')->with([
            'message' => 'فریلسنر حذف شد'
        ]);
    }
}
