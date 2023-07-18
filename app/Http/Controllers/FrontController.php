<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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

    public function contact_us()
    {
        return view('front-layouts.pages.contactUs');
    }

    public function support_msg(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|regex:/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            Support::create([
                'user_name' => $request->name,
                'user_email' => $request->email,
                'message' => $request->message,
            ]);
            Session::flash('message', 'Your Message has been forwarded to the Support Successfully. We will contact you soon.');
            return redirect()->back();
        }
    }
}
