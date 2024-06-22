<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::group(['prefix' => 'admin'], function()
{
    Route::get('login',  [DashboardController::class, 'loginPage'])->name('loginPage');
    Route::post('login', [DashboardController::class, 'login'])->name('login');
    Route::get('logout', [DashboardController::class, 'logout'])->name('logout');

    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    // products
    Route::get('products', [ProductController::class, 'index'])->name('products');
    Route::post('storeProduct', [ProductController::class, 'store'])->name('store.product');
    Route::get('deleteProduct/{id}', [ProductController::class, 'delete'])->name('delete.product');


});
