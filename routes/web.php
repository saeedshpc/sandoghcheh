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


Route::resource('expenses', ExpenseController::class)->except('show');
Route::get('expenses/{expense}/image/{hash}',[ExpenseController::class, 'deleteImage']);

Route::resource('cards', BankAccountController::class)->except('show');
Route::resource('companies', CompanyController::class)->except('show');

Route::controller(FreelancerExpenseController::class)->group(function(){
    Route::get('freelancerExpenses', 'index');
    Route::get('freelancerExpenses/create', 'create');
    Route::post('freelancerExpenses', 'store');
    Route::get('/freelancerExpenses/{expense}/edit', 'edit');
    Route::patch('/freelancerExpenses/{expense}', 'update');
});
Route::get('freelancerExpenses/{expense}/image/{hash}',[FreelancerExpenseController::class, 'deleteImage']);

Route::resource('freelancers', FreelancerController::class)->except('show');

