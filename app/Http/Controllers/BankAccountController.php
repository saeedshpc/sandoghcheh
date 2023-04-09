<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
    public function index()
    {
        return view('bank-accounts',[
            'bankAccounts' => BankAccount::all(),
        ]);
    }

    public function create()
    {
        return view('create-account');
    }

    public function store()
    {
        $attributes = request()->validate([
            'account_name' => ['required', 'min:3', 'max:255'],
            'account_usage' => ['min:3', 'max:255'],
            'account_bank_name' => ['required', 'min:3', 'max:255'],
            'account_owner' => ['required', 'min:3', 'max:255'],
            'account_number' => ['max:255'],
            'account_card_number' => ['max:255'],
        ]);

        BankAccount::create($attributes);

        return redirect('/cards')->with([
            'message' => 'حساب بانکی با موفقیت افزوده شد',
            'status' => 'success'
        ]);
    }
}
