<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    //
    public function allQuotes()
    {
        return view('dashboard.show-quotes', [
            'movies' => Movie::all(),
            'quotes' => Quote::simplePaginate(10)
        ]);
    }
}
