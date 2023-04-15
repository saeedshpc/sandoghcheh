<?php

namespace App\Http\Controllers;

use App\Models\FreelancerExpense;
use Illuminate\Http\Request;

class FreelancerExpenseController extends Controller
{
    public function index()
    {
        return view('freelancerExpenses.index', [
            'freelancerExpenses' => FreelancerExpense::with('freelancer')->latest()->get(),
        ]);
    }
}
