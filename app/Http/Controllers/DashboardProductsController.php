<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardProductsController extends Controller
{
        
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
      return view('pages.dashboard-products');
    }

    public function create() {
      return view('pages.dashboard-product-create');
    }

    public function detail() {
      return view('pages.dashboard-product-detail');
    }
}
