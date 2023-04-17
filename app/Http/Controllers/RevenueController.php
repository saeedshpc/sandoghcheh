<?php

namespace App\Http\Controllers;

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
}
