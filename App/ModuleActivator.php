<?php

namespace Modules\TempMailer\App;

use Artisan;

class ModuleActivator
{
    public static function activate(): void
    {
        // Custom activation logic, e.g., run migrations, seed data

//        Artisan::call('migrate', [
//            '--path' => 'Modules/TempMailer/Database/Migrations',
//            '--force' => true,
//        ]);

        // Custom activation logic, e.g., run migrations, seed data
    }

    public static function deactivate(): void
    {
//        Artisan::call('migrate:rollback', [
//            '--path' => 'Modules/TempMailer/Database/Migrations',
//        ]);

        // Custom deactivation logic, e.g., remove settings or data
    }
}
