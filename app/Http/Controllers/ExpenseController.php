<?php

namespace App\Http\Controllers;

use App\Enums\Events;
use App\Enums\EventsInfo;
use App\Models\Activity;
use App\Models\BankAccount;
use App\Models\Company;
use App\Models\Expense;
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

       //I should replace this with event
       Activity::create([
           'user_id' => request()->user()->id,
           'company_id' => $attributes['company_id'],
           'event' => Events::Add->value,
           'event_info' => EventsInfo::AddExpense->value ,
       ]);

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

        //I should replace this with event
        Activity::create([
            'user_id' => request()->user()->id,
            'company_id' => $attributes['company_id'],
            'event' => Events::Edit->value,
            'event_info' => EventsInfo::EditExpense->value ,
        ]);

        return redirect('/expenses')->with([
            'message' => 'تنخواه با موفقیت بروزرسانی شد.'
        ]);
    }

    public function destroy(Expense $expense)
    {
        //I should replace this with event
        Activity::create([
            'user_id' => request()->user()->id,
            'company_id' => $expense->company_id,
            'event' => Events::Delete->value,
            'event_info' => EventsInfo::DeleteExpense->value ,
        ]);

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
