<?php

namespace Modules\TempMailer\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ConfigController extends Controller
{
    public function index()
    {
        return view('tempmailer::config');
    }
}
