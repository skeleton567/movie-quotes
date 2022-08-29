<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuoteRequest;
use App\Http\Requests\StoreSessionsRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    //

    public function index()
    {
        return view('index', [
            'quote' => Quote::all()->isEmpty() ? null : Quote::all()->random(1),
        ]);
    }

    public function allQuotes()
    {
        return view('dashboard.show-quotes', [
            'movies' => Movie::all(),
            'quotes' => Quote::simplePaginate(5)
        ]);
    }

    public function create()
    {
        return view('quotes.create', [
            'movies' => Movie::all()
        ]);
    }

    public function store(StoreQuoteRequest $request)
    {
        $quote = Quote::create([
            'user_id' => $request->validated()['user_id'],
            'image' => request()->file('image')->store('images'),
            'movie_id' => $request->validated()['movie_id'],
        ]);

        $quote->setTranslations('name', [
            'en' => $request->name_en,
            'ka' => $request->name_ka,
        ]);
        $quote->save();

        return redirect(route('dashboard.quotes'));
    }

    public function destroy(Quote $quote)
    {
        $quote->delete();

        return back();
    }

    public function edit(Quote $quote)
    {
        return view('quotes.edit', [
            'quote' => $quote,
            'movies' => Movie::all()
        ]);
    }

    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        $attributes = $request->validated();

        if ($request['image']) {
            $attributes['image'] = request()->file('image')->store('images');
        }

        $quote->replaceTranslations('name', [
            'en' => $request->name_en,
            'ka' => $request->name_ka,
        ]);
        $quote->update($attributes);

        return redirect(route('dashboard.quotes'));
    }
}
