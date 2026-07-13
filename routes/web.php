<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/personal', function () {
    return view('personal');
})->middleware(['auth', 'verified'])->name('personal');

Route::get('/reportes', function () {
    return view('reportes');
})->middleware(['auth', 'verified'])->name('reportes');

Route::get('/salas', function () {
    return view('salas');
})->middleware(['auth', 'verified'])->name('salas.index');

Route::get('/salas/areas', function () {
    return view('salas.areas');
})->middleware(['auth', 'verified'])->name('salas.areas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
