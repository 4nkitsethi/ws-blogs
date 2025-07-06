<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Product\Controllers\ProductController;

Route::prefix('products')->middleware('api')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::post('/', [ProductController::class, 'store']);
});
