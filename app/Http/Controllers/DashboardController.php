<?php

namespace Vulcan\Http\Controllers;

use Illuminate\Http\Request;
use Vulcan\Http\Requests;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}
