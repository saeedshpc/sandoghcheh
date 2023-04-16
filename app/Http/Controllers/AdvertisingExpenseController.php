<?php

namespace App\Http\Controllers;

use App\Models\AdvertisingExpense;
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

    }

    public function store()
    {

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
