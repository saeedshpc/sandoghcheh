<?php

namespace App\Http\Controllers;

use App\Enums\EventsInfo;
use App\Models\Activity;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function index(): View
    {
        return view('companies.index', [
           'companies' => Company::latest()->get(),
        ]);
    }

    public function show(Company $company)
    {
        return view('companies.show', [
            'company' => $company
        ]);
    }

    public function create(): View
    {
        return view('companies.create');
    }

    public function store(): RedirectResponse
    {
        Company::create($this->validateCompany());

        //I should replace this with event
        Activity::add(
            request()->user()->id,
            EventsInfo::AddCompany->value
        );

        return redirect('/companies')->with([
            'message' => 'کسب و کار با موفقیت افزوده شد'
        ]);
    }

    public function edit(Company $company): View
    {
        return view('companies.edit', [
            'company' => $company
        ]);
    }

    public function update(Company $company): RedirectResponse
    {
        $company->update($this->validateCompany());

        //I should replace this with event
        Activity::edit(
            request()->user()->id,
            EventsInfo::EditCompany->value
        );

        return redirect('/companies')->with([
            'message' => 'کسب و کار بروزرسانی شد'
        ]);
    }

    public function destroy(Company $company): RedirectResponse
    {
        $company->delete();

        //I should replace this with event
        Activity::remove(
            request()->user()->id,
            EventsInfo::DeleteCompany->value
        );

        return redirect('/companies')->with([
            'message' => 'کسب و کار حذف شد'
        ]);
    }

    protected function validateCompany(): array
    {
        return request()->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'work_area' => ['required', 'min:3', 'max:255']
        ]);
    }
}
