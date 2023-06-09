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

//Freelancer Expenses
Route::resource('freelancerExpenses', FreelancerExpenseController::class);

//Advertising Expenses
Route::resource('advertisingExpenses', AdvertisingExpenseController::class);

//Setting
//These Routes are just placeholders for the complete version of the setting page and will be changed later
Route::controller(SettingController::class)->group(function () {
    Route::get('settings', 'index');
    Route::patch('settings', 'update');
});

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

//Activities
Route::get('activities', [ActivityController::class, 'index']);

//Users
Route::resource('users', UserController::class);

Route::get('deleteImage/{model}/{recordId}/{hash}', \App\Http\Controllers\ImageDeletionController::class)->name('delete-image');
