<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use Illuminate\Http\Request;

class BankAccountController extends Controller
{
    public function index()
    {
        return view('bankAccounts.index',[
            'bankAccounts' => BankAccount::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('bankAccounts.create');
    }

    public function store()
    {
        BankAccount::create($this->validateBankAccount());

        return redirect('/cards')->with([
            'message' => 'حساب بانکی با موفقیت افزوده شد'
        ]);
    }

    public function edit(BankAccount $card)
    {
        return view('bankAccounts.edit',[
            'bankAccount' => $card
        ]);
    }

    public function update(BankAccount $card)
    {
        $card->update($this->validateBankAccount());

        return redirect('/cards')->with([
            'message' => 'حساب بانکی با موفقیت بروزرسانی شد'
        ]);
    }

    public function destroy(BankAccount $card)
    {
        $card->delete();

        return redirect('/cards')->with([
            'message' => 'حساب بانکی حذف شد'
        ]);
    }

    protected function validateBankAccount(): array
    {
        return request()->validate([
            'account_name' => ['required', 'min:3', 'max:255'],
            'account_usage' => ['min:3', 'max:255'],
            'account_bank_name' => ['required', 'min:3', 'max:255'],
            'account_owner' => ['required', 'min:3', 'max:255'],
            'account_number' => ['max:255'],
            'account_card_number' => ['max:255'],
        ]);
    }
}
