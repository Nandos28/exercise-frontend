<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return redirect()->route('product');
})->name('home');

Route::get('product',[App\Http\Controllers\ProductController::class,'produk'])->name('product');

Route::get('customer', [App\Http\Controllers\CustomerController::class,'cust'])->name('customer');

Route::get('supplier', [App\Http\Controllers\SupplierController::class,'supp'])->name('supplier');
