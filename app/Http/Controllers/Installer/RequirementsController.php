<?php

namespace Vulcan\Http\Controllers\Installer;

use Vulcan\Http\Controllers\Controller;

class RequirementsController extends Controller
{
    /**
     * Create a new RequirementsController instance.
     */
    public function __construct()
    {
        $this->extensions = [
            'openssl',
            'pdo',
            'mbstring',
            'tokenizer'
        ];
    }

    /**
     * Display the installer's requirements page.
     *
     * @return Response
     */
    public function index()
    {
        $requirements = $this->checkRequirements();

        return view('installer.requirements', compact('requirements'));
    }

    /**
     * Check the server requirements.
     *
     * @return array
     */
    private function checkRequirements()
    {
        $results = [];

        foreach ($this->extensions as $extension) {
            $results['extensions'][$extension] = true;

            if (! extension_loaded($extension)) {
                $results['extensions'][$extension] = false;

                $results['errors'] = true;
            }
        }

        return $results;
    }
}
