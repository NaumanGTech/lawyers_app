<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use App\Models\User;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function index(){
        $users = User::where('role', 'lawyer')->get();
        return view('front-layouts.pages.chat.index', get_defined_vars());
    }

    public function broadcast(Request $request){
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();

        return view('front-layouts.pages.chat.broadcast', ['message' => $request->get('message')]);
    }

    public function receive(Request $request){
        return view('front-layouts.pages.chat.receive', ['message' => $request->get('message')]);
    }

}
