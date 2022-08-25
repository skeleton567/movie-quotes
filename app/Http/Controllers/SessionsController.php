<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSessionsRequest;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    //
    public function create()
    {
        return view('session.create');
    }

    public function store(StoreSessionsRequest $request)
    {
        if (!auth()->attempt($request->validated())) {
            throw ValidationException::withMessages([
                'email' => 'Email or password is not correct'
                ]);
        }

        session()->regenerate();
        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}
