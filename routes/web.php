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
Route::post('cards', [BankAccountController::class, 'store']);
Route::get('/cards/{bankAccount}', [BankAccountController::class, 'edit']);
Route::patch('/cards/{bankAccount}', [BankAccountController::class, 'update']);
