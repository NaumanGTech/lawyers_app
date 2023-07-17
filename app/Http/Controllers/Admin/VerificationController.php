<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notifications\BlockUser;
use App\Notifications\DocumentsApproved;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class VerificationController extends Controller
{
    public function index(){
        $user = User::where('role', 'lawyer')->where('is_document_submit', 1)->where('is_doc_approved', 0)->get();
        return view('layouts.pages.verification.index', get_defined_vars());
    }

    public function notify(){
        if (auth()->user()) {
            $user = User::first();
            Auth::user()->notify(new DocumentsApproved($user));
        }
        dd('ok');
    }

    public function blockUser(){
        $user = User::where('role', 'lawyer')->first();
        Notification::send($user, new BlockUser);

        dd('done');
        // return view('layouts.pages.dashboard');
    }

    public function markAsRead($id){
        if($id){
            auth()->user()->notifications->where('id', $id)->markAsRead();
            // we can find this method in Models->user->notifiable->HasDatabaseNotifications;
        }
        return redirect()->back();
    }
}
