<?php

namespace App\Http\Controllers;

use App\Enums\EventsInfo;
use App\Models\Activity;
use App\Models\Advertiser;
use App\Models\AdvertisingExpense;
use App\Models\BankAccount;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class AdvertisingExpenseController extends Controller
{
    public function index(): View
    {
        return view('advertisingExpenses.index', [
            'advertisingExpenses' => AdvertisingExpense::latest()->paginate(8),
            'textColor' => [$this, 'textColor']
        ]);
    }

    public function show(AdvertisingExpense $advertisingExpense): View
    {
        return view('advertisingExpenses.show', [
            'expense' => $advertisingExpense
        ]);
    }

    public function create(): View
    {
        return view('advertisingExpenses.create', [
            'companies' => Company::all(),
            'bankAccounts' => BankAccount::all(),
            'advertisers' => Advertiser::all(),
        ]);
    }

    public function store(): RedirectResponse
    {
        $attributes = $this->validateAdvertisingExpense();

        if(request('invoice_image') ?? false) {
            $attributes['invoice_image'] = request()->file('invoice_image')->store('advertising_invoices');
        }

        AdvertisingExpense::create($attributes);

        //I should replace this with event
        Activity::add(
            request()->user()->id,
            EventsInfo::AddAdvertisingExpense->value
        );

        return redirect('/advertisingExpenses')->with([
            'message' => 'هزینه جدید تبلیغات ثبت شد.'
        ]);
    }

    public function edit(AdvertisingExpense $advertisingExpense): View
    {
        return view('advertisingExpenses.edit', [
            'expense' => $advertisingExpense,
            'companies' => Company::all(),
            'bankAccounts' => BankAccount::all(),
            'advertisers' => Advertiser::all()
        ]);
    }

    public function update(AdvertisingExpense $advertisingExpense): RedirectResponse
    {

        $attributes = $this->validateAdvertisingExpense();

        if(request('invoice_image') ?? false) {
            if($advertisingExpense->invoice_image) {
                Storage::delete($advertisingExpense->invoice_image);
            }
            $attributes['invoice_image'] = request()->file('invoice_image')->store('advertising_invoices');
        }

        $advertisingExpense->update($attributes);

        //I should replace this with event
        Activity::edit(
            request()->user()->id,
            EventsInfo::EditAdvertisingExpense->value
        );

        return redirect('/advertisingExpenses')->with([
            'message' => 'اطلاعات تبلیغات بروزرسانی شد'
        ]);

    }

    public function destroy(AdvertisingExpense $advertisingExpense): RedirectResponse
    {
        $advertisingExpense->delete();

        //I should replace this with event
        Activity::remove(
            request()->user()->id,
            EventsInfo::DeleteAdvertisingExpense->value
        );

        return redirect('/advertisingExpenses')->with([
            'message' => 'هزینه تبلیغات حذف شد!'
        ]);
    }

    protected function validateAdvertisingExpense(): array
    {
        return request()->validate([
            'company_id' => ['required', Rule::exists('companies', 'id')],
            'advertiser_id' => ['required', Rule::exists('advertisers', 'id')],
            'bank_account_id' => ['required', Rule::exists('bank_accounts', 'id')],
            'title' => ['required', 'min:3', 'max:255'],
            'price' => ['required', 'integer'],
            'description' => [],
            'advertising_media' => ['required'],
            'payment_status' => ['required'],
            'purchased_date' => [],
            'invoice_image' => ['image'],
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
