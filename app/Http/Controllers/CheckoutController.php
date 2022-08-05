<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddressRequest;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function process(AddressRequest $req, $total) {
        $data = $req->all();
        $users_id = Auth::user()->id;
        $data['users_id'] = $users_id;

        $address = Address::where('users_id', $users_id)->count();
        if($address) {
          $add = Address::where('users_id', $users_id)->firstOrFail();
          $add->update($data);
        } else {
          Address::create($data);
        }


        $carts = Cart::with('user', 'product')->where('users_id', $users_id)->get();
        $code = 'STORE-' . mt_rand(0000,9999);
        $transaction = Transaction::create([
          'users_id' => $users_id,
          'insurence_price' => 0,
          'status' => 'UNPAID',
          'total_price' => $total,
          'shipping_price' => 0,
          'code' => $code,
        ]);

        foreach($carts as $cart) {
          $code = 'TRX-' . mt_rand(0000,9999);
          TransactionDetail::create([
              'transaction_id' => $transaction->id,
              'product_id' => $cart->products_id,
              'amount' => 1,
              'total_price' => $cart->product->price,
              'resi' => '',
              'shipping_status' => 'UNPAID',
              'code' => $code
          ]);
        }
        Cart::where('users_id', $users_id)->delete();
        return redirect()->route('home');
    }
}
