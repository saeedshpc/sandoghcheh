<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        return view('expenses.index', [
            'expenses' => Expense::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('expenses.create', [
            'companies' => Company::all()
        ]);
    }
}
