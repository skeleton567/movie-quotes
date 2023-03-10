<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSessionsRequest;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    //
    public function create(): View
    {
        return view('session.create');
    }

    public function login(StoreSessionsRequest $request): RedirectResponse
    {
        if (!auth()->attempt($request->validated())) {
            throw ValidationException::withMessages([
                'email' => __('text.email_incorect')
                ]);
        }

        session()->regenerate();
        return redirect('/');
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();
        return redirect('/');
    }
}
