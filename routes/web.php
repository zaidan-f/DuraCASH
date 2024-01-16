<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;




Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/{name}/view', [CustomerController::class, 'view'])->name('customer.view');
Route::get('/customer/{name}/edit', [CustomerController::class, 'edit'])->name('customer.edit');
Route::delete('/customer/{name}', [CustomerController::class, 'destroy'])->name('customer.destroy');