<?php

use App\Http\Controllers\BankAccountController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\FreelancerExpenseController;
use App\Models\BankAccount;
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
    return view('expenses/index',[
        'expenses' => Expense::latest()->get(),
    ]);
});

//expenses
Route::resource('expenses', ExpenseController::class)->except('show');
Route::get('expenses/{expense}/image/{hash}',[ExpenseController::class, 'deleteImage']);

//cards
Route::resource('cards', BankAccountController::class)->except('show');

//companies
Route::resource('companies', CompanyController::class)->except('show');

//Freelancer Expenses
Route::resource('freelancerExpenses', FreelancerExpenseController::class)->except('show');
Route::get('freelancerExpenses/{expense}/image/{hash}',[FreelancerExpenseController::class, 'deleteImage']);

//Freelancers
Route::resource('freelancers', FreelancerController::class)->except('show');

