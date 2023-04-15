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

    public function store()
    {
        $atributes = request()->validate([
            'bank_account_id' => ['required'],
            'freelancer_id' => ['required'],
            'title' => ['required'],
            'price' => ['required'],
            'description' => [],
            'payment_status' => ['required'],
            'purchased_date' => ['date'],
            'invoice_image' => ['image'],
        ]);

        if(request('invoice_image') ?? false) {
            $atributes['invoice_image'] = request()->file('invoice_image')->store('freelancer_invoices');
        }

        FreelancerExpense::create($atributes);

        return redirect('freelancerExpenses')->with([
            'message' => 'هزینه فریلسنر با موفقیت افزوده شد'
        ]);
    }

    public function edit(FreelancerExpense $expense)
    {
        return view('freelancerExpenses.edit', [
            'expense' => $expense,
            'freelancers' => Freelancer::all(),
            'bankAccounts' => BankAccount::all()
        ]);
    }
}
