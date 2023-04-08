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
}
