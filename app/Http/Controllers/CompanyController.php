<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return view('companies.index', [
           'companies' => Company::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store()
    {
        Company::create($this->validateCompany());

        return redirect('/companies')->with([
            'message' => 'کسب و کار با موفقیت افزوده شد'
        ]);
    }

    public function edit(Company $company)
    {
        return view('companies.edit', [
            'company' => $company
        ]);
    }

    public function update(Company $company)
    {
        $company->update($this->validateCompany());

        return redirect('/companies')->with([
            'message' => 'کسب و کار بروزرسانی شد'
        ]);
    }

    public function destroy(Company $company)
    {
        $company->delete();

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
