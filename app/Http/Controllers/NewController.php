<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
}
