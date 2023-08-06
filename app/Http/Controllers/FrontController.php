<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use App\Models\Support;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $services = Service::get();
        $cities = User::where('role', 'lawyer')->get();

        return view('front-layouts.pages.home', get_defined_vars());
    }

    public function categories()
    {
        $categories = Category::get();
        return view('front-layouts.pages.categories', get_defined_vars());
    }

    public function lawyers_with_category($id)
    {
        $lawyerDetail = User::where('id', $id)->first();
        return view('front-layouts.pages.lawyers', get_defined_vars());
    }

    public function lawyers_online($id)
    {
        $lawyersByCategories = User::where('role', 'lawyer')->where('category_id', $id)->with('category')->get();
        $categories = Category::get();
        return view('front-layouts.pages.online_lawyers', get_defined_vars());
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

    public function search(Request $request)
    {
        $selectedCategory = $request->input('select_category');
        $selectedLocation = $request->input('select_location');


        $lawyersByCategories = User::where('category_id', $selectedCategory)
            ->where('city', $selectedLocation)
            ->get();
        $categories = Category::get();

        return view('front-layouts.pages.online_lawyers', get_defined_vars());
    }


    public function advanceSearch(Request $request)
    {
        $keyword = $request->input('keyword');
        $sortBy = $request->input('sort_by');
        $category = $request->input('category');
        $location = $request->input('location');

       
        $query = User::where('category_id', $category)
            ->where('city', 'like', '%' . $location . '%');

      
        if ($sortBy === 'price_low_to_high') {
            $query->orderBy('price', 'asc');
        } elseif ($sortBy === 'price_high_to_low') {
            $query->orderBy('price', 'desc');
        } elseif ($sortBy === 'newest') {
            $query->orderBy('created_at', 'desc');
        }

        // Get the filtered results
        $lawyersByCategories = $query->get();
        $categories = Category::get();
        // Pass the filtered results to the view
        return view('front-layouts.pages.online_lawyers', get_defined_vars());
    }
}
