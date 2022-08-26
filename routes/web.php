<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movie');


Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [SessionsController::class, 'destroy'])->name('session.destroy');
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard', 'index')->name('dashboard');
        Route::get('/admin/movies', 'showMovies')->name('admin.movies');
        Route::get('/admin/quotes', 'showQuotes')->name('admin.quotes');
    });
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [SessionsController::class, 'create'])->name('session.create');
    Route::post('/login', [SessionsController::class, 'store'])->name('session.store');
});
