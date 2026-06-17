<?php

use App\Http\Controllers\PantryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PantryController::class, 'index'])
->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pantry', [PantryController::class, 'create'])
    ->middleware(['auth', 'verified'])->name('pantry');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
