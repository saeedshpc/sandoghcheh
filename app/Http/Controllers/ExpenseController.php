<?php

namespace App\Http\Controllers;

use App\Enums\PaymentStatus;
use App\Models\BankAccount;
use App\Models\Company;
use App\Models\Expense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
           'expense_description' => [],
           'expense_payment_status' => ['required'],
           'expense_purchased_date' => [],
           'bank_account_id' => ['required', Rule::exists('bank_accounts', 'id')],
           'expense_invoice_image' => ['image'],
       ]);

       if(request('expense_invoice_image') ?? false) {
          $attributes['expense_invoice_image'] = request()->file('expense_invoice_image')->store('expenses_invoices');
       }


       Expense::create($attributes);

       return redirect('/expenses')->with([
           'message' => 'تنخواه جدید با موفقیت ثبت شد'
       ]);
    }

    public function edit(Expense $expense)
    {
        return view('expenses.edit', [
            'expense' => $expense,
            'companies' => Company::all(),
            'bankAccounts' => BankAccount::all(),
        ]);
    }

    public function update(Expense $expense)
    {
        $attributes = request()->validate([
            'expense_title' => ['required'],
            'company_id' => ['required', Rule::exists('companies', 'id')],
            'expense_price' => ['required'],
            'expense_purchaser' => ['required', 'min:3', 'max:255'],
            'expense_description' => [],
            'expense_payment_status' => ['required'],
            'expense_purchased_date' => [],
            'bank_account_id' => ['required', Rule::exists('bank_accounts', 'id')],
            'expense_invoice_image' => ['image'],
        ]);

        if(request('expense_invoice_image') ?? false) {
            Storage::delete($expense->expense_invoice_image);
            $attributes['expense_invoice_image'] = request()->file('expense_invoice_image')->store('expenses_invoices');
        }

        $expense->update($attributes);

        return redirect('/expenses')->with([
            'message' => 'تنخواه با موفقیت بروزرسانی شد.'
        ]);
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect('/expenses')->with([
            'message' => 'هزینه تنخواه حذف شذ!'
        ]);
    }

    protected function validateExpense()
    {

    }
}
