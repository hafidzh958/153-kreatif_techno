<?php

namespace App\Http\Controllers;

use App\Models\HomeSetting;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $home = HomeSetting::first();
        $services = \App\Models\HomeService::latest()->take(6)->get();
        $projects = \App\Models\HomeProject::latest()->take(6)->get();

        return view('user.home', compact('home', 'services', 'projects'));
    }
}