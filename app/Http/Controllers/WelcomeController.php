<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;


class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view('welcome');
    }
}

