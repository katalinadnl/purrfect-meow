<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;

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


Route::get('/cats/create', [CatController::class, 'create'])->name('cats.create');
Route::post('/cats', [CatController::class, 'store'])->name('cats.store');
Route::get('/cats', [CatController::class, 'index'])->name('cats.index');
Route::get('/cats/{id}', [CatController::class, 'information'])->name('cats.information');


require __DIR__.'/auth.php';
