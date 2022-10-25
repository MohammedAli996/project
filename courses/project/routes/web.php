<?php

use App\Http\Controllers\frontend\frontendcontroller;
use Illuminate\Support\Facades\Route;

route::get('/', [frontendcontroller::class, 'index'])->name('frontend.index');
route::get('/cart', [frontendcontroller::class, 'cart'])->name('frontend.cart');
route::get('/checkout', [frontendcontroller::class, 'checkout'])->name('frontend.checkout');
route::get('/detail', [frontendcontroller::class, 'detail'])->name('frontend.detail');
route::get('/shop', [frontendcontroller::class, 'shop'])->name('frontend.shop');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');