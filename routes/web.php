<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\DashboardController;


Route::get('/', [HomeController::class, 'index'])->name('home-page');
Route::middleware(['auth',"admin"])->group(function (){

    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
    
    Route::get('/admin/abouts', [AboutController::class, 'edit'])->name('edit-about');
    Route::patch('/admin/abouts', [AboutController::class,'update'])->name('update-about');
    
    Route::get('/admin/medias', [MediaController::class,'index'])->name('index-media');
    Route::post('/admin/medias', [MediaController::class,'store'])->name("store-medias");
    Route::delete('/admin/medias/{id}', [MediaController::class,'destroy'])->name("destroy-medias");

  // Routes pour les services (CRUD complet)
Route::prefix('/admin/services')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index-service');
    Route::post('/', [ServiceController::class, 'store'])->name('store-service');
    Route::get('/service/{service}/edit', [ServiceController::class, 'edit'])->name('edit-service');
    Route::patch('/service/{service}/update', [ServiceController::class, 'update'])->name('update-service');
    Route::delete('/{id}', [ServiceController::class, 'destroy'])->name('destroy-service');
});

// Routes pour les services (CRUD complet)
Route::prefix('/admin/skills')->group(function () {
    Route::get('/', [SkillController::class, 'index'])->name('index-skill');
    Route::post('/', [SkillController::class, 'store'])->name('store-skill');
    Route::get('/skill/{skill}/edit', [SkillController::class, 'edit'])->name('edit-skill');
    Route::patch('/skill/{skill}/update', [SkillController::class, 'update'])->name('update-skill');
    Route::delete('/{id}', [SkillController::class, 'destroy'])->name('destroy-skill');
});

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

Route::get('/{any}', function () {
    return view('not-found-page');
})->where('any', '.*')->name('not-found-page');