<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //  Transaction
    public function transaction_index()
    {
        $obj = Transaction::get();
        return view('layouts.pages.transaction.index', get_defined_vars());
    }
    public function transaction_form($id)
    {
        $title = 'New Transaction';
        $obj = array();
        if (isset($id) && !empty($id)) {
            $obj = Transaction::whereId($id)->first();
        }

        return view('layouts.pages.transaction.create', get_defined_vars());
    }

    public function transaction_store(Request $req, $id)
    {

        $imageUpdateId = $id;
        if (isset($id) && !empty($id)) {
            $obj = Transaction::whereId($id)->update([
                'order_id' => $req->order_id,
                'user_id' => $req->user_id,
                'payment_id' => $req->payment_id,
                'transaction_type' => $req->transaction_type,
                'amount' => $req->amount,
                'date' => $req->date,
                'status' => $req->status,

            ]);

            return redirect(route('admin.general.setting.index'));
        } else {
            //Create
            $obj = Transaction::create([
                'order_id' => $req->order_id,
                'user_id' => $req->user_id,
                'payment_id' => $req->payment_id,
                'transaction_type' => $req->transaction_type,
                'amount' => $req->amount,
                'date' => $req->date,
                'status' => $req->status,
            ]);
            $imageUpdateId = $obj->id;
        }

        return redirect(route('admin.general.setting.index'));
    }

    public function transaction_detail($id)
    {
        $title = 'Transaction Detail';
        $transaction = Transaction::where('id', $id)->first();
        return view('layouts.pages.transaction.detail', get_defined_vars());
    }

    public function transaction_delete(Request $req)
    {

        $delete = Transaction::destroy($req->id);


        if ($delete == 1) {
            $success = true;
            $message = "Transaction deleted successfully";
        } else {
            $success = true;
            $message = "Transaction not found";
        }
        return response()->json([
            'success' => $success,
            'message' => $message,
        ]);
    }
}
