<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

class TokensController extends Controller
{
    public function index()
    {
        return view('settings.tokens.index');
    }
}
