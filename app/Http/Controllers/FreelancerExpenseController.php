<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\Freelancer;
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

    public function create()
    {
        return view('freelancerExpenses.create',[
            'freelancers' => Freelancer::all(),
            'bankAccounts' => BankAccount::all(),
        ]);
    }
}
