<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Str;

class DashboardProductsController extends Controller
{
        
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index() {
      $products = Product::with(['image','category'])
                      ->where('users_id', Auth::user()->id)
                      ->get();

      return view('pages.dashboard-products', [
        'products' => $products
      ]);
    }

    public function create() {
      $categories = Category::all();
      return view('pages.dashboard-product-create', [
        'categories' => $categories,
      ]);
    }

    public function detail() {
      return view('pages.dashboard-product-detail');
    }

    public function store(ProductRequest $req) {
      $data = $req->all();

      $data['slug'] = Str::slug($req->name);

      $product = Product::create([
        'categories_id' => $data['categories_id'],
        'users_id' => Auth::user()->id,
        'name' => $data['name'],
        'slug' => $data['slug'],
        'description' => $data['categories_id'],
        'price' => $data['price'],
      ]);
      

      $file_name = $req->file('thumnails')->store('assets/products', 'public');
      Image::create([
        'products_id' => $product->id,
        'file_name' => $file_name,
      ]);

      return redirect()->route('dashboard-product');
    }
}
