<?php

namespace App\Http\Controllers;

use App\Enums\EventsInfo;
use App\Models\Activity;
use App\Models\BankAccount;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BankAccountController extends Controller
{
    public function index(): View
    {
        return view('bankAccounts.index',[
            'bankAccounts' => BankAccount::latest()->get(),
        ]);
    }

    public function show(BankAccount $card): View
    {
        return view('bankAccounts.show', [
            'bankAccount' => $card
        ]);
    }

    public function create(): View
    {
        return view('bankAccounts.create');
    }

    public function store(): RedirectResponse
    {
        BankAccount::create($this->validateBankAccount());

        //I should replace this with event
        Activity::add(
            request()->user()->id,
            EventsInfo::AddBankAccount->value
        );

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

        //I should replace this with event
        Activity::edit(
            request()->user()->id,
            EventsInfo::EditBankAccount->value
        );

        return redirect('/cards')->with([
            'message' => 'حساب بانکی با موفقیت بروزرسانی شد'
        ]);
    }

    public function destroy(BankAccount $card): RedirectResponse
    {
        $card->delete();

        //I should replace this with event
        Activity::remove(
            request()->user()->id,
            EventsInfo::DeleteBankAccount->value
        );

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
