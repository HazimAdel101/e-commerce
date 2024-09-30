<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified', 'role:admin'])->name('admin.dashboard');


Route::middleware(['auth', 'role:admin|user'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile', [ProductController::class, 'index'])->name('product.index');

});


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/hello', [UserController::class, 'try'])->name('user.index');
});

require __DIR__.'/auth.php';
