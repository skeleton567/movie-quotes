<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageController extends Controller
{
    //
    public function change(string $locale)
    {
        if (in_array($locale, config('app.available_locales'))) {
            session()->put('lang', $locale);
        } else {
            session()->put('lang', 'en');
        }
        return redirect()->back();
    }
}
