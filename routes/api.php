<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Passport;


Route::middleware('auth:api')->group(function () {
    Route::apiResource('products', ProductController::class);
});
