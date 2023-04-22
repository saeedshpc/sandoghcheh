<?php

namespace App\Http\Controllers;

use App\Enums\EventsInfo;
use App\Models\Activity;
use App\Models\Company;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): View
    {
        return view('users.index', [
            'users' => User::all(),
            'companies' => Company::all()
        ]);
    }

    public function create(): View
    {
        return view('users.create', [
            'companies' => Company::all(),
        ]);
    }

    public function store(): RedirectResponse
    {

        $attributes = $this->validateUser();

        $attributes['password'] = bcrypt($attributes['password']);

        if(request('profile_image') ?? false) {
            $attributes['profile_image'] = request()->file('profile_image')->store('profile_images');
        }

        User::create($attributes);

        //I should replace this with event
        Activity::add(
            request()->user()->id,
            EventsInfo::AddUser->value
        );

        return redirect('/users')->with('message', 'کاربر جدید اضافه شد');
    }

    public function edit(User $user): View
    {
        return view('users.edit', [
            'user' => $user,
            'companies' => Company::all(),
        ]);
    }

    public function update(User $user): RedirectResponse
    {

        $attributes = $this->validateUser($user);

        if(request('password')) {
            $attributes['password'] = bcrypt($attributes['password']);
        } else {
            $attributes['password'] = $user->password;
        }
        if(request('profile_image') ?? false) {
            if($user->profile_image) {
                Storage::delete($user->profile_image);
            }
            $attributes['profile_image'] = request()->file('profile_image')->store('profile_images');
        }


        $user->update($attributes);

        //I should replace this with event
        Activity::edit(
            request()->user()->id,
            EventsInfo::EditUser->value
        );

        return redirect('/users')->with('message', 'اطلاعات کاربر ویرایش شد.');
    }

    public function destroy(User $user): RedirectResponse
    {

        if ($user->profile_image) {
            Storage::delete($user->profile_image);
        }

        $user->delete();

        //I should replace this with event
        Activity::remove(
            request()->user()->id,
            EventsInfo::DeleteUser->value
        );

        return redirect('/users')->with('message', 'اطلاعات کاربر حذف شد');
    }

    public function validateUser(?User $user = null): array
    {
        $user ??= new User();

        return request()->validate([
            'firstName' => ['required', 'min:3', 'max:255'],
            'lastName' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user)],
            'company_id' => ['required', Rule::exists('companies', 'id')],
            'position' => ['required', 'min:3', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')->ignore($user)],
            'password' => $user->exists ? ['nullable','min:8', 'max:255'] : ['required', 'min:8', 'max:255'],
            'access_level' => ['required'],
            'profile_image' => ['image'],
        ]);
    }

    public function deleteImage(User $user, $hash): RedirectResponse
    {
        // check if it is a valid request that has been sent from edit page
        if($hash !== session('imageDeleteHash')) {
            return redirect('/users');
        }

        Storage::delete($user->profile_image);

        $user->update([
            'profile_image' => null
        ]);

        return back()->with([
            'message' => 'تضویر پروفایل حذف شد'
        ]);
    }

}
