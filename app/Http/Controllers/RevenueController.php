<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Revenue;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class RevenueController extends Controller
{
    public function index(): View
    {
        return view('revenues.index', [
            'revenues' => Revenue::latest()->get(),
        ]);
    }

    public function create(): View
    {
        return view('revenues.create',[
            'companies' => Company::all()
        ]);
    }

    public function store(): RedirectResponse
    {
        $attributes = $this->validateRevenue();

        Revenue::create($attributes);

        return redirect('/revenues')->with([
            'message' => 'درآمد جدید برای یک کسب و کار ثبت شد'
        ]);
    }

    public function edit(Revenue $revenue): View
    {
        return view('revenues.edit', [
            'revenue' => $revenue,
            'companies' => Company::all()
        ]);
    }

    public function update(Revenue $revenue): RedirectResponse
    {
        $attributes = $this->validateRevenue();

        $revenue->update($attributes);

        return redirect('/revenues')->with([
            'message' => 'درآمد کسب و کار بروزرسانی شد'
        ]);
    }

    public function destroy(Revenue $revenue): RedirectResponse
    {
        $revenue->delete();

        return redirect('/revenues')->with([
            'message' => 'درآمد کسب و کار حذف شد'
        ]);
    }

    public function validateRevenue(): array
    {
        return request()->validate([
            'company_id' => ['required', Rule::exists('companies', 'id')],
            'month_of_year' => ['required'],
            'total_sale' => ['required', 'integer'],
            'online_sale_share' => ['required', 'integer'],
            'offline_sale_share' => ['required', 'integer'],
            'description' => [],
        ]);
    }

}
