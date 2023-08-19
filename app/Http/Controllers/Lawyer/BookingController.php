<?php

namespace App\Http\Controllers\lawyer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $card_heading = 'All Orders';
        $data = Order::where('lawyer_id', Auth::id())->with('customer')->get();
        return view('front-layouts.pages.lawyer.orders.all_orders', get_defined_vars());
    }
}
