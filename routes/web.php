<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebsiteController::class, 'Home'])->name('home');
Route::get('/about-us', [WebsiteController::class, 'AboutUS'])->name('about');
Route::get('/services', [WebsiteController::class, 'Services'])->name('services');
Route::get('/news-events', [WebsiteController::class, 'NewsAndEvents'])->name('news');
Route::get('/career', [WebsiteController::class, 'Career'])->name('career');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');









Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
