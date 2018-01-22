<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    public function index()
    {
        return view('settings.account.index');
    }
}
