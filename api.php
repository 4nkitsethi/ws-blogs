<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Product\Controllers\BlogController;

Route::prefix('blogs')->middleware('api')->group(function () {
    Route::get('/', [BlogController::class, 'index']);
    Route::post('/', [BlogController::class, 'store']);
});
