<?php

use App\Http\Controllers\BankAccountController;
use App\Models\BankAccount;
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
    return view('tankhah');
});

//Bank Account
Route::get('cards', [BankAccountController::class, 'index']);
Route::get('cards/create', [BankAccountController::class, 'create']);
Route::Post('cards', [BankAccountController::class, 'store']);
