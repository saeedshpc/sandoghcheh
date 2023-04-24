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
            'expenses' => Expense::latest()->get(),
            'textColor' => [$this, 'textColor'],
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

        if (request('invoice_image') ?? false) {
            $attributes['invoice_image'] = request()->file('invoice_image')->store('expenses_invoices');
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

        if (request('invoice_image') ?? false) {
            if (!is_null($expense->invoice_image)) {
                Storage::delete($expense->invoice_image);
            }
            $attributes['invoice_image'] = request()->file('invoice_image')->store('expenses_invoices');
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
        //I should replace this with event
        Activity::remove(
            request()->user()->id,
            EventsInfo::DeleteExpense->value
        );

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

    public function deleteImage(Expense $expense, $hash): RedirectResponse
    {
        // check if it is a valid request that has been sent from edit page
        if ($hash !== session('imageDeleteHash')) {
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
