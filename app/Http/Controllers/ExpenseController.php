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
        $attributes = $this->validateExpense();

       if(request('invoice_image') ?? false) {
          $attributes['invoice_image'] = request()->file('invoice_image')->store('expenses_invoices');
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
        $attributes = $this->validateExpense();

        if(request('invoice_image') ?? false) {
            if(!is_null($expense->invoice_image)) {
                Storage::delete($expense->invoice_image);
            }
            $attributes['invoice_image'] = request()->file('invoice_image')->store('expenses_invoices');
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

    protected function validateExpense(): array
    {
        return request()->validate([
            'title' => ['required'],
            'company_id' => ['required', Rule::exists('companies', 'id')],
            'price' => ['required', 'integer'],
            'purchaser' => ['required', 'min:3', 'max:255'],
            'description' => [],
            'payment_status' => ['required'],
            'purchased_date' => [],
            'bank_account_id' => ['required', Rule::exists('bank_accounts', 'id')],
            'invoice_image' => ['image'],
        ]);
    }

    public function deleteImage(Expense $expense, $hash)
    {
        // check if it is a valid request that has been sent from edit page
        if($hash !== session('imageDeleteHash')) {
            return redirect('/expenses');
        }

        Storage::delete($expense->invoice_image);
        $expense->update([
            'invoice_image' => null
        ]);

        return back()->with([
            'message' => 'تصویر فاکتور از این هزینه حذف شد.'
        ]);
    }
}
