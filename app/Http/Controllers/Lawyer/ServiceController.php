<?php

namespace App\Http\Controllers\Lawyer;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        $data = Service::where('user_id', Auth::id())->get();
        return view('front-layouts.pages.lawyer.service.list', get_defined_vars());
    }

    public function create()
    {
        $id = 0;
        $categories = Category::get();
        return view('front-layouts.pages.lawyer.service.create', get_defined_vars());
    }

    public function store(Request $request)
    {
        //
    }
    public function detail()
    {
        //
    }

    public function delete(Request $request)
    {
        //
    }

    public function category_list(){
        //
    }
}
