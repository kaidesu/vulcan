<?php

namespace Vulcan\Http\Controllers\Installer;

use Vulcan\Http\Controllers\Controller;

class PermissionsController extends Controller
{
    /**
     * Create a new PermissionsController instance.
     */
    public function __construct()
    {
        $this->permissions = [
            'storage/app/'       => '775',
            'storage/framework/' => '755',
            'storage/logs/'      => '755',
            'bootstrap/cache/'   => '755'
        ];
    }

    /**
     * Display the installer's permissions page.
     *
     * @return Response
     */
    public function index()
    {
        $permissions = $this->checkPermissions();

        return view('installer.permissions', compact('permissions'));
    }

    /**
     * Check the folder permissions.
     *
     * @return array
     */
    private function checkPermissions()
    {
        foreach ($this->permissions as $folder => $permission) {
            $passes                   = (substr(sprintf('%o', fileperms(base_path($folder))), -4) >= $permission);
            $results['permissions'][] = [
                'folder'     => $folder,
                'permission' => $permission,
                'passes'     => $passes
            ];

            if (! $passes) {
                $results['errors'] = true;
            }
        }

        return $results;
    }
}
