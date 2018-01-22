<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        return view('settings.profile.index');
    }
}
