<?php

namespace Modules\TempMailer\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\PluginOptionService;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    private PluginOptionService $pluginOptionService;

    public function __construct(PluginOptionService $pluginOptionService)
    {
        $this->pluginOptionService = $pluginOptionService;
    }

    public function index()
    {
        if (auth()->user()->hasPermission('manage_plugins'))
        {
            return view('tempmailer::config', [
                'apiUri' => $this->pluginOptionService->get('temp_mailer', 'api_url', ''),
                'apiKey' => $this->pluginOptionService->get('temp_mailer', 'api_key', ''),
            ]);
        }

        abort(403);
    }

    public function store(Request $request)
    {
        if (auth()->user()->hasPermission('manage_plugins'))
        {
            // Validate
            $validated = $request->validate([
                'api_url' => 'required|max:255',
                'api_key' => 'required',
            ]);

            $this->pluginOptionService->set('temp_mailer', 'api_url', $validated['api_url']);
            $this->pluginOptionService->set('temp_mailer', 'api_key', $validated['api_key']);

            flash()->addSuccess('Configuration updated successfully.', 'TempMailer Plugin');
            return redirect()->back();
        }

        abort(403);
    }
}
