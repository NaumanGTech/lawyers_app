<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\Wallet;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //  Services
    public function order_index()
    {
        $obj = Order::where('customer_id', auth()->user()->id)->get();
        // dd($obj);
        return view('front-layouts.pages.customer.order.index', get_defined_vars());
    }
    public function order_form($id)
    {
        $title = 'New service';
        $obj = array();
        if (isset($id) && !empty($id)) {
            $obj = Order::whereId($id)->first();
        }

        return view('layouts.pages.service.create', get_defined_vars());
    }

    public function order_store(Request $req, $id)
    {
        $orderDetail = session()->get('orderDetail');


        $auth = auth()->user();

        $customerWallet = Wallet::where('user_id', $auth->id)->first();

        if ($customerWallet != null && $customerWallet->amount >= $req->amount) {

            // Sufficient balance, process the order
            $customerWallet->amount -=  $req->amount;
            $customerWallet->save();

            $currentDateTime = Carbon::now();
            $lawyer = User::where('id', $req->lawyer_id)->first();

            $imageUpdateId = $id;
            if (isset($id) && !empty($id)) {
                $obj = Order::whereId($id)->update([
                    'lawyer_id' => $orderDetail['lawyer_id'],
                    'customer_id' => $auth->id,
                    'category_id' => $req->category_id,
                    'amount' => $orderDetail['amount'],
                    'booking_date' => $req->currentDateTime,
                    'lawyer_location' => $lawyer->city ?? 'no city provided',
                    'customer_location' => $auth->city ?? 'no city provided',
                ]);

                return redirect(route('service.index'));
            } else {
                //Create
                $obj = Order::create([
                    'lawyer_id' => $orderDetail['lawyer_id'],
                    'customer_id' => $auth->id,
                    'category_id' => $req->category_id,
                    'amount' => $orderDetail['amount'],
                    'booking_date' => $req->currentDateTime,
                    'lawyer_location' => $lawyer->city ?? 'no city provided',
                    'customer_location' => $auth->city ?? 'no city provided',
                ]);
                $imageUpdateId = $obj->id;
            }

            if ($req->file('jazzcash_slip')) {
                $paymentSlip = time() . '.' . $req->jazzcash_slip->extension();
                $req->jazzcash_slip->move(public_path('uploads/user'), $paymentSlip);
                Order::whereId($imageUpdateId)->update([
                    'payment_slip' => $paymentSlip
                ]);
            }
            if ($req->file('bank_slip')) {
                $paymentSlip = time() . '.' . $req->bank_slip->extension();
                $req->bank_slip->move(public_path('uploads/user'), $paymentSlip);
                Order::whereId($imageUpdateId)->update([
                    'payment_slip' => $paymentSlip
                ]);
            }
            session()->forget('orderDetail');
            return redirect()->route('lawyer.list')->with('message', 'Order placed successfully');

            // return response()->json(['message' => 'Order placed successfully']);
        } else {
            session()->forget('orderDetail');
            // return response()->json(['error' => 'Insufficient balance']);
            return redirect()->route('lawyer.list')->with('error', 'insuficient balance');
        }
    }

    public function order_detail($id)
    {
        $title = 'service Detail';
        $jobDetail = Order::where('id', $id)->first();
        return view('layouts.pages.service.detail', get_defined_vars());
    }

    public function order_delete(Request $req)
    {

        $delete = Order::destroy($req->id);


        if ($delete == 1) {
            $success = true;
            $message = "service deleted successfully";
        } else {
            $success = true;
            $message = "service not found";
        }
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }

    public function order_status(Request $request)
    {
        $status = $request->input('status');
        $updateOrderStatus = Order::where('id', $request->order_id)->first();

        if ($updateOrderStatus) {
            $updateOrderStatus->customer_status = $status;
            $updateOrderStatus->save();

            return redirect()->back()->with('success', 'Order status updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to update order status.');
        }
    }
}
