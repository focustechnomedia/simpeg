<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('content/dashboard_view');
    }
}
