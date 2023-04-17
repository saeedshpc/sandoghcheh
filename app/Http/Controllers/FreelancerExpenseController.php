<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\Freelancer;
use App\Models\FreelancerExpense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class FreelancerExpenseController extends Controller
{
    public function index()
    {
        return view('freelancerExpenses.index', [
            'freelancerExpenses' => FreelancerExpense::with('freelancer')->latest()->get(),
        ]);
    }

    public function create()
    {
        return view('freelancerExpenses.create',[
            'freelancers' => Freelancer::all(),
            'bankAccounts' => BankAccount::all(),
        ]);
    }

    public function store()
    {
        $attributes = $this->validateFreelancerExpense();

        if(request('invoice_image') ?? false) {
            $attributes['invoice_image'] = request()->file('invoice_image')->store('freelancer_invoices');
        }

        FreelancerExpense::create($attributes);

        return redirect('freelancerExpenses')->with([
            'message' => 'هزینه فریلسنر با موفقیت افزوده شد'
        ]);
    }

    public function edit(FreelancerExpense $freelancerExpense)
    {
        return view('freelancerExpenses.edit', [
            'expense' => $freelancerExpense,
            'freelancers' => Freelancer::all(),
            'bankAccounts' => BankAccount::all()
        ]);
    }

    public function update(FreelancerExpense $freelancerExpense)
    {
        $attributes = $this->validateFreelancerExpense();

        if(request('invoice_image') ?? false) {
            if($freelancerExpense->invoice_image) {
                Storage::delete($freelancerExpense->invoice_image);
            }
            $attributes['invoice_image'] = request()->file('invoice_image')->store('freelancer_invoices');
        }

        $freelancerExpense->update($attributes);

        return redirect('/freelancerExpenses')->with([
            'message' => 'هزینه سفارش با موفقیت بروزرسانی شد'
        ]);

    }

    public function destroy(FreelancerExpense $freelancerExpense) {
        $freelancerExpense->delete();

        return redirect('/freelancerExpenses')->with([
            'message' => 'فاکتور فریلنسر حذف شد.'
        ]);
    }

    protected function validateFreelancerExpense()
    {
        return request()->validate([
            'bank_account_id' => ['required', Rule::exists('bank_accounts', 'id')],
            'freelancer_id' => ['required', Rule::exists('freelancers','id')],
            'title' => ['required'],
            'price' => ['required','integer'],
            'description' => [],
            'payment_status' => ['required'],
            'purchased_date' => ['date'],
            'invoice_image' => ['image'],
        ]);
    }

    public function deleteImage(FreelancerExpense $expense, $hash)
    {
        // check if it is a valid request that has been sent from edit page
        if($hash !== session('imageDeleteHash')) {
            return redirect('/freelancerExpenses');
        }

        Storage::delete($expense->invoice_image);

        $expense->update([
            'invoice_image' => null
        ]);

        return back()->with([
            'message' => 'تصویر فاکتور از این هزینه حذف شد.'
        ]);
    }
}
