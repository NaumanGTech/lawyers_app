<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Http\Request;

class PusherController extends Controller
{
    public function index(){
        return view('front-layouts.pages.chat.index');
    }

    public function broadcast(Request $request){
        broadcast(new PusherBroadcast($request->get('message')))->toOthers();

        return view('front-layouts.pages.chat.broadcast', ['message' => $request->get('message')]);
    }

    public function receive(Request $request){
        return view('front-layouts.pages.chat.receive', ['message' => $request->get('message')]);
    }

}
