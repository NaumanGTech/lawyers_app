<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front-layouts.pages.home');
    }

    public function categories()
    {
        return view('front-layouts.pages.categories');
    }

    public function lawyers_with_category()
    {
        return view('front-layouts.pages.lawyers');
    }

    public function lawyers_online()
    {
        return view('front-layouts.pages.online_lawyers');
    }
}
