<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;
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
    return view('welcome');
});

Route::group(['prefix' => 'customers'], function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/create', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::post('/{id}/edit', [CustomerController::class, 'update'])->name('customers.update');
    Route::get('/{id}/deposit', [DepositController::class, 'view_deposit'])->name('deposits.view_deposit');
    Route::post('/{id}/deposit', [DepositController::class, 'deposit'])->name('deposits.deposit');
});