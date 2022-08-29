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
        Route::post('/logout', [SessionsController::class, 'destroy'])->name('session.destroy');

        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

        Route::get('/dashboard/movies', [MovieController::class, 'index'])->name('dashboard.movies');
        Route::get('/dashboard/movies/create', [MovieController::class, 'create'])->name('movies.create');
        Route::post('/dashboard/movies', [MovieController::class, 'store'])->name('movies.store');

        Route::get('/dashboard/quotes/create', [QuoteController::class, 'create'])->name('quotes.create');
        Route::post('/dashboard/quotes', [QuoteController::class, 'store'])->name('quotes.store');
        Route::get('/dashboard/quotes', [QuoteController::class, 'allQuotes'])->name('dashboard.quotes');
    });

    Route::middleware(['guest'])->group(function () {
        Route::get('/login', [SessionsController::class, 'create'])->name('session.create');
        Route::post('/login', [SessionsController::class, 'store'])->name('session.store');
    });
});


Route::get('locale/{locale}', [LanguageController::class, 'change'])->name('language.change');
