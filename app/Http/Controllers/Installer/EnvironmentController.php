<?php

namespace Vulcan\Http\Controllers\Installer;

use Illuminate\Http\Request;
use Vulcan\Http\Requests;
use Vulcan\Http\Controllers\Controller;

class EnvironmentController extends Controller
{
    /**
     * Create a new EnvironmentController instance.
     */
    public function __construct()
    {
        $this->envPath        = base_path('.env');
        $this->envExamplePath = base_path('.env.example');
    }

    /**
     * Display the installer's welcome page.
     *
     * @return Response
     */
    public function index()
    {
        $env = $this->loadEnvFile();

        return view('installer.environment', compact('env'));
    }

    /**
     * Store the environment configuration settings.
     *
     * @param  Request  $request
     */
    public function store(Request $request)
    {
        try {
            file_put_contents($this->envPath, $request->get('env'));
        } catch(Exception $e) {
            return redirect()->back()->withInput();
        }

        return redirect()->to('install/requirements');
    }

    /**
     * Return the contents of the .env file.
     *
     * @return string
     */
    private function loadEnvFile()
    {
        if (! file_exists($this->envPath)) {
            if (file_exists($this->envExamplePath)) {
                copy($this->envExamplePath, $this->envPath);
            } else {
                touch($this->envPath);
            }
        }

        return file_get_contents($this->envPath);
    }
}
