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


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/logout', [UserController::class, 'logout'])->name('admin.logout');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/hello', [UserController::class, 'try'])->name('user.index');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', UserController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', ProductController::class);
});

require __DIR__.'/auth.php';
