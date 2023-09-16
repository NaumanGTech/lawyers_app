<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('layouts.pages.dashboard');
    }

    public function chat(){
        $users = User::where('role', 'lawyer')->get();
        return view('front-layouts.pages.chat.chat', get_defined_vars());
    }
}
