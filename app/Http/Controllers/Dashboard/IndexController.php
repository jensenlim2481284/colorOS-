<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{


    # Home page 
    public function index()
    {
     
        return view('pages.dashboard.index');
    }


    # Create app page 
    public function createApp()
    {
        session(['created'=>true]);
        return view('pages.dashboard.app.create');
    }

    
    # Manage app page 
    public function manageApp()
    {
        session(['created'=>true]);
        return view('pages.dashboard.app.manage');
    }


    # Documentation page 
    public function documentation()
    {
        session(['created'=>false]);
        return view('pages.dashboard.documentation');
    }


    # Explore page 
    public function explore()
    {
        return view('pages.dashboard.explore');
    }


}
