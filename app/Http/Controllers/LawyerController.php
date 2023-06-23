<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LawyerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::user()->is_document_submit == 0) {
            return redirect()->route('lawyer.document.verification');
        } else {
            return view('front-layouts.pages.lawyer.dashboard');
        }
    }

    public function document_submission()
    {
        return view('front-layouts.pages.lawyer.document-verification');
    }

    public function submit_documents(Request $request)
    {
        $auth_user = Auth::user();
        $user = User::where('id', $auth_user->id)->first();
    }
}
