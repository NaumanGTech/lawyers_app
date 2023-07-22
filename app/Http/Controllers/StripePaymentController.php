<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Stripe\Charge;
use Stripe\Stripe;

class StripePaymentController extends Controller
{
    public function payment(Request $request){
       
        $orderDetail = $request;
        // session()->put('key', $orderDetail);
        // $amount = session('key');
        // dd($amount);
        return view('front-layouts.pages.customer.stripe-payment.payment-form',get_defined_vars());
    }
    
        public function call(Request $request)
        {
 
           
            Stripe::setApiKey('sk_test_51LDUI4JHbj47Pk0aU1DX0e1mXvnW0f8La2lB43KL92f39qTAW2gpN7LLwluneY2TXn2StND5s0b98JoU92kflzIW00GhtjQhMY');
            $customer = \Stripe\Customer::create(array(
                'name' => 'Junaid Ur Rehman',
                'description' => 'Booking Lawyers Service',
                'email' => 'rehmanjunaid215@gmail.com',
                'source' => $request->input('stripeToken'),
                "address" => ["city" => "Rahim Yar Khan", "country" => "Pakistan", "line1" => "510 Townsend St", "postal_code" => "64200", "state" => "Punjab"]
    
            ));
            try {
                Charge::create(array(
                    "amount" => $request->amount * 100,
                    "currency" => "pkr",
                    "description" => "Booking Lawyers Service'",
                    "customer" =>  $customer["id"],
                ));
                Session::flash('success-message', 'Payment done successfully !');
                return view('front-layouts.pages.customer.stripe-payment.payment-form');
            } catch (\Stripe\Error\Card $e) {
                Session::flash('fail-message', $e->get_message());
                return view('front-layouts.pages.customer.stripe-payment.payment-form');
            }
        }
}
