<?php

namespace App\Http\Controllers;

use App\Models\BankAccount;
use App\Models\Freelancer;
use App\Models\FreelancerExpense;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $atributes = request()->validate([
            'bank_account_id' => ['required'],
            'freelancer_id' => ['required'],
            'title' => ['required'],
            'price' => ['required'],
            'description' => [],
            'payment_status' => ['required'],
            'purchased_date' => ['date'],
            'invoice_image' => ['image'],
        ]);

        if(request('invoice_image') ?? false) {
            $atributes['invoice_image'] = request()->file('invoice_image')->store('freelancer_invoices');
        }

        FreelancerExpense::create($atributes);

        return redirect('freelancerExpenses')->with([
            'message' => 'هزینه فریلسنر با موفقیت افزوده شد'
        ]);
    }

    public function edit(FreelancerExpense $expense)
    {
        return view('freelancerExpenses.edit', [
            'expense' => $expense,
            'freelancers' => Freelancer::all(),
            'bankAccounts' => BankAccount::all()
        ]);
    }

    public function update(FreelancerExpense $expense)
    {
        $atributes = request()->validate([
            'bank_account_id' => ['required'],
            'freelancer_id' => ['required'],
            'title' => ['required'],
            'price' => ['required'],
            'description' => [],
            'payment_status' => ['required'],
            'purchased_date' => ['date'],
            'invoice_image' => ['image'],
        ]);

        if(request('invoice_image') ?? false) {
            if($expense->invoice_image) {
                Storage::delete($expense->invoice_image);
            }
            $atributes['invoice_image'] = request()->file('invoice_image')->store('freelancer_invoices');
        }

        $expense->update($atributes);

        return redirect('/freelancerExpenses')->with([
            'message' => 'هزینه سفارش با موفقیت بروزرسانی شد'
        ]);

    }

    public function destroy(FreelancerExpense $expense) {
        $expense->delete();

        return redirect('/freelancerExpenses')->with([
            'message' => 'فاکتور فریلنسر حذف شد.'
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
