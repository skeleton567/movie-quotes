<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function show(Movie $movie)
    {
        return view('show', [
            'movie' => $movie,
        ]);
    }

    public function index()
    {
        return view('dashboard.show-movies', [
            'movies' => Movie::simplePaginate(10)
        ]);
    }

    public function create()
    {
        return view('movies.create');
    }

    public function store(StoreMovieRequest $request)
    {
        $movie = Movie::create([
            'user_id' => $request->validated()['user_id'],
        ]);

        $movie->setTranslations('name', [
            'en' => $request->name_en,
            'ka' => $request->name_ka,
        ]);
        $movie->save();

        return redirect(route('dashboard.movies'));
    }
}
