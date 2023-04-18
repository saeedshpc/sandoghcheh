<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    public function store()
    {
        $attributes = request()->validate([
            'firstName' => ['required', 'min:3', 'max:255'],
            'lastName' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'company_id' => ['required', Rule::exists('companies', 'id')],
            'position' => ['required', 'min:3', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'password' => ['required', 'min:8', 'max:255'],
            'access_level' => ['required'],
            'profile_image' => ['image'],
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        if(request('profile_image')) {
            $attributes['profile_image'] = request()->file('profile_image')->store('profile_images');
        }

        User::create($attributes);

        return redirect('/users')->with('message', 'کاربر جدید اضافه شد');
    }

    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user,
            'companies' => Company::all(),
        ]);
    }


}
