<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/product-detail', function () {
    return view('product-detail');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contact', function () {
    return view('contact');
});