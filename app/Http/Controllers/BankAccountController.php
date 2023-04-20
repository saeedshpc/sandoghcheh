<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BankAccountController extends Controller
{
    public function index(): View
    {
        return view('bankAccounts.index',[
            'bankAccounts' => BankAccount::latest()->get(),
        ]);
    }

    public function create(): View
    {
        return view('bankAccounts.create');
    }

    public function store(): RedirectResponse
    {
        BankAccount::create($this->validateBankAccount());

        return redirect('/cards')->with([
            'message' => 'حساب بانکی با موفقیت افزوده شد'
        ]);
    }

    public function edit(BankAccount $card): View
    {
        return view('bankAccounts.edit',[
            'bankAccount' => $card
        ]);
    }

    public function update(BankAccount $card): RedirectResponse
    {
        $card->update($this->validateBankAccount());

        return redirect('/cards')->with([
            'message' => 'حساب بانکی با موفقیت بروزرسانی شد'
        ]);
    }

    public function destroy(BankAccount $card): RedirectResponse
    {
        $card->delete();

        return redirect('/cards')->with([
            'message' => 'حساب بانکی حذف شد'
        ]);
    }

    protected function validateBankAccount(): array
    {
        return request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'usage' => ['min:3', 'max:255'],
            'bank_name' => ['required', 'min:3', 'max:255'],
            'owner' => ['required', 'min:3', 'max:255'],
            'number' => ['max:255'],
            'card_number' => ['max:255'],
        ]);
    }
}
