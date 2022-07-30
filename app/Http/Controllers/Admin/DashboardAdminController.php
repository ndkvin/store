<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;

class DashboardAdminController extends Controller
{
            
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
      $total_customer = User::count();
      $transaction = Transaction::count();
      $revenue = Transaction::sum('total_price');
      return view('pages.admin.dashboard', [
        'total_customer'=> $total_customer,
        'transaction' => $transaction,
        'revenue' => $revenue,
      ]);
    }
}
