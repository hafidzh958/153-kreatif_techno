<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Website (Company Profile) Routes
|--------------------------------------------------------------------------
*/

Route::get('/', fn () => view('user.intro'));
Route::get('/home', fn () => view('user.home'))->name('home');
Route::get('/about', fn () => view('user.about'))->name('about');
Route::get('/services', fn () => view('user.services'))->name('services');
Route::get('/portfolio', fn () => view('user.portfolio'))->name('portfolio');
Route::get('/contact', fn () => view('user.contact'))->name('contact');

// Submit form contact (nanti bisa diarahkan ke ContactController@store)
Route::post('/contact', function () {
    // TODO: Simpan ke database, kirim email, dll.
    return redirect()->route('contact')->with('success', 'Pesan berhasil dikirim.');
})->name('contact.store');

/*
|--------------------------------------------------------------------------
| Admin Dashboard Routes
|--------------------------------------------------------------------------
| Prefix: /admin. Nanti tambahkan middleware auth dan prefix group.
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', fn () => view('admin.dashboard'))->name('dashboard');

    // Services - CRUD (nanti gunakan ServiceController)
    Route::get('/services', fn () => view('admin.services.index'))->name('services.index');
    Route::get('/services/create', fn () => view('admin.services.create'))->name('services.create');
    Route::get('/services/{service}/edit', fn ($service) => view('admin.services.edit', ['service' => (object) ['title' => '', 'description' => '']]))->name('services.edit');
    Route::post('/services', function () { return redirect()->route('admin.services.index')->with('success', 'Service berhasil ditambah.'); })->name('services.store');
    Route::put('/services/{service}', function () { return redirect()->route('admin.services.index')->with('success', 'Service berhasil diupdate.'); })->name('services.update');

    // Portfolio - CRUD (nanti gunakan PortfolioController)
    Route::get('/portfolio', fn () => view('admin.portfolio.index'))->name('portfolio.index');
    Route::get('/portfolio/create', fn () => view('admin.portfolio.create'))->name('portfolio.create');
    Route::get('/portfolio/{portfolio}/edit', fn ($portfolio) => view('admin.portfolio.edit', ['portfolio' => (object) ['title' => '', 'category' => '', 'description' => '']]))->name('portfolio.edit');
    Route::post('/portfolio', function () { return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio berhasil ditambah.'); })->name('portfolio.store');
    Route::put('/portfolio/{portfolio}', function () { return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio berhasil diupdate.'); })->name('portfolio.update');

    // Contact - list pesan (nanti gunakan ContactController)
    Route::get('/contact', fn () => view('admin.contact.index'))->name('contact.index');
});
