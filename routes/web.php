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


Auth::routes();

Route::get('/', \App\Http\Livewire\Home::class, 'home')->name('home');
Route::get('/products', \App\Http\Livewire\ProductIndex::class, 'product-index')->name('products');
Route::get('/products/tas/{productcategoryId}', \App\Http\Livewire\ProductTas::class, 'product-tas')->name('products.tas');
Route::get('/products/{id}', \App\Http\Livewire\ProductDetail::class, 'product-detail')->name('products.detail');
Route::get('/keranjang', \App\Http\Livewire\Keranjang::class, 'keranjang')->name('keranjang');
Route::get('/checkout', \App\Http\Livewire\Checkout::class, 'checkout')->name('checkout');
Route::get('/history', \App\Http\Livewire\History::class, 'history')->name('history');