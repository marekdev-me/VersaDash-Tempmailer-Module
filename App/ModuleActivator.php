<?php

namespace Modules\TempMailer\App;

use App\Services\PluginOptionService;
use Artisan;

class ModuleActivator
{
    public static function activate(): void
    {
        //
    }

    public static function deactivate(): void
    {
        PluginOptionService::delete('temp_mailer', 'api_url');
        PluginOptionService::delete('temp_mailer', 'api_key');
    }
}
