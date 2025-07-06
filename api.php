<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Blog\Controllers\BlogController;

Route::prefix('blog')->middleware('api')->group(function () {
    Route::get('/list', [BlogController::class, 'index']);
    Route::post('/store', [BlogController::class, 'store']);
});
