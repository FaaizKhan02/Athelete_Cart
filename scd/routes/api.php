<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\JerseyApiController;

/*
|--------------------------------------------------------------------------
| API Routes (JSON)
|--------------------------------------------------------------------------
*/

// ---------- PRODUCTS API ----------
Route::get('/products', [ProductApiController::class, 'index']);
Route::get('/products/{product}', [ProductApiController::class, 'show']);
Route::get('/products/search/{keyword}', [ProductApiController::class, 'search']);

Route::post('/products', [ProductApiController::class, 'store']);
Route::put('/products/{product}', [ProductApiController::class, 'update']);
Route::delete('/products/{product}', [ProductApiController::class, 'destroy']);


// ---------- JERSEYS API ----------
Route::get('/jerseys', [JerseyApiController::class, 'index']);
Route::get('/jerseys/{jersey}', [JerseyApiController::class, 'show']);
Route::get('/jerseys/search/{keyword}', [JerseyApiController::class, 'search']);

Route::post('/jerseys', [JerseyApiController::class, 'store']);
Route::put('/jerseys/{jersey}', [JerseyApiController::class, 'update']);
Route::delete('/jerseys/{jersey}', [JerseyApiController::class, 'destroy']);
