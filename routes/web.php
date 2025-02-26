<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

Route::get('/', [CartController::class, 'index'])->name('products.index');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::get('/remove-from-cart/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
Route::post('/checkout', [CartController::class, 'processCheckout'])->name('cart.processCheckout');