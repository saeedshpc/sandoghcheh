<?php

namespace App\Http\Controllers;

use App\Models\Advertiser;
use App\Models\AdvertisingExpense;
use App\Models\BankAccount;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdvertisingExpenseController extends Controller
{
    public function index()
    {
        return view('advertisingExpenses.index', [
            'advertisingExpenses' => AdvertisingExpense::latest()->get()
        ]);
    }

    public function create()
    {
        return view('advertisingExpenses.create', [
            'companies' => Company::all(),
            'bankAccounts' => BankAccount::all(),
            'advertisers' => Advertiser::all(),
        ]);
    }

    public function store()
    {
        $attributes = request()->validate([
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

        if(request('invoice_image') ?? false) {
            $attributes['invoice_image'] = request()->file('invoice_image')->store('advertising_invoices');
        }

        AdvertisingExpense::create($attributes);

        return redirect('/advertisingExpenses')->with([
            'message' => 'هزینه تبلیغات با موفقیت افزوده شد'
        ]);
    }

    public function edit(AdvertisingExpense $advertisingExpense)
    {
        return view('advertisingExpenses.edit', [
            'expense' => $advertisingExpense,
            'companies' => Company::all(),
            'bankAccounts' => BankAccount::all(),
            'advertisers' => Advertiser::all()
        ]);
    }

    public function update(AdvertisingExpense $advertisingExpense)
    {
        dd(request()->all());
    }

    public function destroy(AdvertisingExpense $advertisingExpense)
    {

    }

    protected function validateAdvertisingExpense()
    {

    }
}
