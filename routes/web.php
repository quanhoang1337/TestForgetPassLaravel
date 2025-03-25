<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SVController;
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

require __DIR__.'/auth.php';

Route::get('/test', function(){
    return view('test');
});

Route::get('download', function(){
    return view('download');
})->middleware('auth');

Route::get('/sv', [SVController::class, 'sv']);
Route::post('/sv', [SVController::class, 'sv_store'])->name('sv_store');

