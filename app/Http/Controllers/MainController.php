<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function home()
    {
        $pageSetting = \App\Models\PageSetting::first();
        return view('index', compact('pageSetting'));
    }
}
