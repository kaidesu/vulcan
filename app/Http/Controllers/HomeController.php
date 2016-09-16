<?php

namespace Vulcan\Http\Controllers;

use Illuminate\Http\Request;
use Vulcan\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
}
