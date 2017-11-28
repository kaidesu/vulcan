<?php

namespace App\Http\Controllers;

class ApplicationController extends Controller
{
    /**
     * Bootstrap our application view. As Vulcan is a SPA,
     * Vue-Router handles the bulk of our application.
     *
     * @return Response
     */
    public function index()
    {
        return view('application');
    }
}
