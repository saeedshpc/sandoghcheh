<?php

namespace App\Http\Controllers;

use App\Models\AdvertisingExpense;
use Illuminate\Http\Request;

class AdvertisingExpenseController extends Controller
{
    public function index()
    {
        return view('advertisingExpenses.index', [
            'expenses' => AdvertisingExpense::latest()->get()
        ]);
    }
}
