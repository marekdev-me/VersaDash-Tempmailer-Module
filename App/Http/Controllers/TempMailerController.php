<?php

namespace Modules\TempMailer\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TempMailerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tempmailer::index');
    }
}
