<?php

namespace Vulcan\Http\Controllers\Installer;

use Illuminate\Http\Request;
use Vulcan\Http\Requests;
use Vulcan\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Display the installer's welcome page.
     *
     * @return Response
     */
    public function index()
    {
        return view('installer.welcome');
    }
}
