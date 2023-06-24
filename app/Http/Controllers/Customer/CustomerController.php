<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('front-layouts.pages.customer.dashboard');
    }

    // lawyers
    public function lawyer_list()
    {
        $lawyers = User::where('role', 'lawyer')->get();
        return view('front-layouts.pages.customer.lawyers.index', get_defined_vars());
    }

    public function lawyer_profile($id)
    {
        $lawyerProfile = User::where('id', $id)->first();
        return view('front-layouts.pages.customer.lawyers.profile', get_defined_vars());
    }
}
