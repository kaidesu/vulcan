<?php

namespace App\Http\Controllers;

use Module;

class ModuleController extends Controller
{
    /**
     * Show a list of modules.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();

        return view('modules.index', compact('modules'));
    }
}
