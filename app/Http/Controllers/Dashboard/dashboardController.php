<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
       return view('backend.dashboard');
    }

    public function dashboardView()
    {
        return view('backend.dashboard.view');
    }
}
