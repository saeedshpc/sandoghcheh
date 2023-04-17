<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Revenue;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    public function index()
    {
        return view('revenues.index', [
            'revenues' => Revenue::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('revenues.create',[
            'companies' => Company::all()
        ]);
    }

    public function store()
    {
        dd(request()->all());
    }

}
