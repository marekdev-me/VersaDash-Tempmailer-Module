<?php

namespace Modules\TempMailer\App;

use App\Abstract\AbstractModuleActivator;

class Module extends AbstractModuleActivator
{
    public static function activate(): void
    {
        // TODO: Implement activate() method.
    }

    public static function deactivate(): void
    {
        // TODO: Implement deactivate() method.
    }

    public static function install(): void
    {
        $sourcePath = base_path('vendor/versadash/tempmailer');
        $destinationPath = base_path('Modules/TempMailer');

        if (\File::isDirectory($sourcePath)) {
            \File::copyDirectory($sourcePath, $destinationPath);

            \File::deleteDirectory($destinationPath);
        }
    }

    public static function deinstall(): void
    {
        // TODO: Implement deinstall() method.
    }
}
