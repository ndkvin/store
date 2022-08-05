<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;

class DashboardController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
      $transactions = TransactionDetail::with(['transaction.user', 'product.image'])->whereHas('product', function(Builder $product) {
        $product->where('users_id', Auth::user()->id);
      });
      $revenue = TransactionDetail::get()->reduce(function ($carry, $item) {
        return $carry + $item->total_price;
      });

      $customer = User::count();
      return view('pages.dashboard', [
        'transaction_count' => $transactions->count(),
        'transaction_data' => $transactions->get(),
        'revenue' => $revenue,
        'customer' => $customer,
      ]);
    }
}
