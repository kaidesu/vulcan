<?php

namespace Vulcan\Http\Controllers\Installer;

use Artisan;
use Vulcan\Http\Controllers\Controller;

class InstallController extends Controller
{
    /**
     * Display the installer's welcome page.
     *
     * @return Response
     */
    public function welcome()
    {
        return view('installer.welcome');
    }

    /**
     * Install and seed the database.
     *
     * @return Response
     */
    public function install()
    {
        Artisan::call('migrate');
        Artisan::call('db:seed');

        file_put_contents(storage_path('installed'), '');

        return view('installer.installed');
    }
}
