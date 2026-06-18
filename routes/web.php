<?php

use App\Http\Controllers\PantryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [PantryController::class, 'index'])
        ->name('dashboard');

    Route::get('/pantry/create', [PantryController::class, 'create'])
        ->name('pantry.create');

    Route::post('/pantry/create', [PantryController::class, 'store'])
        ->name('pantry.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
