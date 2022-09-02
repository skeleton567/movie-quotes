<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware(['language'])->group(function () {
    Route::get('/', [QuoteController::class, 'index'])->name('home');
    Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movie');

    Route::middleware(['auth'])->group(function () {
        Route::post('/logout', [SessionsController::class, 'logout'])->name('session.destroy');

        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

        Route::controller(MovieController::class)->group(function () {
            Route::get('/dashboard/movies', 'index')->name('dashboard.movies');
            Route::get('/dashboard/movies/create', 'create')->name('movies.create');
            Route::post('/dashboard/movies', 'store')->name('movies.store');
            Route::delete('/dashboard/movies/{movie}', 'destroy')->name('movies.destroy');
            Route::get('/dashboard/movies/{movie}/edit', 'edit')->name('movies.edit');
            Route::patch('/dashboard/movies/{movie}', 'update')->name('movies.update');
        });

        Route::controller(QuoteController::class)->group(function () {
            Route::get('/dashboard/quotes/create', 'create')->name('quotes.create');
            Route::post('/dashboard/quotes', 'store')->name('quotes.store');
            Route::get('/dashboard/quotes', 'allQuotes')->name('dashboard.quotes');
            Route::delete('/dashboard/quotes/{quote}', 'destroy')->name('quotes.destroy');
            Route::get('/dashboard/quotes/{quote}/edit', 'edit')->name('quotes.edit');
            Route::patch('/dashboard/quotes/{quote}', 'update')->name('quotes.update');
        });
    });

    Route::middleware(['guest'])->group(function () {
        Route::get('/login', [SessionsController::class, 'create'])->name('session.create');
        Route::post('/login', [SessionsController::class, 'login'])->name('session.store');
    });
});

Route::get('locale/{locale}', [LanguageController::class, 'change'])->name('language.change');
