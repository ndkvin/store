<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class DashboardTransactionsController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
      $sell = TransactionDetail::with(['transaction.user', 'product.image'])
        ->whereHas('product', function($product) {
          $product->where('users_id', Auth::user()->id);
        });
      return view('pages.dashboard-transactions', [
        'sell' => $sell->get()
      ]);
    }

    public function detail() {
        return view('pages.dashboard-transaction-detail');
    }
}
