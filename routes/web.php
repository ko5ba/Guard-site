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
});

Route::get('/generate-password', [App\Http\Controllers\Site\GenerateControllerPassword::class, 'index'])->name('generate-password.index');
Route::post('/generate-password', [App\Http\Controllers\Site\GenerateControllerPassword::class, 'generate'])->name('generate-password.store');

Route::get('/generate-pin-code', [App\Http\Controllers\Site\GeneratePinCodeController::class, 'index'])->name('generate-pin-code.index');
Route::post('/generate-pin-code', [App\Http\Controllers\Site\GeneratePinCodeController::class, 'generate'])->name('generate-pin-code.store');
require __DIR__.'/auth.php';
