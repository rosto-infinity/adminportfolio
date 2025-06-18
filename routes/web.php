<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\DashboardController;


Route::get('/', [HomeController::class, 'index'])->name('home-page');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');

Route::get('/admin/abouts', [AboutController::class, 'edit'])->name('edit-about');
Route::patch('/admin/abouts', [AboutController::class,'update'])->name('update-about');

Route::get('/admin/medias', [MediaController::class,'index'])->name('index-media');
Route::post('/admin/medias', [MediaController::class,'store'])->name("store-medias");
Route::delete('/admin/medias/{id}', [MediaController::class,'destroy'])->name("destroy-medias");





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/{any}', function () {
    return view('not-found-page');
})->where('any', '.*')->name('not-found-page');