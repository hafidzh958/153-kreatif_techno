<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;

Route::get('/', fn () => view('user.intro'));
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::view('/about', 'user.about')->name('about');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('portfolio', AdminPortfolioController::class);
    Route::resource('services', AdminServiceController::class);

    // Halaman daftar pesan contact (sementara masih placeholder)
    Route::get('contact', [AdminContactController::class, 'index'])->name('contact.index');
});