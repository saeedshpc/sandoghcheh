<?php

namespace App\Http\Controllers;

use App\Models\Freelancer;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    public function index()
    {
        return view('freelancers.index', [
            'freelancers' => Freelancer::all(),
        ]);
    }

    public function create()
    {
        return view('freelancers.create');
    }
}
