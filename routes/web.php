<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::resources('/category', [CategoryController::class, 'edit'])->name('category.edit');
    Route::resources('/category', [CategoryController::class, 'update'])->name('category.update');
    Route::resources('/category', [CategoryController::class, 'show'])->name('category.show');





    Route::get('/articel', [ArticelController::class, 'index'])->name('articel.index');
    Route::ressources('/articel/{edit}', [ArticelController::class, 'edit'])->name('articel.edit');
    Route::resources('/articel', [ArticelController::class, 'show'])->name('articel.show');

});

require __DIR__.'/auth.php';
