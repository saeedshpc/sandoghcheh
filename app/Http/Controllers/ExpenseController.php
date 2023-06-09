<?php

namespace App\Http\Controllers;

use App\Enums\EventsInfo;
use App\Models\Activity;
use App\Models\BankAccount;
use App\Models\Company;
use App\Models\Expense;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ExpenseController extends Controller
{
    public function index(): View
    {
        return view('expenses.index', [
            'expenses' => Expense::latest()->paginate(8),
            'textColor' => [$this, 'textColor'],
        ]);
    }

    public function show(Expense $expense)
    {
        return view('expenses.show', [
            'expense' => $expense,
        ]);
    }

    public function create(): View
    {
        return view('expenses.create', [
            'companies' => Company::all(),
            'bankAccounts' => BankAccount::all(),
        ]);
    }

    public function store(): RedirectResponse
    {
        $attributes = $this->validateExpense();

        if (request('image') ?? false) {
            $attributes['image'] = request()->file('image')->store('expenses_invoices');
        }

        Expense::create($attributes);

        //I should replace this with event
        Activity::add(
            request()->user()->id,
            EventsInfo::AddExpense->value
        );

        return redirect('/expenses')->with([
            'message' => 'تنخواه جدید با موفقیت ثبت شد'
        ]);
    }

    public function edit(Expense $expense): View
    {
        return view('expenses.edit', [
            'expense' => $expense,
            'companies' => Company::all(),
            'bankAccounts' => BankAccount::all(),
        ]);
    }

    public function update(Expense $expense): RedirectResponse
    {
        $attributes = $this->validateExpense();

        if (request('image') ?? false) {
            if (!is_null($expense->image)) {
                Storage::delete($expense->image);
            }
            $attributes['image'] = request()->file('image')->store('expenses_invoices');
        }

        $expense->update($attributes);

        //I should replace this with event
        Activity::edit(
            request()->user()->id,
            EventsInfo::EditExpense->value
        );

        return redirect('/expenses')->with([
            'message' => 'تنخواه با موفقیت بروزرسانی شد.'
        ]);
    }

    public function destroy(Expense $expense): RedirectResponse
    {

        if ($expense->image) {
            Storage::delete($expense->image);
        }

        $expense->delete();

        //I should replace this with event
        Activity::remove(
            request()->user()->id,
            EventsInfo::DeleteExpense->value
        );


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
            'image' => ['image'],
        ]);
    }


    public function textColor($expense)
    {
        $statusColor = '';
        switch ($expense->payment_status->value) {
            case 'پرداخت شده' :
                $statusColor = 'text-green-600';
                break;
            case 'در انتظار پرداخت' :
                $statusColor = 'text-orange-500';
                break;
            case 'صدور چک' :
                $statusColor = 'text-purple-600';
                break;
        }
        return $statusColor;
    }
}
