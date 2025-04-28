<?php

namespace Modules\TempMailer\App;

use App\Abstract\AbstractModuleActivator;
use App\Services\PluginOptionService;
use Modules\ACL\App\Services\PermissionService;

class ModuleActivator extends AbstractModuleActivator
{
    protected static string $moduleName = "TempMailer";


    public static function activate(): void
    {
        // Setup Permissions
        PermissionService::module_create_permission(
            self::$moduleName,
            'view-sessions',
            'View Sessions',
            'Allows user to view sessions index',
            true
        );

        // Setup Permissions
        PermissionService::module_create_permission(
            self::$moduleName,
            'edit-sessions',
            'Edit Sessions',
            'Allows user to edit sessions data',
            true
        );
    }

    public static function deactivate(): void
    {
//        PluginOptionService::delete(self::$moduleName, 'api_url');
//        PluginOptionService::delete(self::$moduleName, 'api_key');
    }
}
