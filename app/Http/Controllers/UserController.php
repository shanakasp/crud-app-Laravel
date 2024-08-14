<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $incomingFields = $request->validate(  [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6'
            ] );

        return 'Hello heloo';
    }
}
