<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function customerProfile()
    {
        $auth = auth()->user()->id;
        $customerProfile = User::where('id', $auth)->first();
        return view('front-layouts.pages.customer.profile', get_defined_vars());
    }

    public function customerProfileUpdate(User $user, Request $request)
    {
        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();
        $user->update($request->all());

        if ($request->file()) {
            // dd($user);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/user'), $imageName);
            User::whereId($user->id)->update([
                'image' => $imageName
            ]);
        }

        return back();
    }
}
