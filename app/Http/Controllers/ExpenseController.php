<?php

namespace App\Http\Controllers;

use App\Enums\PaymentStatus;
use App\Models\BankAccount;
use App\Models\Company;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            'companies' => Company::all(),
            'bankAccounts' => BankAccount::all(),
        ]);
    }

    public function store()
    {
       $attributes = request()->validate([
           'expense_title' => ['required'],
           'company_id' => ['required', Rule::exists('companies', 'id')],
           'expense_price' => ['required'],
           'expense_purchaser' => ['required', 'min:3', 'max:255'],
           'expense_payment_status' => ['required'],
           'bank_account_id' => ['required', Rule::exists('bank_accounts', 'id')]
       ]);

       if(request('expense_invoice_image') ?? false) {
          $attributes['expense_invoice_image'] = request()->file('expense_invoice_image')->store('expenses_invoices');
       }

       Expense::create($attributes);

       return redirect('/expenses')->with([
           'message' => 'تنخواه جدید با موفقیت ثبت شد'
       ]);
    }

    protected function validateExpense()
    {

    }
}
