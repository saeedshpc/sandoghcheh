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
        $attributes = request()->validate([
            'company_name' => ['required', 'min:3', 'max:255'],
            'company_work_area' => ['required', 'min:3', 'max:255']
        ]);

        Company::create($attributes);

        return redirect('/companies')->with([
            'message' => 'کسب و کار با موفقیت افزوده شد'
        ]);
    }
}
