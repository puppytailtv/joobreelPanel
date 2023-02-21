<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebviewController extends Controller
{
    protected function privacy_policy()
    {
        return view('webview.privacy_policy');
    }

    protected function feedback()
    {
        return view('webview.feedback');
    }
}
