<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::all(),
            'companies' => Company::all()
        ]);
    }

    public function create()
    {
        return view('users.create', [
            'companies' => Company::all(),
        ]);
    }
}
