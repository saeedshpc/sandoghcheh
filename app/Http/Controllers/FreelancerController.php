<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    public function index()
    {
        return view('freelancers.index', [
            'freelancers' => Freelancer::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('freelancers.create');
    }

    public function store()
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

    public function edit(Freelancer $freelancer)
    {
        return view('freelancers.edit', [
            'freelancer' => $freelancer
        ]);
    }

    public function update(Freelancer $freelancer)
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

    public function destroy(Freelancer $freelancer)
    {
        $freelancer->delete();

        return redirect('/freelancers')->with([
            'message' => 'فریلسنر حذف شد'
        ]);
    }
}
