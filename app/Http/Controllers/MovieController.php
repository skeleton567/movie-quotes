<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function show(Movie $movie): View
    {
        return view('show', [
            'movie' => $movie,
        ]);
    }

    public function index(): View
    {
        return view('dashboard.show-movies', [
            'movies' => Movie::simplePaginate(5)
        ]);
    }

    public function create(): View
    {
        return view('movies.create');
    }

    public function store(StoreMovieRequest $request): RedirectResponse
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

    public function destroy(Movie $movie): RedirectResponse
    {
        $movie->delete();

        return back();
    }
    public function edit(Movie $movie): View
    {
        return view('movies.edit', [
            'movie' => $movie,
        ]);
    }

    public function update(UpdateMovieRequest $request, Movie $movie): RedirectResponse
    {
        $movie->replaceTranslations('name', [
            'en' => $request->name_en,
            'ka' => $request->name_ka,
        ]);
        $movie->save();

        return redirect(route('dashboard.movies'));
    }
}
