<?php

namespace App\Http\Controllers;

use App\Models\Advertiser;
use App\Models\AdvertisingExpense;
use App\Models\BankAccount;
use App\Models\Company;
use Illuminate\Http\Request;

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
        dd(request()->all());
    }

    public function edit(AdvertisingExpense $advertisingExpense)
    {

    }

    public function update(AdvertisingExpense $advertisingExpense)
    {

    }

    public function destroy(AdvertisingExpense $advertisingExpense)
    {

    }

    protected function validateAdvertisingExpense()
    {

    }
}
