<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\ProductApiController;


Route::post('register', [ApiController::class, 'register']);
Route::post('login', [ApiController::class, 'login']);

Route::get('products', [ProductApiController::class, 'index']);
Route::get('products', [ProductApiController::class, 'store']);

Route::group(['middleware' => 'auth:sanctum',], function () {

    Route::get('profile', [ApiController::class, 'profile']);
    Route::get('logout', [ApiController::class, 'logout']);
});
