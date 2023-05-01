<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\AdvertisingExpenseController;
use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\FreelancerExpenseController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use App\Models\Expense;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    \Illuminate\Support\Facades\Auth::login(\App\Models\User::first());
    return redirect('/expenses');
});

//expenses
Route::resource('expenses', ExpenseController::class);
Route::get('expenses/{expense}/image/{hash}', [ExpenseController::class, 'deleteImage']);

//Freelancer Expenses
Route::resource('freelancerExpenses', FreelancerExpenseController::class);
Route::get('freelancerExpenses/{expense}/image/{hash}', [FreelancerExpenseController::class, 'deleteImage']);

//Advertising Expenses
Route::resource('advertisingExpenses', AdvertisingExpenseController::class);
Route::get('advertisingExpenses/{expense}/image/{hash}', [AdvertisingExpenseController::class, 'deleteImage']);

//companies
Route::resource('companies', CompanyController::class);

//cards
Route::resource('cards', BankAccountController::class);

//Freelancers
Route::resource('freelancers', FreelancerController::class);

//Revenues
Route::resource('revenues', RevenueController::class);

//Advertisers
Route::resource('advertisers', AdvertiserController::class);

//Setting
//These Routes are just placeholders for the complete version of the setting page and will be changed later
Route::controller(SettingController::class)->group(function () {
    Route::get('settings', 'index');
    Route::patch('settings', 'update');
});

//Users
Route::resource('users', UserController::class)->except('show');
Route::get('users/{user}/image/{hash}', [UserController::class, 'deleteImage']);

Route::get('activities', [ActivityController::class, 'index']);
