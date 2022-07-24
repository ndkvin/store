<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTransactionsController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
      return view('pages.dashboard-transactions');
    }

    public function detail() {
        return view('pages.dashboard-transaction-detail');
    }
}
