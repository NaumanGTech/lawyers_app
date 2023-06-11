<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(){
        return view('layouts.pages.dashboard');
    }

    public function admin_login(Request $request){
        $user = User::where('email', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
                if($user->role == "admin"){
                    // dd('ok');
                    return view('layouts.pages.dashboard');
                }
            }
        }
    }
}
