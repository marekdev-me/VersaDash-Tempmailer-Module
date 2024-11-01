<?php

namespace Modules\TempMailer\App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\PluginOptionService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ConfigController extends Controller
{
    private PluginOptionService $pluginOptionService;

    public function __construct(PluginOptionService $pluginOptionService)
    {
        $this->pluginOptionService = $pluginOptionService;
    }

    public function index()
    {
        return view('tempmailer::config', [
            'apiUri' => $this->pluginOptionService->get('temp_mailer', 'api_url', ''),
            'apiKey' => $this->pluginOptionService->get('temp_mailer', 'api_key', ''),
        ]);
    }

    public function store(Request $request)
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
}
