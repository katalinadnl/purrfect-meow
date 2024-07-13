<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('contact')->name('contact.')->group(function () { 
    Route::get('/', [ContactController::class, 'contact'])->name('contact'); 
    Route::post('/', [ContactController::class, 'store'])->name('store');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/create-cat', [AdminController::class, 'createCat'])->name('cats.create');
    Route::post('/admin/create-cat', [AdminController::class, 'storeCat'])->name('cats.store');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('admin.users.edit');
    Route::patch('/users/{user}', [UserController::class, 'update'])->name('admin.users.update');
});
Route::get('/cats', [CatController::class, 'index'])->name('cats.index');
Route::get('/cats/{id}', [CatController::class, 'information'])->name('cats.information');


require __DIR__.'/auth.php';
