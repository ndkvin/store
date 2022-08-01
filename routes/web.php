<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardProductsController;
use App\Http\Controllers\DashboardTransactionsController;
use App\Http\Controllers\DashboardSettingsController;
use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\DashboardUserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/detail/{id}', [DetailController::class, 'index'])->name('detail');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/success', [CartController::class, 'success'])->name('success');
Route::get('/register/success', [RegisterController::class, 'success'])->name('register-success');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/products', [DashboardProductsController::class, 'index'])->name('dashboard-product');
Route::get('/dashboard/products/create', [DashboardProductsController::class, 'create'])->name('dashboard-product-create');
Route::get('/dashboard/products/detail/{id}', [DashboardProductsController::class, 'detail'])->name('dashboard-product-detail');
Route::get('/dashboard/transactions', [DashboardTransactionsController::class, 'index'])->name('dashboard-product');
Route::get('/dashboard/transactions/detail/{id}', [DashboardTransactionsController::class, 'detail'])->name('dashboard-detail-product');
Route::get('/dashboard/settings', [DashboardSettingsController::class, 'store'])->name('dashboard-settings');
Route::get('/dashboard/account', [DashboardSettingsController::class, 'account'])->name('dashboard-account');

// ->middleware(['auth', 'admin'])
Route::prefix('admin')
    ->namespace('App\Http\Controllers\Admin')
    ->group(function() {
      Route::get('/', [DashboardAdminController::class, 'index'])->name('admin-dashboard');
      Route::resource('category', CategoryAdminController::class);
      Route::resource('user', UserAdminController::class);
    });
Auth::routes();
