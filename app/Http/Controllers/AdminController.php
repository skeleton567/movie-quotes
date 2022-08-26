<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }

    public function showMovies()
    {
        return view('admin.show-movies', [
            'movies' => Movie::simplePaginate(10)
        ]);
    }
    public function showQuotes()
    {
        return view('admin.show-quotes', [
            'movies' => Movie::all(),
            'quotes' => Quote::simplePaginate(10)
        ]);
    }
}
