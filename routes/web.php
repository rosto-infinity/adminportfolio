<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home-page');
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');

Route::get('/admin/abouts', [AboutController::class, 'edit'])->name('edit-adout');

Route::get('/{any}', function () {
    return view('not-found-page');
})->where('any', '.*')->name('not-found-page');
