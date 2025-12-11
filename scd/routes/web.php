<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\JerseyController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('home');
})->name('home');

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
Route::get('/thankyou', function () {
    return view('thankyou');
});


// Frontend product listing & detail
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product-detail');

// Admin CRUD (simple, no auth guard here; in real app wrap with middleware('auth','isAdmin') )
Route::prefix('admin')->group(function () {

});



// Product routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');
Route::get('/products/search-single', [ProductController::class, 'searchSingle'])->name('products.search-single');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('product-detail');


Route::get('/jerseys', [JerseyController::class, 'index'])->name('jerseys.index');



// Admin Dashboard Route


// Admin Authentication Routes
Route::prefix('admin')->group(function () {
    // Login Routes
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    
    // Protected Admin Routes
    Route::middleware(['admin'])->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        

            Route::get('/products', [ProductController::class, 'adminIndex'])->name('admin.products.index');
            Route::get('/products/create', [ProductController::class, 'create'])->name('admin.products.create');
            Route::post('/products', [ProductController::class, 'store'])->name('admin.products.store');
            Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
            Route::put('/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
            Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

        Route::get('/admin/jerseys', [JerseyController::class, 'admin'])->name('jerseys.admin');
        Route::get('/jerseys/{jersey}', [JerseyController::class, 'show'])->name('jerseys.show');
        Route::post('/jerseys', [JerseyController::class, 'store'])->name('jerseys.store');
        Route::put('/jerseys/{jersey}', [JerseyController::class, 'update'])->name('jerseys.update');
        Route::delete('/jerseys/{jersey}', [JerseyController::class, 'destroy'])->name('jerseys.destroy');
        Route::get('/jerseys/search', [JerseyController::class, 'search'])->name('jerseys.search');
    });
});