<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\StoreController;




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

Route::get('/items', [ItemsController::class, 'index'])->name('items.index');
Route::get('/items/{name}/view', [ItemsController::class, 'view'])->name('items.view');
Route::get('/items/{name}/edit', [ItemsController::class, 'edit'])->name('items.edit');
Route::delete('/items/{name}', [ItemsController::class, 'destroy'])->name('items.destroy');  

Route::get('/store', [StoreController::class, 'index'])->name('store.index');
Route::get('/store/{name}/view', [StoreController::class, 'view'])->name('store.view');
Route::get('/store/{name}/edit', [StoreController::class, 'edit'])->name('store.edit');
Route::delete('/store/{name}', [StoreController::class, 'destroy'])->name('store.destroy');  