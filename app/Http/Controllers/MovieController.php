<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //

    public function index()
    {
        return view('index', [
            'movie' => Movie::all()->isEmpty() ? null : Movie::all()->random(1),
        ]);
    }

    public function show(Movie $movie)
    {
        return view('show', [
            'movie' => $movie,
        ]);
    }
}
